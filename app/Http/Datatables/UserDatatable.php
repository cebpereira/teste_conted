<?php

namespace App\Http\DataTables;

use App\Helpers\Button;
use App\Http\Controllers\Controller;
use App\Repositories\User\Inscrito\UserRepositoryInterface;
use Yajra\DataTables\Facades\DataTables;

class UserDatatable extends Controller
{
    private $repoUser;

    public function __construct(
        UserRepositoryInterface $repoUser,
    ) {
        $this->repoUser = $repoUser;
    }

    public function getButtons($user)
    {
        $visualizar = Button::DataTableButton(
            href: "/user/$user->id/visualizar",
            class: "btn btn-primary",
            id: $user->id,
            title: 'Visualizar Usuário',
            icon: 'eye',
            name: 'Visualizar'
        );

        $editar = Button::DataTableButton(
            href: "/user/$user->id/editar",
            class: "btn btn-secondary",
            id: $user->id,
            title: 'Editar Usuário',
            icon: '',
            name: 'Editar'
        );

        $excluir = Button::DataTableButton(
            href: "/user/$user->id/excluir",
            class: "btn btn-danger",
            id: $user->id,
            title: 'Excluir Usuário',
            icon: '',
            name: 'Excluir'
        );

        return compact(
            'visualizar',
            'editar',
            'excluir',
        );
    }

    // Listar usuários
    public function showUsers()
    {
        $users = $this->repoUser->getList(
            columns: ['id', 'nome', 'cpf', 'telefone', 'email']
        );

        return Datatables::of($users)
            ->editColumn('id', function ($user) {
                return $user->id;
            })
            ->editColumn('nome', function ($user) {
                return $user->nome;
            })
            ->editColumn('cpf', function ($user) {
                return $user->cpf;
            })
            ->editColumn('telefone', function ($user) {
                return $user->telefone;
            })
            ->editColumn('email', function ($user) {
                return $user->email;
            })
            ->editColumn('acao', function ($user) {
                $btn = $this->getButtons($user);
                return $btn['visualizar'] . $btn['editar'] . $btn['excluir'];
            })
            ->escapeColumns([0])
            ->make(true);
    }
}
