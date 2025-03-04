<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserFormRequest extends FormRequest
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

        $id = $this->id ?? '';

        return [
            'name' => [
                'nullable',
                'string',
                'min:3',
                'max:60'
            ],
            'email' => [
                'nullable',
                'email',
                "unique:users,email,{$id},id",
            ],
            'password' => [
                'nullable',
                'min:8',
                'max:16',
                'regex:/[aA-zZ]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*#?&]*/'
            ],
            'zipCode' => [
                'nullable',
                'formato_cep',
            ],
            'userName' => [
                'nullable',
                'regex:/^[a-zA-Z0-9]*[a-zA-Z]+[a-zA-Z0-9]*$/',
                'min:3',
                'max:12',
                "unique:users,user_name,{$id},id",
            ],
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
            'userName.unique' => 'Nome de Login já utilizado',
        ];
    }
}
