<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        return [
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
            'password' => 'required|confirmed|min:6',
            'doc_copiya_passport' => 'required|mimes:pdf,jpeg,jpg,png,doc|max:10000',
            'doc_copiya_inn' => 'required|mimes:pdf,jpeg,jpg,png,doc|max:10000',
            'doc_copiya_snils' => 'required|mimes:pdf,jpeg,jpg,png,doc|max:10000',
            'doc_doverennost' => 'mimes:pdf,jpeg,jpg,png,doc|max:9000',
        ];
    }
}
