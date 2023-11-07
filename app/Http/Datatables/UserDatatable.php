<?php

namespace App\Http\Datatables;

use App\Helpers\Button;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepositoryInterface;
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
            href: "/user/$user->id/view",
            class: "btn btn-primary",
            id: $user->id,
            title: 'Visualizar Usuário',
            icon: 'eye',
            name: ''
        );

        $editar = Button::DataTableButton(
            href: "/user/$user->id/edit",
            class: "btn btn-secondary",
            id: $user->id,
            title: 'Editar Usuário',
            icon: 'user-edit',
            name: ''
        );

        $excluir = Button::DataTableButton(
            href: "/user/$user->id/delete",
            class: "btn btn-danger",
            id: $user->id,
            title: 'Excluir Usuário',
            icon: 'trash',
            name: ''
        );

        return compact(
            'visualizar',
            'editar',
            'excluir',
        );
    }

    public function showUsers()
    {
        $users = $this->repoUser->getList(
            columns: ['id', 'nome', 'cpf', 'telefone', 'email', 'created_at']
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
