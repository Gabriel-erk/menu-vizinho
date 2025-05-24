<x-layout title="Mr.Burger - Cardápio">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/cardapio/banners/01_banner_cardapio.jpg') }}" class="d-block w-100"
                    alt="Banner promocional do restaurante Mr.Burger">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('assets/cardapio/banners/01_banner_cardapio.jpg') }}" class="d-block w-100"
                    alt="Banner promocional do restaurante Mr.Burger">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('assets/cardapio/banners/01_banner_cardapio.jpg') }}" class="d-block w-100"
                    alt="Banner promocional do restaurante Mr.Burger">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="p-3 p-lg-5">
        <div class="d-flex gap-2 mt-3">
            {{-- não precisa ser necessariamente um "button" para usar as classes btn btn-outline-primary etc. --}}
            <button type="button" class="btn btn-outline-primary rounded-pill">Lanches</button>
            <button type="button" class="btn btn-outline-primary rounded-pill">Bebidas</button>
            <button type="button" class="btn btn-outline-primary rounded-pill">Sobremesas</button>
        </div>

        <section class="pt-3">
            <h2 class="text-primary mb-3">Lanches mais pedidos</h2>

            {{-- mx-auto para centralizar os elementos e descola-los da borda --}}
            <div class="row mx-auto">
                {{-- cada card fica dentro de uma coluna, não o card vira uma coluna --}}
                <div class="col-12 col-md-6 col-lg-4 pb-4">
                    <div class="card shadow-sm">
                        <a href="{{ route('produto') }}">
                            <img class="img-fluid" src="{{ asset('assets/cardapio/produtos/hamburger_cardapio.png') }}"
                                alt="Imagem do produto MR.KING DUPLO">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Mr.King Duplo</h5>
                            <p class="card-text text-light fw-medium">loreom aoeuramue rueamrueu ramrusjerua.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-light fw-medium">R$ 40,99</span>
                                <button type="button"
                                    class="btn btn-primary rounded-circle p-1 d-flex align-items-center justify-content-center">
                                    <img class="fs-1"
                                        src="{{ asset('assets/cardapio/produtos/icones/add_carrinho.svg') }}"
                                        alt="Adicionar ao Carrinho">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 pb-4">
                    <div class="card shadow-sm ">
                        <img class="img-fluid" src="{{ asset('assets/cardapio/produtos/hamburger_cardapio.png') }}"
                            alt="">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Mr.King Duplo</h5>
                            <p class="card-text text-light fw-medium">loreom aoeuramue rueamrueu ramrusjerua.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-light fw-medium">R$ 40,99</span>
                                <button type="button"
                                    class="btn btn-primary rounded-circle p-1 d-flex align-items-center justify-content-center">
                                    <img class="fs-1"
                                        src="{{ asset('assets/cardapio/produtos/icones/add_carrinho.svg') }}"
                                        alt="Adicionar ao Carrinho">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 pb-4">
                    <div class="card shadow-sm ">
                        <img class="img-fluid" src="{{ asset('assets/cardapio/produtos/hamburger_cardapio.png') }}"
                            alt="">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Mr.King Duplo</h5>
                            <p class="card-text text-light fw-medium">loreom aoeuramue rueamrueu ramrusjerua.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-light fw-medium">R$ 40,99</span>
                                <button type="button"
                                    class="btn btn-primary rounded-circle p-1 d-flex align-items-center justify-content-center">
                                    <img class="fs-1"
                                        src="{{ asset('assets/cardapio/produtos/icones/add_carrinho.svg') }}"
                                        alt="Adicionar ao Carrinho">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 pb-4">
                    <div class="card shadow-sm ">
                        <img class="img-fluid" src="{{ asset('assets/cardapio/produtos/hamburger_cardapio.png') }}"
                            alt="">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Mr.King Duplo</h5>
                            <p class="card-text text-light fw-medium">loreom aoeuramue rueamrueu ramrusjerua.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-light fw-medium">R$ 40,99</span>
                                <button type="button"
                                    class="btn btn-primary rounded-circle p-1 d-flex align-items-center justify-content-center">
                                    <img class="fs-1"
                                        src="{{ asset('assets/cardapio/produtos/icones/add_carrinho.svg') }}"
                                        alt="Adicionar ao Carrinho">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 pb-4">
                    <div class="card shadow-sm ">
                        <img class="img-fluid" src="{{ asset('assets/cardapio/produtos/hamburger_cardapio.png') }}"
                            alt="">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Mr.King Duplo</h5>
                            <p class="card-text text-light fw-medium">loreom aoeuramue rueamrueu ramrusjerua.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-light fw-medium">R$ 40,99</span>
                                <button type="button"
                                    class="btn btn-primary rounded-circle p-1 d-flex align-items-center justify-content-center">
                                    <img class="fs-1"
                                        src="{{ asset('assets/cardapio/produtos/icones/add_carrinho.svg') }}"
                                        alt="Adicionar ao Carrinho">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="pt-3">
            <h2 class="text-primary mb-3">Lançamentos do mês</h2>

            {{-- mx-auto para centralizar os elementos e descola-los da borda --}}
            <div class="row mx-auto">
                {{-- cada card fica dentro de uma coluna, não o card vira uma coluna --}}
                <div class="col-12 col-md-6 col-lg-4 pb-4">
                    <div class="card shadow-sm ">
                        <img class="img-fluid" src="{{ asset('assets/cardapio/produtos/hamburger_cardapio.png') }}"
                            alt="">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Mr.King Duplo</h5>
                            <p class="card-text text-light fw-medium">loreom aoeuramue rueamrueu ramrusjerua.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-light fw-medium">R$ 40,99</span>
                                <button type="button"
                                    class="btn btn-primary rounded-circle p-1 d-flex align-items-center justify-content-center">
                                    <img class="fs-1"
                                        src="{{ asset('assets/cardapio/produtos/icones/add_carrinho.svg') }}"
                                        alt="Adicionar ao Carrinho">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 pb-4">
                    <div class="card shadow-sm ">
                        <img class="img-fluid" src="{{ asset('assets/cardapio/produtos/hamburger_cardapio.png') }}"
                            alt="">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Mr.King Duplo</h5>
                            <p class="card-text text-light fw-medium">loreom aoeuramue rueamrueu ramrusjerua.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-light fw-medium">R$ 40,99</span>
                                <button type="button"
                                    class="btn btn-primary rounded-circle p-1 d-flex align-items-center justify-content-center">
                                    <img class="fs-1"
                                        src="{{ asset('assets/cardapio/produtos/icones/add_carrinho.svg') }}"
                                        alt="Adicionar ao Carrinho">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 pb-4">
                    <div class="card shadow-sm ">
                        <img class="img-fluid" src="{{ asset('assets/cardapio/produtos/hamburger_cardapio.png') }}"
                            alt="">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Mr.King Duplo</h5>
                            <p class="card-text text-light fw-medium">loreom aoeuramue rueamrueu ramrusjerua.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-light fw-medium">R$ 40,99</span>
                                <button type="button"
                                    class="btn btn-primary rounded-circle p-1 d-flex align-items-center justify-content-center">
                                    <img class="fs-1"
                                        src="{{ asset('assets/cardapio/produtos/icones/add_carrinho.svg') }}"
                                        alt="Adicionar ao Carrinho">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 pb-4">
                    <div class="card shadow-sm ">
                        <img class="img-fluid" src="{{ asset('assets/cardapio/produtos/hamburger_cardapio.png') }}"
                            alt="">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Mr.King Duplo</h5>
                            <p class="card-text text-light fw-medium">loreom aoeuramue rueamrueu ramrusjerua.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-light fw-medium">R$ 40,99</span>
                                <button type="button"
                                    class="btn btn-primary rounded-circle p-1 d-flex align-items-center justify-content-center">
                                    <img class="fs-1"
                                        src="{{ asset('assets/cardapio/produtos/icones/add_carrinho.svg') }}"
                                        alt="Adicionar ao Carrinho">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 pb-4">
                    <div class="card shadow-sm ">
                        <img class="img-fluid" src="{{ asset('assets/cardapio/produtos/hamburger_cardapio.png') }}"
                            alt="">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Mr.King Duplo</h5>
                            <p class="card-text text-light fw-medium">loreom aoeuramue rueamrueu ramrusjerua.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-light fw-medium">R$ 40,99</span>
                                <button type="button"
                                    class="btn btn-primary rounded-circle p-1 d-flex align-items-center justify-content-center">
                                    <img class="fs-1"
                                        src="{{ asset('assets/cardapio/produtos/icones/add_carrinho.svg') }}"
                                        alt="Adicionar ao Carrinho">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>

</x-layout>
