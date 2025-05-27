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

        <div class="mt-4 d-flex align-items-center gap-2">
            {{-- hr cria uma linha horizontal, flex-grow-1 faz ele ocupar todo o espaço disponível (no caso, todo o espaço a esquerda, e o outro depois do p "ou" ocupa todo o espaço a direita, o gap na div pai é para separar essas 3 tags uma da outra) --}}
            {{-- ? mb-0 e m-0 e para remover o espaçamento padrão que essas tags tem --}}
            <hr class="flex-grow-1 m-0">
            <p class="mb-0">Ou</p>
            <hr class="flex-grow-1 m-0">
        </div>

        <div class="mt-4 d-flex flex-column gap-3">

            <a href="#" class="login-social-media btn btn-secondary d-flex justify-content-center align-items-center gap-2 py-2">
                <img src="{{ asset('assets/login/google_icon.svg') }}" alt="ícone do Google">
                <p class="text-light m-0">Entrar com Google</p>
            </a>

            <a href="#" class="login-social-media btn btn-secondary d-flex justify-content-center align-items-center gap-2 py-2">
                <img src="{{ asset('assets/login/Facebook_Logo_Primary.png') }}" alt="ícone do Google">
                <p class="text-light m-0">Entrar com Facebook</p>
            </a>
            
        </div>

    </div>
</x-layout>
