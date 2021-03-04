<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Role;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // Получаем все возможные id для пользователей
        $usersRolesIds = Role::users()->pluck('id')->toArray();

        // Валидация для физических лиц
        $userFizValidators = [
            'name' => 'required',
            'birth_date' => 'required|size:10',
            'birth_place' => 'required',
            'citizenship' => 'required',
            'passport_ser' => 'required|size:4',
            'passport_num' => 'required|size:6',
            'passport_who' => 'required',
            'passport_date' => 'required|size:10',
            'address_reg' => 'required',
            'address_prozh' => 'required',
            'phone' => 'required|size:18',
            'inn' => 'nullable|size:12',
            'snils' => 'nullable|size:11',
            'email' => ['required', Rule::unique('users')],
            'role_id' => ['required', Rule::in($usersRolesIds)],
            'password' => 'required|confirmed|min:6',
            'doc_copiya_passport' => 'required|mimes:pdf,jpeg,jpg,png,doc|max:10000',
            'doc_copiya_inn' => 'required|mimes:pdf,jpeg,jpg,png,doc|max:10000',
            'doc_copiya_snils' => 'required|mimes:pdf,jpeg,jpg,png,doc|max:10000',
            'doc_doverennost' => 'mimes:pdf,jpeg,jpg,png,doc|max:10000',
        ];

        // Валидация для юридических лиц
        $userUrValidators = [
            'name_ur' => 'required',
            'name_full' => 'required',
            'kpp' => 'required',
            'ogrn' => 'required',
            'inn' => 'nullable|size:12',
            'address_ur' => 'required',
            'address_fact' => 'required',
            'bank_name' => 'required',
            'dolzhnost_fio' => 'required',
            'bank_rc' => 'required',
            'phone' => 'required|size:18',
            'contact_phone' => 'required|size:18',
            'email' => ['required', Rule::unique('users')],
            'role_id' => ['required', Rule::in($usersRolesIds)],
            'password' => 'required|confirmed|min:6',
            'doc_copiya_inn' => 'required|mimes:pdf,jpeg,jpg,png,doc|max:10000',
            'doc_ogrn' => 'required|mimes:pdf,jpeg,jpg,png,doc|max:10000',
            'doc_egrul' => 'mimes:pdf,jpeg,jpg,png,doc|max:10000',
            'doc_copiya_polnomoch' => 'required|mimes:pdf,jpeg,jpg,png,doc|max:10000',
        ];

        // Разные валидации в зависимости от типа пользователя

        switch($this->role_id) {
            case 3: return $userFizValidators;
            case 4: return $userUrValidators;
        }

    }
}
