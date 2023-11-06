<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Requests\RequestUser;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation.
    |
    */
    use RegistersUsers;

    /**
     * Show the application form.
     *
     * @return \Illuminate\View\View
     */
    public function showForm()
    {
        return view('auth.register');
    }

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
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, RequestUser::$rules);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
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
            $user->password = bcrypt($data['password']);

            DB::transaction(function() use ($user) {
                $user->save();
             });

            Session::flash('message_sucesso', 'Usuário criado.');
            return $user;
        } catch (Exception $erro) {
            return response()->json(['erros' => $erro]);
        }
    }
}
