@extends('layouts.app')

@section('htmlheader_title', 'Usuários')

@section('content')
    <div class="bg-image"
        style="background-image: url('https://static.vecteezy.com/system/resources/previews/006/327/095/non_2x/dark-blue-gradient-colors-abstract-blurred-background-for-landing-page-free-vector.jpg');">

        <div class="container py-5 main-content">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-lg-12 col-xl-12">
                    <div class="card shadow-2-strong card-registration">

                        <div class="card">
                            <div class="card-header">
                                <div class="float-right">
                                    <a class="btn btn-block btn-outline-dark-primary"><i class="fa fa-plus"></i> Adicionar
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
@endsection
