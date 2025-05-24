<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $title }}</title>
    {{-- chamando minhas fontes --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Poppins:wght@400;500&display=swap"
        rel="stylesheet">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md bg-primary navbar-dark">
            <div class="container-fluid px-lg-4">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <h1 class="m-0"><img class="d-block navbar-logo img-fluid"
                            src="{{ asset('assets/navbar/logo.png') }}" alt="Logo do restaurante Mr.Burger"></h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cardapio') }}">CARDÁPIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">OFERTAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CUPONS</a>
                        </li>
                        {{-- se não tiver logado, não aparece --}}
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="#">CARRINHO</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer class="p-3 p-lg-5 bg-dark">
        <div class="d-flex flex-column flex-lg-row justify-content-lg-between gap-3 ">

            <div id="info-rodape">
                <p class="text-white">INFORMAÇÕES</p>
                <ul class="list-unstyled d-flex flex-column gap-2">
                    <li><a href="#" class="text-decoration-none text-white">Sobre nós</a></li>
                    <li><a href="#" class="text-decoration-none text-white">Contato</a></li>
                    <li><a href="#" class="text-decoration-none text-white">Descontos</a></li>
                    <li><a href="#" class="text-decoration-none text-white">Política e privacidade</a></li>
                </ul>
            </div>

            <div id="info-rodape">
                <p class="text-white">INFORMAÇÕES</p>
                <ul class="list-unstyled d-flex flex-column gap-2">
                    <li><a href="#" class="text-decoration-none text-white">Sobre nós</a></li>
                    <li><a href="#" class="text-decoration-none text-white">Contato</a></li>
                    <li><a href="#" class="text-decoration-none text-white">Descontos</a></li>
                    <li><a href="#" class="text-decoration-none text-white">Política e privacidade</a></li>
                </ul>
            </div>

            <div id="info-rodape">
                <p class="text-white">LINKS ÚTEIS</p>
                <ul class="list-unstyled d-flex flex-column gap-2">
                    <li><a href="{{ route('home') }}" class="text-decoration-none text-white">Home</a></li>
                    <li><a href="{{ route('cardapio') }}" class="text-decoration-none text-white">Menu</a></li>
                    <li><a href="#" class="text-decoration-none text-white">Cupons</a></li>
                    <li><a href="#" class="text-decoration-none text-white">Área do usuário</a></li>
                </ul>
            </div>

            <div id="info-rodape">
                <p class="text-white">BAIXE NOSSO APP</p>
                <ul class="list-unstyled d-flex flex-column gap-2">
                    <li><a href="#" class="text-decoration-none text-white">Explore nosso cardápio completo onde
                            estiver.
                        </a></li>

                    <li><a href="#" class="text-decoration-none text-white">Receba promoções exclusivas
                            diretamente no seu celular.</a></li>

                    <li id="icones-dowload" class="d-flex gap-2">
                        <img src="{{ asset('assets/home/rodape/Portuguese-Brazil-bagde-google-play.svg') }}">
                        <img src="{{ asset('assets/home/rodape/dowload_app-store.svg') }}">
                    </li>

                </ul>
            </div>
        </div>
    </footer>
</body>

</html>
