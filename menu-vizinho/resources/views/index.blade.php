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

    <main>

        <section id="sec-um" class="bg-primary p-3">

            <div class="apresentacao_restaurante text-secondary mb-3">
                <h5 class="fw-bold mb-3">Nós Convidamos você ao nosso restaurante</h5>
                <p>Na Mr. Burger, a gente acredita que um bom lanche vai além do pão e carne. Usamos ingredientes
                    frescos, receitas especiais e aquele toque artesanal que faz a diferença. Tudo é feito com cuidado e
                    atenção pra que cada mordida seja uma experiência única.
                </p>
                <p>
                    Na Mr. Burger, a gente acredita que um bom lanche vai além do pão e carne tudo é feito com cuidado e
                    atenção pra que cada mordida seja uma experiência única.
                </p>
                <button class="btn btn-secondary text-primary fw-bold">
                    Explorar Mais
                </button>
            </div>

            <div class="img_restaurante">
                <img class="img-fluid rounded-2" src="{{ asset('assets/home/secao_um/img-teste-home.jpg') }}"
                    alt="" srcset="">
            </div>

        </section>

        <section id="sec-dois" class="bg-secondary p-3">
            <div class="texto-sobre-nos-restaurante">
                <div id="titulos" class="text-dark">
                    <p class="fw-bold mb-1">
                        Sobre nós
                    </p>

                    <h5 class="fw-bold mb-3">
                        Hambúrgueres feitos com carinho, servidos com sabor de verdade.
                    </h5>
                </div>

                <div id="paragrafos" class="text-light">
                    <p>
                        Na Mr. Burger, a gente acredita que um bom lanche vai além do pão e carne. Usamos ingredientes
                        frescos, receitas especiais e aquele toque artesanal que faz a diferença. Tudo é feito com
                        cuidado e
                        atenção pra que cada mordida seja uma experiência única.
                    </p>

                    <p>
                        Na Mr. Burger, a gente acredita que um bom lanche vai além do pão e carne. Usamos ingredientes
                        frescos, receitas especiais e aquele toque artesanal que faz a diferença. Tudo é feito com
                        cuidado e
                        atenção pra que cada mordida seja uma experiência única.
                    </p>
                </div>

            </div>

            <div class="img_restaurante_sobre_nos">
                <img class="img-fluid rounded-2" src="{{ asset('assets/home/sobre_nos/mulher_cozinhando.jpg') }}"
                    alt="">
            </div>
        </section>

        <section id="sec-tres" class="bg-primary p-3 text-secondary ">
            <div id="titulos" class="text-center mb-5">
                <h5 class="fw-bold">Nossos pratos mais vendidos</h5>
                <p>Pratos mais vendidos servindo comida deliciosa.</p>
            </div>

            <div id="mais-vendidos" class="d-flex flex-column align-items-center">

                <div class="text-center w-75 mb-3">
                        <img class="w-100 rounded-circle" src="{{ asset('assets/home/pratos_populares/hamburger-sec-pratos-populares.jpg') }}" alt="Hambúrger de carne com bacon e cheddar.">

                        <h6 class="mb-1 mt-2 fw-bold">MR.CHIKEN DUPLO</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitararweraawrw.</p>
                </div>

                <div class="text-center w-75 mb-3">
                        <img class="w-100 rounded-circle" src="{{ asset('assets/home/pratos_populares/hamburger-sec-pratos-populares.jpg') }}" alt="Hambúrger de carne com bacon e cheddar.">

                        <h6 class="mb-1 mt-2 fw-bold">MR.CHIKEN DUPLO</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitararweraawrw.</p>
                </div>

                <div class="text-center w-75 mb-3">
                        <img class="w-100 rounded-circle" src="{{ asset('assets/home/pratos_populares/hamburger-sec-pratos-populares.jpg') }}" alt="Hambúrger de carne com bacon e cheddar.">

                        <h6 class="mb-1 mt-2 fw-bold">MR.CHIKEN DUPLO</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitararweraawrw.</p>
                </div>

            </div>

            <div class="text-center">
                <button type="button" class="btn btn-outline-secondary">Ver mais</button>
            </div>

        </section>

        <section id="sec-quatro" class="bg-secondary p-3">
             <div id="img-sec-quatro" class="mb-3">
                <img class="img-fluid rounded-2"src="{{ asset('assets/home/secao_bonus/comidas-secao-bonus.jpg') }}" alt="Prato com comidas diversas e saborosas">
            </div>

            <div id="info-sec-quatro">
                <h5 class="fw-bold text-dark">Comida saudável e fresca para você</h5>
                <p class="text-light">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae corrupti quos quidem ipsam quisquam facere officiis deserunt dolorem, exercitationem ipsum obcaecati perspiciatis, eos molestiae corporis, doloribus laborum eaque sint id.
                </p>
                <p class="text-light">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae corrupti quos quidem ipsam quisquam facere officiis deserunt dolorem, exercitationem ipsum obcaecati perspiciatis, eos molestiae corporis, doloribus laborum eaque sint id.
                </p>

                <button class="btn btn-primary">Saber Mais</button>
            </div>

        </section>

        <section id="sec-cinco" class="bg-primary p-3">
            <div id="titulos" class="text-center text-secondary">
                <h5>O que nossos clientes dizem?</h5>
                <p>Pratos mais vendidos servindo comida deliciosa.</p>
            </div>

            <div id="feedbacks">
                <div id="feedback" class="text-center bg-white rounded-2 position-relative">
                    <div id="img-feedback" class="position-absolute top-0 start-50 translate-middle mb-5">
                        <img class="img-fluid border border-secondary rounded-circle" src="{{ asset("assets/home/feedback/user_feedback.jpg") }}" alt="Imagem do usuário reponsável por avaliação.">
                    </div>

                    <div id="info-user-feedback" class="mt-3">
                        <h6 class="fw-bold text-dark">Davi Fdp</h6>
                        <p class="text-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. quo expedita tempore.</p>
                    </div>

                    <div id="data-quantidade-feedback">
                        <p>25/06/2026</p>
                        <img class="" src="{{ asset('assets/home/feedback/icones/avaliacao_feedbacks-raw.svg') }}" alt="icone de estrela para avaliação">
                    </div>
                </div>
            </div>
        </section>

        <button class="btn btn-primary">Primário</button>
        <button class="btn btn-secondary">Secundário</button>
        <h1 class="text-dark">Título Escuro</h1>
        <p class="text-light">Descrição Clara</p>
    </main>
</body>



</html>
