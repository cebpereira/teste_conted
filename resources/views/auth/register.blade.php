@extends('layouts.app')
@section('htmlheader_title', 'Cadastro')

@section('content')
    <div class="bg-image">
        <div class="container py-3 main-content">
            <div class="justify-content-center align-items-center" style="padding-bottom: 5%">
                <div class="col-12" >
                    <div class="card shadow-2-strong card-registration">
                        <div class="card-body p-4 p-md-5">

                        <div class="card-body p-4 p-md-5">
                            <h2 class="mb-4  pb-md-0 mb-md-5">Formulário de Cadastro</h2>
                            <hr>

                            <form action="{{ url('/register') }}" method="post" enctype="multipart/form-data" id="form"> 
                                @csrf

                                <h4><strong>Dados Pessoais</strong></h4>
                                <div class="form-group">
                                    <label for="nome">Nome Completo</label>
                                    <input type="text" id="nome" class="form-control col-md-8" />
                                </div>

                                <div class="form-row">
                                    <div class="col-md-4 mb-4">
                                        <label for="telefone">Telefone</label>
                                        <input type="text" id="telefone" class="form-control"
                                            placeholder="(XX) XXXXX-XXXX" />
                                    </div>

                                    <div class="col-md-4 offset-md-1 mb-4">
                                        <label for="data_nascimento">Data de Nascimento</label>
                                        <input type="date" class="form-control" id="data_nascimento" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="cpf">CPF</label>
                                    <input type="text" class="form-control col-md-4" id="cpf"
                                        placeholder="XXX.XXX.XXX-XX" />
                                </div>
                                <hr>

                                <h4><strong>Endereço</strong></h4>
                                <div class="form-row">
                                    <div class="col-md-3 mb-4">
                                        <label for="cep">CEP</label>
                                        <input type="text" id="cep" class="form-control"
                                            placeholder="XX.XXX-XXX" />
                                    </div>

                                    <div class="col-md-8 offset-md-1 mb-4">
                                        <label for="endereco">Endereço</label>
                                        <input type="text" id="endereco" class="form-control" />
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-4 mb-4 ">
                                        <div class="form-outline">
                                            <label class="form-label" for="cidade">Cidade</label>
                                            <input type="text" id="cidade" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-md-3 offset-md-1 mb-4 ">
                                        <div class="form-outline">
                                            <label class="form-label" for="estado">Estado</label>
                                            <input type="text" id="estado" class="form-control"
                                                placeholder="Ex: BA" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-4 mb-4 ">
                                        <div class="form-outline">
                                            <label class="form-label" for="bairro">Bairro</label>
                                            <input type="text" id="bairro" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-md-2 offset-md-1 mb-4 ">
                                        <div class="form-outline">
                                            <label class="form-label" for="numero">Número</label>
                                            <input type="text" id="numero" class="form-control" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6 mb-4 ">
                                        <div class="form-outline">
                                            <label class="form-label" for="complemento">Complemento</label>
                                            <input type="text" id="complemento" class="form-control"
                                                placeholder="Ex: Casa, Apartamento, bloco" />
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <!-- Dados de Acesso -->
                                <h4><strong>Dados de Acesso</strong></h4>
                                <div class="form-row">
                                    <div class="col-md-4 mb-4 ">
                                        <div class="form-outline">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="email" id="email" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
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

                                    <div class="col-md-4 mb-4">
                                        <label for="confirmar_senha">Confirmar Senha</label>
                                        <div class="input-group">
                                            <input type="password" autocomplete="off" name="confirmar_senha" id="confirmar_senha"
                                                class="form-control">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span id='exibir-confirmar-senha' class="fa fa-eye-slash"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col mt-4 pt-2">
                                        <button type="submit" id="salvarCadastro" form="form" class="btn btn-primary text-white w-25">
                                            <strong>Enviar</strong>
                                        </button>
                                    </div>
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
  <script src="{{ asset('plugins/maskedinput/jquery.maskedinput.js') }}"></script>
  <script src="{{ asset('js/mostrarSenha.js') }}"></script>
@endsection