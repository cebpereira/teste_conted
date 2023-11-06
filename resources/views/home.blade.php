@extends('layouts.app')

@section('htmlheader_title', 'Home')

@section('content')
<div class="bg-image">
    <div class="container py-2 h-100 main-content">
        <div class="row justify-content-center align-items-center" style="padding-top: 3%">
            <div class="col-lg-5" >
                <div class="card shadow-sm card-registration">
                    <div class="card-body p-3 p-md-4">

                        @guest
                        <div class="text-center">
                            <h1>SEJA BEM VINDO</h1>
                        </div>

                        <div class="p-3 text-center">
                            Preencha o formulário<br>
                            de cadastro clicando no<br>
                            botão abaixo</p>
                        </div>

                        <div class="p-2 text-center">
                            <p>
                                <a href="{{ url('/register') }}" class="btn btn-primary rounded-pill">cadastre-se</a>
                            </p>
                        </div>

                        <div style="text-align: center;">
                            <hr style="width: 40%; float: left; margin-top: 0.8em;">
                            <span style="display: inline-block; padding: 0 10px;">ou</span>
                            <hr style="width: 40%; float: right; margin-top: 0.8em;">
                        </div>

                        <div class="p-4 text-center">
                            Vá para a página de login
                        </div>

                        <div class="text-white text-center">
                            <p>
                                <a href="{{ url('/login') }}" class="btn btn-primary rounded-pill">login</a>
                            </p>
                        </div>
                        @endguest

                        @auth
                        <div class="text-center">
                            <h3>SEJA BEM VINDO </h3>
                        </div>

                        <div class="p-2 text-center text-white">
                            <p>
                                <a href="{{ url('/user/{$modelo->id}/edit') }}" class="btn btn-primary rounded-pill w-50">editar Perfil <span class="fas fa-user-edit"></span></a>
                            </p>
                        </div>

                        <div class="p-2 text-center text-white">
                            <p>
                                <a href="{{ url('/user/users') }}" class="btn btn-primary rounded-pill w-50">gerenciar Usuários <span class="fas fa-users"></span></a>
                            </p>
                        </div>

                        <div class="text-white text-center">
                            <p>
                                <a href="{{ url('/logout') }}" class="btn btn-primary rounded-pill w-50">logout <span class="fas fa-sign-out-alt"></span></a>
                            </p>
                        </div>
                        @endauth

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
