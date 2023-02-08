@extends('layouts.main')
@section('content')

    <style>
        svg {
            height: 60px;
            animation: go-back 1s infinite alternate;
        }

        @keyframes go-back {
            0% {
                transform: translateY(50px);
            }
            100% {
                transform: translateY(0);
            }
        }

    </style>

    <body style="background-color: #ebebeb; font-family: 'Quicksand', sans-serif">
    <div class="principal-home">
        <img class="img-principal" src="{!! asset('img/designer.jpg')!!}">
        <p style="font-size: 20px; font-weight: 100;letter-spacing: 10px">NOME SOBRENOME</p>
    </div>

    <section style="background-color: white">
        <div class="retangulo-home">
            <div class="section-um-home">
                <div class="col-md-4">
                    <img class="img-um-home" src="{!! asset('img/6445434.jpg')!!}">
                </div>
                <div class="col-md-4">
                    <img class="img-dois-home" src="{!! asset('img/foto.jpg')!!}">
                </div>
            </div>
        </div>
    </section>
    <hr>

    <section class="container" style="font-family: 'Quicksand', sans-serif">
        <div class="row" style="margin-top: 70px;">
            <div class="contruindo-digital">
                <div class="col-md-5">
                    <p class="p-um">
                        cons<br>
                        truindo<br>o
                        <strong style="font-weight: 700">digital</strong></p>
                </div>
                <div class="col-md-5">
                    <p>Artigo evidente chegou expressar os homens<br>mais altos do menino.Senhora sensata, sou<br>inteiramente
                        assim.
                        Quick pode manor esperanças<br>de dinheiro inteligente vale a pena também.<br>Conforto produzir
                        marido
                        menino que
                        ela tinha ouvido.<br>A lei dos outros foi aprovada, mas deseja.<br>Você dia muito menos até a
                        querida
                        leitura.<br>
                        Considerado uso despachado melancolia simpatizar<br>discrição conduzida.</p>
                    <button class="btn-consulte">Consulte mais informações</button>
                </div>
            </div>

            <hr class="linha-dois">
            <p style="font-size: 40px; text-align: center; font-weight: 100">Eu projeto experiências<br>inspiradas
                em
                pessoas que criam<br>mudanças positivas na vida de<br>outras pessoas.</p>
            <p style="text-align: center;font-weight: bold;font-size: 30px; margin-top: 20px">
                VER PORTFÓLIO</p>
            <x-heroicon-o-arrow-down/>
        </div>
    </section>
    <section style="margin-top: 50px; display: flex; background: black">
        <div style="width: 100%;">
            <a href="/portfolio" class="img-home"><img src="{!! asset('img/1.jpg')!!}" alt="Avatar" class="image"></a>
            <a href="/portfolio" class="img-home"><img src="{!! asset('img/2.png')!!}" alt="Avatar" class="image"></a>
            <a href="/portfolio" class="img-home"><img src="{!! asset('img/3.png')!!}" alt="Avatar" class="image"></a>
        </div>
        <div style="width: 100%;">
            <a href="/portfolio" class="img-home"><img src="{!! asset('img/4.png')!!}" alt="Avatar" class="image"></a>
            <a href="/portfolio" class="img-home"><img src="{!! asset('img/5.png')!!}" alt="Avatar" class="image"></a>
            <a href="/portfolio" class="img-home"><img src="{!! asset('img/6.png')!!}" alt="Avatar" class="image"></a>
        </div>
        <div style="width: 100%;">
            <a href="/portfolio" class="img-home"><img src="{!! asset('img/7.png')!!}" alt="Avatar" class="image"></a>
            <a href="/portfolio" class="img-home"><img src="{!! asset('img/8.png')!!}" alt="Avatar" class="image"></a>
            <a href="/portfolio" class="img-home"><img src="{!! asset('img/9.png')!!}" alt="Avatar" class="image"></a>
        </div>
    </section>

    <section class="bg-redes" style="background-image: url('{{ asset('/img/montanha.png')}}');">
        <div style="padding: 50px 0;">
            <p style="font-size: 25px;">Me siga nas redes sociais</p>
        </div>
        <div class="redes-sociais">
            <a href=""><img src="{!! asset('/img/instagram.png')!!}" class="icons-redes"></a>
            <a href=""><img src="{!! asset('/img/linkedin.png')!!}" class="icons-redes"></a>
            <a href=""><img src="{!! asset('/img/whatsapp.png')!!}" class="icons-redes"></a>
            <a href=""><img src="{!! asset('/img/behance.png')!!}" class="icons-redes"></a>
        </div>
    </section>
    </body>

@endsection


