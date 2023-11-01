@extends('layouts.app')
@section('htmlheader_title', 'Login')

@section('content')
    <div class="bg-image"
        style="background-image: url('https://static.vecteezy.com/system/resources/previews/006/327/095/non_2x/dark-blue-gradient-colors-abstract-blurred-background-for-landing-page-free-vector.jpg');
            height: 528px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3" style="padding-top: 5%">
                    <div class="card my-3">
                        <form class="card-body cardbody-color p-3">
                            <div class="text-center">
                                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                                    class="img-fluid profile-image-pic img-thumbnail rounded-circle my-2" width="80px"
                                    alt="profile">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email ou nome de usuário</label>
                                <input type="text" class="form-control form-control-sm" id="email">
                            </div>

                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" class="form-control form-control-sm" id="senha">
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary px-4 mb-3 w-100">
                                    <strong>Login</strong>
                                </button>
                            </div>

                            <div id="cadastro" class="form-text text-center text-dark">
                                Ainda não é cadastrado?
                                <a href="{{ url('/register') }}" class="font-weight-bold">
                                    Clique aqui.
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
