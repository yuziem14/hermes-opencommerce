<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    public function attributes() {
      return [
        'name' => 'Nome',
        'description' => 'Descrição',
        'price' => 'Preço',
        'amount' => 'Quantidade',
        'tags' => 'Tags',
        'images' => 'Imagens'
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
          'name' => 'required|min:4|max:255',
          'description' => 'nullable',
          'price' => 'required|numeric|min:0',
          'amount' => 'required|numeric|min:1',
          'tags' => 'nullable',
          'images' => 'nullable',
          'images.*' => 'file|mimetypes:image/png,image/jpeg'
        ];
    }

    public function messages() {
      return [
        'required' => ':attribute deve ser preenchido.',
        'min' => ':attribute deve ter ao menos :min caracteres.',
        'max' => ':attribute deve ter no máximo :max caracteres.',
        'numeric' => ':attribute deve ser um número',
        'numeric.min' => ':attribute deve ser maior que :value',
        'file' => ':attribute deve ser um arquivo.',
        'mimetypes' => ':attribute aceita apenas os formatos: :values.'
      ];
    }
}
