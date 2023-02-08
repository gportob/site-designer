@extends('layouts.main')
@section('content')


    <body class="body-contato" style="background-image: url('{{ asset('/img/bg_contato.jpg')}}');">
    <div class="row container contato-geral">
        <div style="text-align:center;" class="col-md-6">
            <div style="margin-bottom: 40px;">
                <h2>Fale conosco</h2>
            </div>
            <div class="redes-socias-contato">
                <p>
                    <x-bi-whatsapp/>
                    <strong>(83) 90000-0000</strong></p>
                <p>
                    <x-bi-behance/>
                    <strong>behance.net/exemplo</strong></p>
                <p><strong class="email">@</strong> <strong>email@email.com</strong></p>
                <p>
                    <x-bi-instagram />
                    <strong>@exemplo</strong></p>
                <p>
                    <x-bi-linkedin/>
                    <strong>linkedin.com/exemplo</strong></p>
            </div>
        </div>

        <form method="POST" action="/contatos" class="col-md-6">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome e Sobrenome">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="nome@exemplo.com">
            </div>
            <div class="mb-3">
                <label for="fone" class="form-label">Whatsapp</label>
                <input type="text" class="form-control" id="fone" name="fone" placeholder="(00)00000-0000">
            </div>
            <div class="mb-3">
                <label for="mensagem" class="form-label">Mensagem</label>
                <textarea class="form-control" id="mensagem" rows="3"
                          placeholder="Escreva aqui uma mensagem" name="mensagem"></textarea>
            </div>
            <div style="text-align: right;margin-bottom: 80px">
                <button type="submit" class="btn btn-enviar">Enviar</button>
            </div>

        </form>
    </div>
    </body>


@endsection
