<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsDocumentBelongsToUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        // Проверяем, что файл принадлежит пользователю
        $user_id = $request->user()->userable->id;
        $folder_id = preg_replace('/^(.+)\/([0-9])+\/(.+)/', '$2', $request->file);
        $is_folder = strpos($request->file, $request->user()->userable->getFolderName());

        if ($user_id == $folder_id && $is_folder !== false) {
            return $next($request);
        } else {
            return abort(404);
        }

    }
}
