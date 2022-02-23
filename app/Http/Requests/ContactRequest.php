<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest  {
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
    public function rules()  {
        return [
                'login' => 'required|min:2|max:50',
                'name' => 'required|min:1|max:50',
                'email' => 'required|min:1|max:30',
                'password' => 'required|min:3|max:20',
        ];
    }


    public function messages() {
        return [
            'login.required' => 'Поле логин является обязательным',
            'name.required' => 'Поле имя является обязательным',
            'email.required' => 'Поле email является обязательным',
            'password.required' => 'Введите пароль',

            'login.min' => 'Поле Логин дожно содержать больше двух символа',
            'name.min' => 'Поле Имя дожно содержать больше одного символа',
            'email.min' => 'Поле Email дожно содержать больше одного символа',
            'password.min' => 'Поле Пароль дожно содержать больше трёх символов',
        ];
    }

}
