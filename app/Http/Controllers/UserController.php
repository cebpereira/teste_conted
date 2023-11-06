<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    private $userService, $repoUser;

    public function __construct(
        UserService $userService,
        UserRepositoryInterface $repoUser

    ) {
        $this->userService = $userService;
        $this->repoUser = $repoUser;
    }

    // Tela de usuários
    public function index()
    {
        return view('user.index');
    }

    // Tela de criar usuário
    public function viewCreateUser()
    {
        return view('user.create');
    }

    // Tela de editar usuário
    public function viewEditUser($id)
    {
        $data = $this->userService->edit($id);
        return view('user.edit', $data);
    }

    // Tela de visualizar usuário
    public function viewUser($id)
    {
        $data = $this->userService->view($id);
        return view('user.view', $data);
    }

    public function viewShowUsers()
    {
        return view('user.users');
    }

    // Método para cadastrar usuário
    public function store(RequestUser $request)
    {
        return $this->userService->store($request);
    }

    // Método para atualizar os dados do usuário
    public function update(RequestUser $request, $id)
    {
        return $this->userService->update($request, $id);
    }

    public function delete($id)
    {
        return $this->userService->delete($id);
    }
}
