@extends('layouts.main')
@section('content')


    <style>
        .btn-whatsapp {
            display: none;
        }
    </style>

    <section class="port-geral">
        <a href="/portfolios/portfolios-projeto">Adicionar projeto</a>
        <div style="display: flex;">
            @foreach($projetos as $projeto)
            <div>
                <a href="#">
                    <div class="portfolio">
                        <img src="{!! asset('img/1.jpg')!!}" alt="Avatar" class="image">
                        <div class="overlay">
                            <h3 class="titulo">{{ $projeto->nomeProjeto }}</h3>
                            <p class="descricao">{{ $projeto->descricaoProjeto }}</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="portfolio">
                        <img src="{!! asset('img/2.png')!!}" alt="Avatar" class="image">
                        <div class="overlay">
                            <h3 class="titulo">Título do Projeto</h3>
                            <p class="descricao">Pequena descrição</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="portfolio">
                        <img src="{!! asset('img/3.png')!!}" alt="Avatar" class="image">
                        <div class="overlay">
                            <h3 class="titulo">Título do Projeto</h3>
                            <p class="descricao">Pequena descrição</p>
                        </div>
                    </div>
                </a>
            </div>

            <div>
                <a href="#">
                    <div class="portfolio">
                        <img src="{!! asset('img/4.png')!!}" alt="Avatar" class="image">
                        <div class="overlay">
                            <h3 class="titulo">Título do Projeto</h3>
                            <p class="descricao">Pequena descrição</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="portfolio">
                        <img src="{!! asset('img/5.png')!!}" alt="Avatar" class="image">
                        <div class="overlay">
                            <h3 class="titulo">Título do Projeto</h3>
                            <p class="descricao">Pequena descrição</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="portfolio">
                        <img src="{!! asset('img/6.png')!!}" alt="Avatar" class="image">
                        <div class="overlay">
                            <h3 class="titulo">Título do Projeto</h3>
                            <p class="descricao">Pequena descrição</p>
                        </div>
                    </div>
                </a>
            </div>

            <div>
                <a href="#">
                    <div class="portfolio">
                        <img src="{!! asset('img/7.png')!!}" alt="Avatar" class="image">
                        <div class="overlay">
                            <h3 class="titulo">Título do Projeto</h3>
                            <p class="descricao">Pequena descrição</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="portfolio">
                        <img src="{!! asset('img/8.png')!!}" alt="Avatar" class="image">
                        <div class="overlay">
                            <h3 class="titulo">Título do Projeto</h3>
                            <p class="descricao">Pequena descrição</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="portfolio">
                        <img src="{!! asset('img/9.png')!!}" alt="Avatar" class="image">
                        <div class="overlay">
                            <h3 class="titulo">Título do Projeto</h3>
                            <p class="descricao">Pequena descrição</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>

@endsection
