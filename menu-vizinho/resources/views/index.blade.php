<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Mr.Burger - Sua Lanchonete Local</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    {{-- chamando meu outro arquivo de scss, ele vai ter as principais configs de "css na mão" --}}
    @vite('resources/scss/main.scss')
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
                            <a class="nav-link active" aria-current="page" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CARDÁPIO</a>
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
</body>
<button class="btn btn-primary">Primário</button>
<button class="btn btn-secondary">Secundário</button>
<h1 class="text-dark">Título Escuro</h1>
<p class="text-light">Descrição Clara</p>


</html>
