<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $title }}</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md bg-primary navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
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
                        <li class="nav-item">
                            <a class="nav-link" href="#">CARRINHO</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer class="p-3 d-flex flex-column gap-3 bg-dark">
        <div id="info-rodape">
            <h5 class="text-white">INFORMAÇÕES</h5>
            <ul class="list-unstyled d-flex flex-column gap-2">
                <li><a href="#" class="text-decoration-none text-white">Sobre nós</a></li>
                <li><a href="#" class="text-decoration-none text-white">Contato</a></li>
                <li><a href="#" class="text-decoration-none text-white">Descontos</a></li>
                <li><a href="#" class="text-decoration-none text-white">Política e privacidade</a></li>
            </ul>
        </div>

        <div id="info-rodape">
            <h5 class="text-white">LINKS ÚTEIS</h5>
            <ul class="list-unstyled d-flex flex-column gap-2">
                <li><a href="#" class="text-decoration-none text-white">Home</a></li>
                <li><a href="#" class="text-decoration-none text-white">Menu</a></li>
                <li><a href="#" class="text-decoration-none text-white">Cupons</a></li>
                <li><a href="#" class="text-decoration-none text-white">Área do usuário</a></li>
            </ul>
        </div>

        <div id="info-rodape">
            <h5 class="text-white">BAIXE NOSSO APP</h5>
            <ul class="list-unstyled d-flex flex-column gap-2">
                <li><a href="#" class="text-decoration-none text-white">Lorem ipsum dolor amet uljulu
                        usulmanuaunuro aoruaru aouraruoaur.</a></li>

                <li><a href="#" class="text-decoration-none text-white">Lorem ipsum dolor amet uljulu
                        usulmanuaunuro aoruaru aouraruoaur.</a></li>

                <li id="icones-dowload" class="d-flex gap-2">
                    <img src="{{ asset('assets/home/rodape/Portuguese-Brazil-bagde-google-play.svg') }}">
                    <img src="{{ asset('assets/home/rodape/dowload_app-store.svg') }}">
                </li>

            </ul>
        </div>
    </footer>
</body>

</html>
