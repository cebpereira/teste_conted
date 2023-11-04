<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestRegister extends FormRequest
{
    /**
     * Determine if the usuario is authorized to make this request.
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
        'telefone' => ['required', 'string', 'max:14'],
        'data_nascimento' => ['required', 'date', 'after:01/01/1920', 'before:tomorrow'],
        'cpf' => ['required', 'string', "regex:/^[a-zA-Zà-úÀ-Ú0-9|'|ª|º|\-|\s]+$/"],
        'cep' => ['required', 'string', 'max:10'],
        'endereco' => ['required', 'string', "regex:/^[a-zA-Zà-úÀ-Ú0-9|'|ª|º|\-|\s]+$/"],
        'estado' => 'required',
        'cidade' => ['required', 'string', "regex:/^[a-zA-Zà-úÀ-Ú0-9|'|ª|º|\-|\s]+$/"],
        'bairro' => ['required', 'string', "regex:/^[a-zA-Zà-úÀ-Ú0-9|'|ª|º|\-|\s]+$/"],
        'numero' => ['required', 'string', 'max:10', 'regex:/([a-zA-Z])?(\d)([a-zA-Z])?/'],
        'complemento' => ['required', 'string', "regex:/^[a-zA-Zà-úÀ-Ú0-9|'|ª|º|\-|\s]+$/"],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:usuarios', 'regex:/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9\._-]+.(\.[a-zA-Z]{2,4})$/i'],
        'senha' => ['required', 'string', 'min:8', 'confirmed'],
        'confirmar_senha' => ['required', 'string', 'min:8', 'confirmed', 'same_at:senha'],
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
            'senha' => 'Senha',
            'confirmar_senha' => 'Confirmar senha',
        ];
    }

    public function messages()
    {
        return [
            'nascimento.before' => 'O campo Data de Nascimento não pode ser uma data futura.',
        ];
    }
}
