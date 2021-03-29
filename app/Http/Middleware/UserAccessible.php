<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAccessible
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
        $user = Auth::user();

        // Проверяем, если статус равен 0 то снимаем авторизацию и редиректим с сообщением
        if ($user->status == 0 || $user->role->id == 0 || $user->role->id == 1) {
            Auth::logout();
            return redirect()->route('user.login')->with(['login_error' => __('messages.login_error_status')]);
        }

        return $next($request);
    }
}
