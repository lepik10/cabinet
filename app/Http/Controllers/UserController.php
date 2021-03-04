<?php

namespace App\Http\Controllers;

use App\Models\FizInfo;
use App\Models\UrInfo;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function registration(string $type = null)
    {
        switch($type) {
            case '': return view('registrations.fiz');
            case 'ur': return view('registrations.ur');
            default: abort(404);
        }
    }

    public function create(UserRequest $request)
    {

        // Получаем файлы
        $files = $request->file();
        $files_names = array_keys($files);

        // Получаем необходимые поля для таблицы информации о юзере за исключением файлов
        $inputs_fields = $request->except(array_merge([
            'name',
            'name_ur',
            'email',
            'password',
            'password_confirmation',
            'role_id'
        ], $files_names));

        $inputs_user = $request->only([
            'name',
            'name_ur',
            'email',
            'password',
            'role_id'
        ]);

        if (isset($inputs_user['name_ur'])) {
            $inputs_user['name'] = $inputs_user['name_ur'];
            unset($inputs_user['name_ur']);
        }

        // В зависимости от роли - разные модели

        switch($inputs_user['role_id']) {
            case 3: $user_info = FizInfo::create($inputs_fields); break;
            case 4: $user_info = UrInfo::create($inputs_fields); break;
            default: abort(404);
        }

        // Загружаем файлы в папку с нужным id юзера
        if ($files) {
            $doc_folder_name = $user_info->getFolderName();
            foreach($files as $name => $file) {
                $path = $file->storeAs("{$doc_folder_name}/{$user_info->id}", $file->getClientOriginalName(), 'private');
                $inputs_forms[$name] = $path;
            }
            $user_info->update($inputs_forms);
        }

        $inputs_user['password'] = Hash::make($inputs_user['password']);

        $user_info->user()->create($inputs_user); // Сделать зависимость от страницы?

        return back()->with('registration_complete', __('messages.registration_complete'));
    }
}
