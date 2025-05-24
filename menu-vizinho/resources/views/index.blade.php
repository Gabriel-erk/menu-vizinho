<x-layout title="Mr.Burger - Sua Lanchonete Local!">

    <section id="sec-um" class="bg-primary p-3 p-lg-5 d-lg-flex gap-lg-3">

        <div class="apresentacao_restaurante text-secondary mb-3">
            <h3 class="fw-bold mb-3">Nós Convidamos você ao nosso restaurante</h3>
            <p>Na Mr. Burger, a gente acredita que um bom lanche vai além do pão e carne. Usamos ingredientes
                frescos, receitas especiais e aquele toque artesanal que faz a diferença. Tudo é feito com cuidado e
                atenção pra que cada mordida seja uma experiência única.
            </p>
            <p>
                Na Mr. Burger, a gente acredita que um bom lanche vai além do pão e carne tudo é feito com cuidado e
                atenção pra que cada mordida seja uma experiência única.
            </p>
            <button class="btn btn-secondary text-primary fw-medium">
                Explorar Mais
            </button>
        </div>

        <div class="img_restaurante">
            <img class="img-fluid rounded-2" src="{{ asset('assets/home/secao_um/img-teste-home.jpg') }}" alt="">
        </div>

    </section>

    <section id="sec-dois" class="bg-secondary p-3 p-lg-5 d-lg-flex gap-lg-3">
        <div class="texto-sobre-nos-restaurante">
            <div id="titulos" class="text-dark">
                <p class="fw-bold mb-1">
                    Sobre nós
                </p>

                <h3 class="fw-bold mb-3">
                    Hambúrgueres feitos com carinho, servidos com sabor de verdade.
                </h3>
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

                <p class="d-none d-lg-block">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also th.
                </p>

            </div>
        </div>

        <div class="img_restaurante_sobre_nos">
            <img class="img-fluid rounded-2" src="{{ asset('assets/home/sobre_nos/cooking.jpg') }}" alt="">
        </div>
    </section>

    <section id="sec-tres" class="bg-primary p-3 p-lg-5 text-secondary ">
        <div id="titulos" class="text-center mb-5">
            <h3 class="fw-bold">Nossos pratos mais vendidos</h3>
            <p>Pratos mais vendidos servindo comida deliciosa.</p>
        </div>

        <div id="mais-vendidos" class="d-flex flex-column flex-lg-row align-items-center">

            <div class="text-center w-75 mb-3">
                <div class="img-sec-tres">
                    <img class="img-fluid rounded-circle"
                        src="{{ asset('assets/home/pratos_populares/hamburger-sec-pratos-populares.jpg') }}"
                        alt="Hambúrger de carne com bacon e cheddar.">
                </div>
                <p class="mb-1 mt-2 fw-bold">MR.CHIKEN DUPLO</p>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elitararweraawrw.</span>
            </div>

            <div class="text-center w-75 mb-3">

                <div class="img-sec-tres">
                    <img class="img-fluid rounded-circle"
                        src="{{ asset('assets/home/pratos_populares/hamburger-sec-pratos-populares.jpg') }}"
                        alt="Hambúrger de carne com bacon e cheddar.">
                </div>

                <p class="mb-1 mt-2 fw-bold">MR.CHIKEN DUPLO</p>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elitararweraawrw.</span>
            </div>

        </div>

        <div class="text-center">
            <button type="button" class="btn btn-outline-secondary">Ver mais</button>
        </div>

    </section>

    <section id="sec-quatro" class="bg-secondary p-3 p-lg-5 d-lg-flex gap-lg-3">
        <div class="img-sec-quatro mb-3">
            <img class="img-fluid rounded-2"src="{{ asset('assets/home/secao_bonus/comidas-secao-bonus.jpg') }}"
                alt="Prato com comidas diversas e saborosas">
        </div>

        <div id="info-sec-quatro">
            <h3 class="fw-bold text-dark">Comida saudável e fresca para você</h3>
            <p class="text-light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae corrupti quos quidem ipsam
                quisquam facere officiis deserunt dolorem, exercitationem ipsum obcaecati perspiciatis, eos
                molestiae corporis, doloribus laborum eaque sint id.
            </p>
            <p class="text-light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae corrupti quos quidem ipsam
                quisquam facere officiis deserunt dolorem, exercitationem ipsum obcaecati perspiciatis, eos
                molestiae corporis, doloribus laborum eaque sint id.
            </p>
            <p class="text-light d-none d-lg-block">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae corrupti quos quidem ipsam
                quisquam facere officiis deserunt dolorem, exercitationem ipsum obcaecati perspiciatis, eos
                molestiae corporis, doloribus laborum eaque sint idase ipsum uymyu umu uy yquweiq oqueyqy uoo
                quyqieioquuqueioqueoiuqiou.
            </p>

            <button class="btn btn-primary">Saber Mais</button>
        </div>

    </section>

    <section id="sec-cinco" class="bg-primary p-3 p-lg-5">
        <div id="titulos" class="text-center text-secondary">
            <h3>O que nossos clientes dizem?</h3>
            <p>Pratos mais vendidos servindo comida deliciosa.</p>
        </div>

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            {{-- flex + gap apenas para dar uma distânciada pois estavam muito colados durante as transições --}}
            <div class="carousel-inner d-flex gap-3">
                <div class="carousel-item active text-center bg-white rounded-2 py-3 shadow">
                    <div id="img-feedback" class="mb-3">
                        <img class="img-fluid border border-5 border-secondary rounded-circle"
                            src="{{ asset('assets/home/feedback/user_feedback.jpg') }}"
                            alt="Imagem do usuário reponsável por avaliação.">
                    </div>

                    <div id="info-user-feedback" class="mt-3">
                        <h6 class="fw-bold text-dark">Davi Fdp</h6>
                        <p class="text-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. quo
                            expedita
                            tempore.</p>
                    </div>

                    <div id="data-quantidade-feedback">
                        <p class="mb-2">25/06/2026</p>
                        <div id="estrelas" class="d-flex justify-content-center gap-1">
                            <img src="{{ asset('assets/home/feedback/icones/avaliacao_feedbacks-raw.svg') }}"
                                alt="icone de estrela para avaliação">
                            <img src="{{ asset('assets/home/feedback/icones/avaliacao_feedbacks-raw.svg') }}"
                                alt="icone de estrela para avaliação">
                            <img src="{{ asset('assets/home/feedback/icones/avaliacao_feedbacks-raw.svg') }}"
                                alt="icone de estrela para avaliação">
                            <img src="{{ asset('assets/home/feedback/icones/avaliacao_feedbacks-raw.svg') }}"
                                alt="icone de estrela para avaliação">
                            <img src="{{ asset('assets/home/feedback/icones/avaliacao_feedbacks-raw.svg') }}"
                                alt="icone de estrela para avaliação">
                        </div>
                    </div>
                </div>

                <div class="carousel-item text-center bg-white rounded-2 py-3 shadow">
                    <div id="img-feedback" class="mb-3">
                        <img class="img-fluid border border-5 border-secondary rounded-circle"
                            src="{{ asset('assets/home/feedback/user_feedback.jpg') }}"
                            alt="Imagem do usuário reponsável por avaliação.">
                    </div>

                    <div id="info-user-feedback" class="mt-3">
                        <h6 class="fw-bold text-dark">Davi Fdp</h6>
                        <p class="text-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. quo
                            expedita
                            tempore.</p>
                    </div>

                    <div id="data-quantidade-feedback">
                        <p class="mb-2">25/06/2026</p>
                        <div id="estrelas" class="d-flex justify-content-center gap-1">
                            <img src="{{ asset('assets/home/feedback/icones/avaliacao_feedbacks-raw.svg') }}"
                                alt="icone de estrela para avaliação">
                            <img src="{{ asset('assets/home/feedback/icones/avaliacao_feedbacks-raw.svg') }}"
                                alt="icone de estrela para avaliação">
                            <img src="{{ asset('assets/home/feedback/icones/avaliacao_feedbacks-raw.svg') }}"
                                alt="icone de estrela para avaliação">
                            <img src="{{ asset('assets/home/feedback/icones/avaliacao_feedbacks-raw.svg') }}"
                                alt="icone de estrela para avaliação">
                            <img src="{{ asset('assets/home/feedback/icones/avaliacao_feedbacks-raw.svg') }}"
                                alt="icone de estrela para avaliação">
                        </div>
                    </div>
                </div>

                <div class="carousel-item text-center bg-white rounded-2 py-3 shadow">
                    <div id="img-feedback" class="mb-3">
                        <img class="img-fluid border border-5 border-secondary rounded-circle"
                            src="{{ asset('assets/home/feedback/user_feedback.jpg') }}"
                            alt="Imagem do usuário reponsável por avaliação.">
                    </div>

                    <div id="info-user-feedback" class="mt-3">
                        <h6 class="fw-bold text-dark">Davi Fdp</h6>
                        <p class="text-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. quo
                            expedita
                            tempore.</p>
                    </div>

                    <div id="data-quantidade-feedback">
                        <p class="mb-2">25/06/2026</p>
                        <div id="estrelas" class="d-flex justify-content-center gap-1">
                            <img src="{{ asset('assets/home/feedback/icones/avaliacao_feedbacks-raw.svg') }}"
                                alt="icone de estrela para avaliação">
                            <img src="{{ asset('assets/home/feedback/icones/avaliacao_feedbacks-raw.svg') }}"
                                alt="icone de estrela para avaliação">
                            <img src="{{ asset('assets/home/feedback/icones/avaliacao_feedbacks-raw.svg') }}"
                                alt="icone de estrela para avaliação">
                            <img src="{{ asset('assets/home/feedback/icones/avaliacao_feedbacks-raw.svg') }}"
                                alt="icone de estrela para avaliação">
                            <img src="{{ asset('assets/home/feedback/icones/avaliacao_feedbacks-raw.svg') }}"
                                alt="icone de estrela para avaliação">
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

</x-layout>
