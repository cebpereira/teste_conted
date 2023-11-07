@extends('layouts.app')

@section('htmlheader_title', 'Usuários')

@section('content')
<div class="bg-image">
    <div class="container py-2 h-100 main-content">
        <div class="row justify-content-center align-items-center" style="padding-top: 3%">
            <div class="col-lg-5" >
                <div class="card shadow-sm card-registration">
                    <div class="card-body p-3 p-md-4">
                        
                        <div class="p-3 text-center">
                            <h3>Bem vindo, Usuário</h3>
                        </div>

                        <div class="p-3 text-center text-white">
                            <p>
                                <a href="{{ url('/user/create') }}" class="btn btn-primary rounded-pill w-50">adicionar usuário <span class="fas fa-users"></span></a>
                            </p>
                        </div>

                        <div class="p-3 text-center text-white">
                            <p>
                                <a href="{{ url('/user/users') }}" class="btn btn-primary rounded-pill w-50">gerenciar usuários <span class="fas fa-users"></span></a>
                            </p>
                        </div>

                        <div class="p-3 text-white text-center">
                            <p>
                                <a href="{{ url('/logout') }}" class="btn btn-primary rounded-pill w-50">logout <span class="fas fa-sign-out-alt"></span></a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
