@extends('layouts.app')
@section('htmlheader_title', 'Cadastro')

@section('content')
<div class="bg-image"
        style="background-image: url('https://static.vecteezy.com/system/resources/previews/006/327/095/non_2x/dark-blue-gradient-colors-abstract-blurred-background-for-landing-page-free-vector.jpg');">

            <div class="container py-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                            <div class="card-body p-4 p-md-5">
                                <h2 class="mb-4 pb-2 pb-md-0 mb-md-5">Formulário de Cadastro</h2>
                                <hr>

                                <!-- Dados Pessoais -->
                                <form>
                                    <h4><strong>Dados Pessoais</strong></h4>
                                    <div class="row">
                                        <div class="col-md-12 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="nome">Nome Completo</label>
                                                <input type="text" id="nome" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="telefone">Telefone</label>
                                                <input type="text" id="telefone" class="form-control" placeholder="(XX) XXXXX-XXXX" />
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-4 d-flex align-items-center">
                                            <div class="form-outline datepicker w-100">
                                                <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                                                <input type="date" class="form-control" id="data_nascimento" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4 d-flex align-items-center">
                                            <div class="form-outline datepicker w-100">
                                                <label for="cpf" class="form-label">CPF</label>
                                                <input type="text" class="form-control" id="cpf" placeholder="XXX.XXX.XXX-XX"/>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <!-- Dados Endereço -->
                                    <h4><strong>Endereço</strong></h4>
                                    <div class="row">
                                        <div class="col-md-3 mb-4 pb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="cep">CEP</label>
                                                <input type="text" id="cep" class="form-control" placeholder="XX.XXX-XXX"/>
                                            </div>
                                        </div>

                                        <div class="col-md-9 mb-4 pb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="endereco">Endereco</label>
                                                <input type="text" id="endereco" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8 mb-4 pb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="cidade">Cidade</label>
                                                <input type="text" id="cidade" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-md-3 mb-4 pb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="estado">Estado</label>
                                                <input type="text" id="estado" class="form-control" placeholder="Ex: BA"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8 mb-4 pb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="bairro">Bairro</label>
                                                <input type="text" id="bairro" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-md-3 mb-4 pb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="numero">Número</label>
                                                <input type="text" id="numero" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8 mb-4 pb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="complemento">Complemento</label>
                                                <input type="text" id="complemento" class="form-control" placeholder="Ex: Casa, Apartamento, bloco"/>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <!-- Dados de Acesso -->
                                    <h4><strong>Dados de Acesso</strong></h4>
                                    <div class="row">
                                        <div class="col-md-8 mb-4 pb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="email">Email</label>
                                                <input type="email" id="email" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4 pb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="senha">Senha</label>
                                                <input type="password" id="senha" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-4 pb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="confirma_senha">Confirmar Senha</label>
                                                <input type="password" id="confirma_senha" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 pt-2">
                                        <input class="btn btn-primary btn-lg" type="submit" value="Enviar" />
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection
