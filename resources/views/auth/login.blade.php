@extends('layouts.app')
@section('htmlheader_title', 'Login')

@section('content')
    <div class="bg-image">
        <div class="container py-2 h-100 main-content">
            <div class="row justify-content-center align-items-center" style="padding-top: 5%">
                <div class="col-lg-5" >
                    <div class="card shadow-sm card-registration">
                        <div class="card-body p-3 p-md-4">

                            <form method="post" action="{{ url('/login') }}">
                            @csrf
                                <div class="text-center">
                                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                                        class="img-fluid profile-image-pic img-thumbnail rounded-circle my-2" width="89px"
                                        alt="profile">
                                </div>
                                <hr>
                                
                                <div class="input-group mb-3">
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"
                                        class="form-control @error('email') is-invalid @enderror">
                                    <div class="input-group-append bg-white">
                                        <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                                    </div>
                                    @error('email')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mb-3">
                                    <input id="password" type="password" name="password" placeholder="Senha"
                                        class="form-control @error('password') is-invalid @enderror show-password">
                                    <div class="input-group-append bg-white">
                                        <div class="input-group-text">
                                            <span id='show-password' class="fa fa-eye-slash text-gray"></span>
                                        </div>
                                    </div>
                                    @error('password')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <button type="submit"
                                    class="btn btn-primary w-100 mb-4 rounded-pill">
                                    <strong>Login</strong>
                                </button>
                            </form>

                            <div id="cadastro" class="form-text text-center text-dark">
                                Ainda não é cadastrado?
                                <a href="{{ url('/register') }}" class="font-weight-bold">
                                Clique aqui.
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
  <script src="{{ asset('js/mostrar_senha.js') }}"></script>
@endsection
