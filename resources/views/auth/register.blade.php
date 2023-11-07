@extends('layouts.app')

@section('htmlheader_title', 'Cadastro de Usuário')

@section('content')
<div class="bg-image">
    <div class="container py-3 main-content">
        <div class="justify-content-center align-items-center" style="padding-bottom: 3%">
            <div class="col-12" >
                <div class="card shadow-2-strong card-registration">
                     <div class="card-body p-4 p-md-5">
                        <div class="col-sm-6">
                            <h2>Formulário de Cadastro</h2><br>
                        </div>

                        <div class="col-sm-6">
                            (<span style="color: red;">*</span>) Campos Obrigatórios<br>
                        </div><br>

                        <form action="{{ url('/register') }}" method="post" enctype="multipart/form-data" id="form">
                            @csrf
                            <hr>
                            <h4 class="text-center"><strong>Dados Pessoais</strong></h4>
                            <hr>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nome Completo<span style="color: red;">*</span></label>
                                    <input type="text" autocomplete="off" id="nome" name="nome"
                                        class="form-control @error('nome') is-invalid @enderror" value="{{ old('nome') }}" required>
                                    @error('nome')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-3 offset-md-1">
                                    <label>Telefone</label>
                                    <input type="text" autocomplete="off" name="telefone" id="telefone"
                                        class="form-control @error('telefone') is-invalid @enderror" value="{{ old('telefone') }}">
                                    @error('telefone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label>Data de Nascimento<span style="color: red;">*</span></label>
                                        <input type="date" autocomplete="off" name="data_nascimento"
                                            class="form-control @error('data_nascimento') is-invalid @enderror" value="{{ old('data_nascimento') }}"
                                            required>
                                        @error('data_nascimento')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-3 offset-md-1">
                                        <label>CPF<span style="color: red;">*</span></label>
                                        <input type="text" autocomplete="off" name="cpf" id="cpf"
                                            class="form-control @error('cpf') is-invalid @enderror" value="{{ old('cpf') }}">
                                        @error('cpf')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            <hr>

                            <h4 class="text-center"><strong>Endereço</strong></h3>
                            <hr>
                            <div class="form-row">
                                <div class="form-group col-md-2" id="div-cep">
                                    <label>CEP<span style="color: red;">*</span></label>
                                    <input type="text" autocomplete="off" name="cep" id="cep"
                                        class="form-control @error('cep') is-invalid @enderror" value="{{ old('cep') }}" >
                                    <a href="https://buscacepinter.correios.com.br/app/endereco/index.php"
                                        style="text-decoration: underline;color:rgb(0, 0, 255);" target="_blank">Não sei meu
                                        CEP</a>
                                    @error('cep')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-5 offset-md-1">
                                    <label>Endereço<span style="color: red;">*</span></label>
                                    <input type="text" autocomplete="off" name="endereco" id="endereco"
                                        class="form-control @error('endereco') is-invalid @enderror"
                                        value="{{ old('endereco') }}" >
                                    @error('endereco')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-3 offset-md-1">
                                    <label>Estado<span style="color: red;">*</span></label>
                                    <input id="estado" type="estado" class="form-control @error('estado') is-invalid @enderror"
                                        name="estado" value="{{ old('estado') }}" autocomplete="estado">
                                    @error('estado')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-3" id="tamanhoDivCidade">
                                    <label>Cidade<span style="color: red;">*</span></label>
                                    <input id="cidade" type="cidade" class="form-control @error('cidade') is-invalid @enderror"
                                        name="cidade" value="{{ old('cidade') }}" autocomplete="cidade">
                                    @error('cidade')
                                        <span class="invalid-feedback" role="alert" style='display:block'>
                                            <strong> {{ $message }} </strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-2 offset-md-1">
                                    <label>Bairro<span style="color: red;">*</span></label>
                                    <input type="text" autocomplete="off" id="bairro" name="bairro"
                                        class="form-control @error('bairro') is-invalid @enderror" value="{{ old('bairro') }}">
                                    @error('bairro')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-1 offset-md-1">
                                    <label>Nº<span style="color: red;">*</span></label>
                                    <input type="text" autocomplete="off" name="numero" id="numero"
                                        class="form-control @error('numero') is-invalid @enderror" value="{{ old('numero') }}">
                                    @error('numero')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-3 offset-md-1">
                                    <label>Complemento</label>
                                    <input type="text" autocomplete="off" id="complemento" name="complemento"
                                        class="form-control @error('complemento') is-invalid @enderror"
                                        value="{{ old('complemento') }}">
                                    @error('complemento')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <hr>
                            <h4 class="text-center"><strong>Dados de Acesso</strong></h4>
                            <hr>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>E-mail<span style="color: red;">*</span></label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-3 offset-md-1">
                                    <label>Senha<span style="color: red;">*</span></label>
                                    <div class="input-group">
                                        <input type="password" autocomplete="off" name="password" id="password"
                                            class="form-control @error('password') is-invalid @enderror show-password"
                                            value="{{ old('password') }}" required>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span id='show-password' class="fa fa-eye-slash text-secondary"></span>
                                            </div>
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group col-md-3 offset-md-1">
                                    <label>Confirmar Senha<span style="color: red;">*</span></label>
                                    <div class="input-group">
                                        <input type="password" autocomplete="off" name="password-confirm" id="password-confirm"
                                            class="form-control @error('password-confirm') is-invalid @enderror show-password-confirm"
                                            value="{{ old('password-confirm') }}" required>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span id='show-password-confirm' class="fa fa-eye-slash text-secondary"></span>
                                            </div>
                                        </div>
                                        @error('password-confirm')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <a href="{{ url()->previous() }}" class="btn btn-secondary float-left"><i
                                class="fas fa-arrow-left"></i>&nbsp&nbspVoltar</a>

                            <button type="submit" id="salvarCadastro" form="form" class="btn btn-primary ml-2">
                                <i class='fas fa-check'></i>&nbsp&nbspSalvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('js/mascaras.js') }}"></script>
    <script src="{{ asset('js/mostrar_senha.js') }}"></script>
    <script src="{{ asset('js/valida_cpf.js') }}"></script>
@endsection
