<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RequestUser extends FormRequest
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
    public static $rules = [
        'nome' => ['required', 'string', 'regex:/^[a-zA-Zà-úÀ-Ú  ,.\'-]+$/'],
        'telefone' => ['required', 'string'],
        'data_nascimento' => ['required', 'date', 'after:01/01/1920', 'before:tomorrow'],
        'cpf' => ['required', 'string'],
        'cep' => ['required', 'string', 'max:10'],
        'endereco' => ['required', 'string', "regex:/^[a-zA-Zà-úÀ-Ú0-9|'|ª|º|\-|\s]+$/"],
        'estado' => 'required',
        'cidade' => ['required', 'string', "regex:/^[a-zA-Zà-úÀ-Ú0-9|'|ª|º|\-|\s]+$/"],
        'bairro' => ['required', 'string', "regex:/^[a-zA-Zà-úÀ-Ú0-9|'|ª|º|\-|\s]+$/"],
        'numero' => ['required', 'string', 'max:10', 'regex:/([a-zA-Z])?(\d)([a-zA-Z])?/'],
        'complemento' => ['required', 'string', "regex:/^[a-zA-Zà-úÀ-Ú0-9|'|ª|º|\-|\s]+$/"],
        'email' => ['required', 'string', 'email', 'max:255', 'regex:/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9\._-]+.(\.[a-zA-Z]{2,4})$/i'],
        'password' => ['required', 'string', 'min:4'],
        'password-confirm' => ['required', 'string', 'min:4'],
    ];

    public function rules()
    {
        return self::$rules;
    }

    public function attributes()
    {
        return [
            'nome' => 'Nome',
            'telefone' => 'Telefone',
            'data_nascimento' => 'Data de Nascimento',
            'cpf' => 'CPF',
            'cep' => 'CEP',
            'endereco' => 'Endererço',
            'estado' => 'Estado',
            'cidade' => 'Cidade',
            'bairro' => 'Bairro',
            'numero' => 'Número',
            'complemento' => 'Complemento',
            'email' => 'Email',
            'password' => 'Senha',
            'password-confirm' => 'Confirmar Senha',
        ];
    }

    public function messages()
    {
        return [
            'nascimento.before' => 'O campo Data de Nascimento não pode ser uma data futura.',
        ];
    }
}
