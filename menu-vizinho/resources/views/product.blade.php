<x-layout title="Mr.Burger - Produto">
    <div id="produto" class="p-4">

        <img class="img-fluid" src="{{ asset('assets/cardapio/produtos/hamburger_cardapio.png') }}"
            alt="imagem do produto Mr.King Duplo">

        <h3 class="text-primary fw-bold">MR.KING DUPLO</h3>
        <span class="text-light fw-medium">Descrição detalhada do produto - lorem ipsum idolr apset aaa escrição
            detalhada do produto - lorem ipsum idolrapset aaa</span>
        <span class="text-light fw-medium d-block py-3">Imagem meramente ilustrativa.</span>
        <p class="text-light fw-medium">R$ 50.99</p>
    </div>

    <section>
        <div class="d-flex align-items-center justify-content-between p-4 bg-secondary">
            <span class="fw-medium fw-light">Informações adicionais</span>
            <button type="button"
                class="btn btn-primary rounded-circle p-1 d-flex align-items-center justify-content-center">
                <img class="fs-3" src="{{ asset('assets/cardapio/produtos/icones/add_carrinho.svg') }}"
                    alt="Adicionar ao Carrinho">
            </button>
        </div>

        <div class="d-flex align-items-center justify-content-between p-4 mt-4 bg-secondary">
            <span class="fw-medium fw-light">Adicionais</span>
            <button type="button"
                class="btn btn-primary rounded-circle p-1 d-flex align-items-center justify-content-center">
                <img class="fs-3" src="{{ asset('assets/cardapio/produtos/icones/add_carrinho.svg') }}"
                    alt="Adicionar ao Carrinho">
            </button>
        </div>
       
    </section>

    <div class="text-center mt-5 mb-4">
        <button class="btn btn-primary text-secondary fw-medium">
            Adicionar ao carrinho
        </button>
    </div>

</x-layout>
