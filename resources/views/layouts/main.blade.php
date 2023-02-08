<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/script.js"></script>
    <title>Visitas</title>

</head>
<body>
<nav class="navbar">
    <div class="container">
        <div>
            <a href="/" class=""><img src="{!! asset('img/foursquare.png')!!}"></a>
        </div>
        <div>
            <a href="/" class=" ">Home</a>
        </div>
        <div>
            <a href="/portfolio" class=" ">Portfólio</a>
        </div>
        <div>
            <a href="/sobre" class=" ">Sobre mim</a>
        </div>
        <div>
            <a href="/contatos/contato" class=" ">Contato</a>
        </div>
    </div>

</nav>

<a href="https://api.whatsapp.com/send?phone=5583993040998&text=Texto%20aqui"
   target="_blank"
   style="position:fixed;bottom:20px;right:30px;">
    <svg style="animation: none;" class="btn-whatsapp" enable-background="new 0 0 512 512" width="50" height="50"
         version="1.1"
         viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path
            d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104  l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z"
            fill="#4CAF50"/>
        <path
            d="m405.02 361.5c-6.176 17.44-30.688 31.904-50.24 36.128-13.376 2.848-30.848 5.12-89.664-19.264-75.232-31.168-123.68-107.62-127.46-112.58-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624 26.176-62.304c6.176-6.304 16.384-9.184 26.176-9.184 3.168 0 6.016 0.16 8.576 0.288 7.52 0.32 11.296 0.768 16.256 12.64 6.176 14.88 21.216 51.616 23.008 55.392 1.824 3.776 3.648 8.896 1.088 13.856-2.4 5.12-4.512 7.392-8.288 11.744s-7.36 7.68-11.136 12.352c-3.456 4.064-7.36 8.416-3.008 15.936 4.352 7.36 19.392 31.904 41.536 51.616 28.576 25.44 51.744 33.568 60.032 37.024 6.176 2.56 13.536 1.952 18.048-2.848 5.728-6.176 12.8-16.416 20-26.496 5.12-7.232 11.584-8.128 18.368-5.568 6.912 2.4 43.488 20.48 51.008 24.224 7.52 3.776 12.48 5.568 14.304 8.736 1.792 3.168 1.792 18.048-4.384 35.52z"
            fill="#FAFAFA"/></svg>
</a>

@yield('content')

<footer>
    <div class="retangulo-footer">
        <div class="container">
            <div class="footer">
                <div class="logo-footer">
                    <a href="/" class=""><img style="width: 80%;" src="{!! asset('img/foursquare2.png')!!}"></a>
                </div>
                <div id="linha-vertical"></div>
                <div class="servico">
                    <p class="titulo-footer">Serviços</p>
                    <p style="font-size: 12px;">Identidade Visual</p>
                    <p style="font-size: 12px;">Fotografia</p>
                    <p style="font-size: 12px;">Social Media</p>
                </div>
                <div id="linha-vertical"></div>
                <div style="text-decoration: none;" class="redes">
                    <p class="titulo-footer">Redes Sociais</p>
                    <a style="text-decoration: none;" href=""><p>Instagram</p></a>
                    <a style="text-decoration: none;" href=""><p>Whatsapp</p></a>
                    <a style="text-decoration: none;" href=""><p>Linkedin</p></a>
                    <a style="text-decoration: none;" href=""><p>Behance</p></a>
                </div>
                <div id="linha-vertical"></div>
                <div class="contato">
                    <p class="titulo-footer">Contato</p>
                    <p style="font-size: 12px;">(00)00000-0000</p>
                    <p style="font-size: 12px;">exemplo@email.com</p>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
