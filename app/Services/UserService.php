<?php

namespace App\Services;

use App\Repositories\UserRepositoryInterface;

class UserService
{
    private $repoUser;

    public function __construct(
        UserRepositoryInterface $repoUser,
    )
    {
        $this->repoUser = $repoUser;
    }

    public function edit(User $slug)
    {
        $modelo = $this->repoUser->get($id);
        $user = $modelo->user;

        return compact('user');
    }

    // Função auxiliar para o cadastro de usuário (criar usuario)
    public function store(RequestUser $request)
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
            'senha' => bcrypt($request->senha),
        ]);

        return $user;
    }

    // Atualiza os dados de um usuário
    public function update(RequestUser $request)
    {
        try {
            $usuario = $this->repoUser->update([
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
                'senha' => bcrypt($request->senha),
            ], $id);

           return redirect()->route('usuario');

        } catch (\Exception) {
            Session::flash('message', 'Não foi possível editar o usuário, tente novamente.');

            return back()->withInput();
        }
    }

}
