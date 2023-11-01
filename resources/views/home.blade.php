@extends('layouts.app')

@section('content')
    <div class="bg-image"
        style="background-image: url('https://static.vecteezy.com/system/resources/previews/006/327/095/non_2x/dark-blue-gradient-colors-abstract-blurred-background-for-landing-page-free-vector.jpg');
        height: 528px">

        <div class="d-flex align-items-center flex-column"
            style="height: 538px; padding-top: 10%; background-image: url('public\img\bg.png');">

            <div class="p-2 text-white">
                <h1>SEJA BEM VINDO</h1>
            </div>

            <div class="p-2 text-center text-white">
                <p>PREENCHA O FORMULÁRIO</p>
                <p>DE CADASTRO CLICANDO NO</p>
                <p>BOTÃO ABAIXO</p>
            </div>

            <div class="p-2 text-white">
                <p>
                    <a href="{{ url('/register') }}" class="btn btn-primary rounded-pill">cadastre-se</a>
                </p>
            </div>
        </div>
    </div>
@endsection
