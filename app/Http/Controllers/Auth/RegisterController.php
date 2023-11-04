<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestRegister;
use Illuminate\Http\Request;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Exception;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, RequestRegister::$rules);
    }


    public function showForm()
    {
        return view('auth.register');
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @return \App\Models\User|\Illuminate\Http\JsonResponse
     */
    protected function create(array $data)
    {
        try {
            $user = new User();
            $user->nome = $data['nome'];
            $user->telefone = $data['telefone'];
            $user->data_nascimento = $data['data_nascimento'];
            $user->cpf = $data['cpf'];
            $user->cep = $data['cep'];
            $user->endereco = $data['endereco'];
            $user->estado = $data['estado'];
            $user->cidade = $data['cidade'];
            $user->bairro = $data['bairro'];
            $user->numero = $data['numero'];
            $user->complemento = $data['complemento'];
            $user->email = $data['email'];
            $user->senha = bcrypt($data['senha']);

            DB::transaction(function() use ($user) {
                $user->save();
             });

            return $user;
        } catch (Exception $erro) {
            return response()->json(['erros' => $erro]);
        }
    }
}
