<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Services\UsuarioService;
use UsuarioRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class InscricaoController extends Controller
{
    private $repoUsuario;

    public function __construct(
        UsuarioRepositoryInterface $repoUsuario,
    ) {
        $this->repoUsuario = $repoUsuario;
    }


    // Tela de usuários
    public function index()
    {
        return view('Usuario.index');
    }

    // Tela de criação de usuário pela conta de administrador
    public function viewCriarUsuario()
    {
        $data = $this->usuarioService->create();

        return view('Usuario.create', $data);
    }

    // Tela de editar usuário pela conta de administrador
    public function viewEditarUsuario()
    {
        $data = $this->userService->edit($id);

        return view('Usuario.edit_usuario', $data);
    }

    // Método para cadastrar usuario pela conta de administrador
    public function store(RequestUser $request)
    {
        return $this->userService->store($request);
    }

    // Método para atualizar os dados do usuário pela conta de administrador
    public function update(RequestUser $request)
    {
        return $this->userService->update($request);
    }

    public function delete($id)
    {
        return $this->userService->destroy($id);
    }

}
