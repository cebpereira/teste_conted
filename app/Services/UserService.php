<?php

namespace App\Services;

use App\Repositories\UserRepositoryInterface;
use App\Http\Requests\RequestUser;
use Illuminate\Support\Facades\Session;

class UserService
{
    private $repoUser;

    public function __construct(
        UserRepositoryInterface $repoUser,
    )
    {
        $this->repoUser = $repoUser;
    }

    public function create()
    {
        return view('user.create');
    }

    public function view($id)
    {
        $user = $this->repoUser->get($id);
        $modelo = $user;

        return compact('modelo', 'user');
    }

    public function edit($id)
    {
        $user = $this->repoUser->get($id);
        $modelo = $user;

        return compact('modelo', 'user');
    }

    // Função auxiliar para o cadastro de usuário
    public function createUser(RequestUser $request)
    {
        $user = $this->repoUser->store([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'data_nascimento' => $request->data_nascimento,
            'cpf' => $request->cpf,
            'cep' => $request->cep,
            'endereco' => $request->endereco,
            'estado' => $request->estado,
            'cidade' => $request->cidade,
            'bairro' => $request->bairro,
            'numero' => $request->numero,
            'complemento' => $request->complemento,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return $user;
    }

    // Cadastrar novo usuário
    public function store(RequestUser $request)
    {
        try {
            
            $user = $this->createUser($request);

            Session::flash('message_sucesso', 'Usuário criado.');
            return redirect()->route('user.users');

        } catch (\Exception $errors) {
            Session::flash('message', 'Não foi possível cadastrar usuário, tente novamente.');
            return back()->withInput();
        }
    }

    // Atualizar dados do usuário
    public function update(RequestUser $request, $id)
    {
        try {
            $user = $this->repoUser->update([
                'nome' => $request->nome,
                'telefone' => $request->telefone,
                'data_nascimento' => $request->data_nascimento,
                'cpf' => $request->cpf,
                'cep' => $request->cep,
                'endereco' => $request->endereco,
                'estado' => $request->estado,
                'cidade' => $request->cidade,
                'bairro' => $request->bairro,
                'numero' => $request->numero,
                'complemento' => $request->complemento,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ], $id);

            return redirect()->route('user.users');

        } catch (\Exception) {
            Session::flash('message', 'Não foi possível editar o usuário, tente novamente.');
            return back()->withInput();
        }
    }
    public function delete($id)
    {
        $this->repoUser->destroy($id);
        return redirect()->route('user.users');
    }

}
