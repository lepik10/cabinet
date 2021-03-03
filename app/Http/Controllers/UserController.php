<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\FizInfo;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function registration()
    {
        return view('registration');
    }

    public function create(UserRequest $request)
    {
        // Получаем файлы
        $files = $request->file();
        $files_names = array_keys($files);

        // Получаем необходимые поля для таблицы информации о юзере за исключением файлов
        $inputs_fields = $request->except(array_merge(['name', 'email', 'password', 'password_confirmation'], $files_names));
        $inputs_user = $request->only(['name', 'email', 'password']);

        $fiz_info = FizInfo::create($inputs_fields); // Сделать зависимость от страницы?

        // Загружаем файлы в папку с нужным id юзера
        if ($files) {
            $doc_folder_name = FizInfo::$doc_folder_name;
            foreach($files as $name => $file) {
                $path = $file->storeAs("{$doc_folder_name}/{$fiz_info->id}", $file->getClientOriginalName(), 'private');
                $inputs_forms[$name] = $path;
            }
            $fiz_info->update($inputs_forms);
        }

        $inputs_user['role_id'] = 3; // Сделать зависимость от страницы?
        $inputs_user['password'] = Hash::make($inputs_user['password']);

        $fiz_info->user()->create($inputs_user); // Сделать зависимость от страницы?

        return back()->with('registration_complete', __('messages.registration_complete'));
    }
}
