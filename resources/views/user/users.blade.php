@extends('layouts.app')

@section('htmlheader_title', 'Usuários')

@section('content')
<div class="bg-image">
    <div class="container py-3 main-content">
        <div class="justify-content-center align-items-center" style="padding-bottom: 3%">
            <div class="w-100" >
                <div class="card shadow-2-strong">
                     <div class="card-body">

                        <div class="card w-100">
                            <div class="card-header">
                                <div class="float-right">
                                    <a href="{{ route('user.create') }}"class="btn btn-block btn-outline-dark-primary"><i class="fa fa-plus"></i> Adicionar
                                        Usuário</a>
                                </div>
                            </div>

                            <div class="card-body">
                                <table id="table" class="table table-bordered table-hover" width="100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>CPF</th>
                                            <th>Telefone</th>
                                            <th>E-mail</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('js/listar_usuarios.js') }}"></script>
@endsection
