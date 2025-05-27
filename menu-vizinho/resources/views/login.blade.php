<x-layout title="Mr.Burger - Login">


    <div class="p-3">

        <div class="img-login">
            <img class="img-fluid rounded-2 shadow" src="{{ asset('assets/login/restaurant-login.jpg') }}"
                alt="Imagem do restaurante Mr.Burger">
        </div>

        <div class="titulos mt-4">
            <h3 class="fw-bold">Seja bem vindo de volta!</h3>
            <p>Um ótimo dia começa por aqui. Um dia de novas vitórias.
                Registre-se e comece a comprar.</p>
        </div>

        <form class="row g-3">
            {{-- p-0 para remover o pequeno espaçamento que estava tendo e desalinhando com os botões --}}
            <div class="col-12">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>

            <div class="col-12">
                <label for="inputPassword4" class="form-label">Senha</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>

            <div class="col-12 mt-4">
                <button type="submit" class="btn btn-primary w-100">Entrar</button>
            </div>
        </form>

        

    </div>
</x-layout>
