@extends('layouts.app')
@section('htmlheader_title', 'Login')

@section('content')
    <div class="bg-image">
        <div class="container py-2 h-100 main-content"> <!-- Aumentei o padding vertical -->
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card shadow-sm card-registration" style="border-radius: 15px; margin-top: 20px;">
                        <!-- Adicionei margem superior -->
                        <div class="card-body p-3 p-md-4">

                            <form class="card-body cardbody-color p-2">
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
                                    <label for="senha" class="form-label">Senha</label>
                                    <input type="password" class="form-control form-control-sm" id="senha">
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
