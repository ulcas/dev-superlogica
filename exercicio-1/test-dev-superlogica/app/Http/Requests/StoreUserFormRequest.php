<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserFormRequest extends FormRequest
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
            'name' => [
                'required',
                'string',
                'min:3',
                'max:60',
            ],
            'email' => [
                'required',
                'email',
                'unique:users',
            ],
            'password' => [
                'required',
                'min:8',
                'max:16',
                'regex:/[aA-zZ]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*#?&]*/'
            ],
            'zipCode' => [
                'required',
                'formato_cep',
            ],
            'userName' => [
                'required',
                'regex:/^[a-zA-Z0-9]*[a-zA-Z]+[a-zA-Z0-9]*$/',
                'min:3',
                'max:12',
            ]
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'O nome é obrigatório',
            'name.min' => 'O nome deve ter no minimo 3 caratecteres',
            'name.max' => 'O nome deve ter no maximo 60 caratecteres',
            'email.required' => 'O email é obrigatório',
            'email.email' => 'Email inválido',
            'email.unique' => 'Email já utilizado',
            'password.required' => 'Senha obrigatório',
            'password.min' => 'A senha deve conter no minimo 8 caratecteres',
            'password.max' => 'A senha deve conter no maximo 16 caratecteres',
            'password.regex' => 'A senha deve conter no minimo 1 letra e 1 número',
            'zipCode.required' => 'O CEP é obrigatório',
            'zipCode.formato_cep' => 'CEP inválido',
            'userName.required' => 'Nome de Login é obrigatório',
            'userName.regex' => 'Nome de Login: Não é permitido somente números e carateres especiais',
            'userName.min' => 'Nome de Login: Deve conter no minimo 3 caracteres',
            'userName.max' => 'Nome de Login: Deve conter no maximo 12 caracteres',
        ];
    }
}
