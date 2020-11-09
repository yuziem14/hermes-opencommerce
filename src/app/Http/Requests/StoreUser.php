<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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

    public function attributes() {
      return [
        'name' => 'Nome',
        'username' => 'Nickname',
        'email' => 'E-mail',
        'password' => 'Senha',
        'password_confirmation' => 'Confirmação de senha',
        'photo' => 'Foto'
      ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'name' => 'required|min:3|max:255',
          'username' => 'required|unique:users,username|min:4|max:150|regex:/^(?=.{4,20}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$/',
          'email' => 'required|email:rfc|unique:users,email|max:255',
          'password' => 'required|min:8|max:60',
          'password_confirmation' => 'required|same:password',
          'photo' => 'file|mimetypes:image/png,image/jpeg|nullable'
        ];
    }

    public function messages() {
      return [
        'required' => ':attribute deve ser preenchido.',
        'min' => ':attribute deve ter ao menos :min caracteres.',
        'max' => ':attribute deve ter no máximo :max caracteres.',
        'unique' => ':attribute já existente.',
        'email' => ':attribute não possui um formato válido.',
        'same' => ':attribute e :other não coincidem.',
        'file' => ':attribute deve ser um arquivo.',
        'mimetypes' => ':attribute aceita apenas os formatos: :values.',
        'username.regex' => ':attribute suporta apenas letras, números, \'_\' e \'.\'',
      ];
    }
}
