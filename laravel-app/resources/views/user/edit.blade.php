@extends('layouts.app')

@section('htmlheader_title', 'Perfil')

@section('content')
    <div class="bg-image"
        style="background-image: url('https://static.vecteezy.com/system/resources/previews/006/327/095/non_2x/dark-blue-gradient-colors-abstract-blurred-background-for-landing-page-free-vector.jpg');">

        <div class="container py-5 main-content">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-lg-12 col-xl-12">
                    <div class="card shadow-2-strong card-registration">
                        <div class="card-body p-4 p-md-5">
                            <h2 class="mb-4 pb-2 pb-md-0 mb-md-5">Perfil - Usuário</h2>
                            <hr>

                            <form>
                                <h4><strong>Dados Pessoais</strong></h4>
                                <div class="form-group">
                                    <label for="nome">Nome Completo</label>
                                    <input type="text" id="nome" class="form-control" />
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6 mb-4">
                                        <label for="telefone">Telefone</label>
                                        <input type="text" id="telefone" class="form-control"
                                            placeholder="(XX) XXXXX-XXXX" />
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label for="data_nascimento">Data de Nascimento</label>
                                        <input type="date" class="form-control" id="data_nascimento" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="cpf">CPF</label>
                                    <input type="text" class="form-control" id="cpf"
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

                                    <div class="col-md-9 mb-4">
                                        <label for="endereco">Endereco</label>
                                        <input type="text" id="endereco" class="form-control" />
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-8 mb-4 pb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="cidade">Cidade</label>
                                            <input type="text" id="cidade" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4 pb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="estado">Estado</label>
                                            <input type="text" id="estado" class="form-control"
                                                placeholder="Ex: BA" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-8 mb-4 pb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="bairro">Bairro</label>
                                            <input type="text" id="bairro" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4 pb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="numero">Número</label>
                                            <input type="text" id="numero" class="form-control" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 mb-4 pb-2">
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
                                    <div class="col-md-12 mb-4 pb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="email" id="email" class="form-control" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6 mb-4">
                                        <label for="senha">Senha</label>
                                        <input type="password" id="senha" class="form-control" />
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label for="confirma_senha">Confirmar Senha</label>
                                        <input type="password" id="confirma_senha" class="form-control" />
                                    </div>
                                </div>

                                <div>
                                    <a href="{{ url()->previous() }}" class="btn btn-secondary float-left"><i
                                            class="fas fa-arrow-left"></i>&nbsp&nbspVoltar</a>
                                </div>
                                <button type="submit" form="usuarioEdit" class="btn btn-primary ml-2">
                                    <i class='fas fa-check'></i>&nbsp&nbspSalvar</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
