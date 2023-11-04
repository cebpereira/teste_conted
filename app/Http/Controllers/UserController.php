<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class InscricaoController extends Controller
{
    private $repoUser;

    public function __construct(
        UserRepositoryInterface $repoUser,
    ) {
        $this->repoUser = $repoUser;
    }

    // Tela de usuários
    public function viewListUsers()
    {
        return view('user.list_users');
    }

    // Método para criar um usuário
    public function store(RequestUser $request)
    {
        try {
            $this->repoUser->store($request);
            Session::flash('message_sucesso', 'Usuário criado com sucesso.');
            return redirect()->route('home');
        } catch (\Exception) {
            Session::flash('message', 'Não foi possível cadastrar usuário, tente novamente.');
            return back()->withInput();
        }
    }

    // Método para cancelar um usuário
    public function delete($id)
    {
        try {
            $this->repoUser->destroy($id);
            Session::flash('message', 'Usuário excluído com sucesso.');
        } catch (\Exception $errors) {
            Session::flash('message', 'Não foi possível excluir o usuário, tente novamente.');
            return back()->withInput();
        }
    }

    // Método para atualizar um usuário
    public function update(Request $request, $id)
    {
        try {
            $data = $this->repoUser->update($request, $id);
            Session::flash('message', $data['message']);
            return redirect()->route('user.profile');
        } catch (\Exception) {
            Session::flash('message', 'Não foi possível atualizar o usuário, tente novamente.');
            return back()->withInput();
        }
    }
}
