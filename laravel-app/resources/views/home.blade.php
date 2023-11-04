@extends('layouts.app')

@section('content')
    <div class="bg-image">
        <div class="container py-2 h-100 main-content">
            <div class="py-5">
                <div class="p-2 text-white text-center">
                    <h1>SEJA BEM VINDO</h1>
                </div>

                <div class="text-center text-white">
                    <p>PREENCHA O FORMULÁRIO</p>
                    <p>DE CADASTRO CLICANDO NO</p>
                    <p>BOTÃO ABAIXO</p>
                </div>

                <div class="p-2 text-white text-center">
                    <p>
                        <a href="{{ url('/register') }}" class="btn btn-primary rounded-pill">cadastre-se</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
