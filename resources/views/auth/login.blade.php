@extends('layouts.app')
@section('htmlheader_title', 'Login')

@section('content')
    <div class="bg-image">
        <div class="container py-2 h-100 main-content">
            <div class="row justify-content-center align-items-center" style="padding-top: 2%">
                <div class="col-md-8 col-lg-6" >
                    <div class="card shadow-sm card-registration">
                        <div class="card-body p-3 p-md-4">

                            <form class="card-body cardbody-color p-2" method="post" action="{{ url('/login') }}">
                            @csrf
                            
                                <div class="text-center">
                                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                                        class="img-fluid profile-image-pic img-thumbnail rounded-circle my-2" width="89px"
                                        alt="profile">
                                </div>
                                <hr>

                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control form-control-sm" id="email">
                                </div>

                                <div class="form-group">
                                    <label for="senha">Senha</label>
                                    <div class="input-group">
                                        <input type="password" autocomplete="off" name="senha" id="senha"
                                            class="form-control">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span id='exibir-senha' class="fa fa-eye-slash"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col mt-4 pt-2">
                                        <button type="submit" class="btn btn-primary px-4 mb-3 w-100">
                                            <strong>Login</strong>
                                        </button>
                                    </div>
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
    </div>
@endsection

@section('scripts_adicionais')
  <script src="{{ asset('js/mostrar_senha.js') }}"></script>
@endsection
