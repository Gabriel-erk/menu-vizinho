<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php echo e($title); ?></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Poppins:wght@400;500&display=swap"
        rel="stylesheet">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/scss/app.scss', 'resources/js/app.js']); ?>
</head>

<body>
    <header>
        
        <nav class="navbar bg-primary navbar-dark">
            <div class="container-fluid px-lg-4">
                <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                    <h1 class="m-0"><img class="d-block navbar-logo img-fluid"
                            src="<?php echo e(asset('assets/navbar/logo.png')); ?>" alt="Logo do restaurante Mr.Burger"></h1>
                </a>

                <div id="navbar_desktop" class="d-none d-lg-block">
                    <ul id="navbar_desktop" class="list-unstyled m-0 d-flex gap-5 align-items-center">
                        <li><a href="<?php echo e(route('home')); ?>" class="text-secondary text-decoration-none">HOME</a></li>
                        <li><a href="<?php echo e(route('cardapio')); ?>" class="text-secondary text-decoration-none">CARDÁPIO</a>
                        </li>
                        <li><a href="#" class="text-secondary text-decoration-none">OFERTAS</a></li>
                        <li><a href="#" class="text-secondary text-decoration-none">CUPONS</a></li>
                    </ul>
                </div>

                
                <div class="d-none d-lg-flex gap-3">

                    <a href="<?php echo e(route('login')); ?>" class="btn btn-secondary">
                        <i class="fa-solid fa-user fs-4" style="color: #342F2E;"></i>
                    </a>

                    
                    <a href="#" class="btn btn-secondary position-relative">
                        <i class="fa-solid fa-bag-shopping fs-4" style="color: #342F2E;"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            99+
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>

                </div>

                
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-end bg-primary text-secondary" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Opções</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?php echo e(route('home')); ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('cardapio')); ?>">Cardápio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Ofertas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Cupons</a>
                            </li>
                            <li class="nav-item d-flex gap-4">
                                <a class="nav-link" href="<?php echo e(route('cadastro')); ?>">Criar conta</a>
                                <a class="btn btn-secondary" href="<?php echo e(route('login')); ?>">Entrar</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <?php echo e($slot); ?>

    </main>

    <footer class="p-3 p-lg-5 bg-dark">
        <div class="d-flex flex-column flex-lg-row justify-content-lg-between gap-3 ">

            <div id="info-rodape">
                <p class="text-white">INFORMAÇÕES</p>
                <ul class="list-unstyled d-flex flex-column gap-2">
                    <li><a href="#" class="text-decoration-none text-white fw-light">Sobre nós</a></li>
                    <li><a href="#" class="text-decoration-none text-white fw-light">Contato</a></li>
                    <li><a href="#" class="text-decoration-none text-white fw-light">Descontos</a></li>
                    <li><a href="<?php echo e(route('politicas')); ?>" class="text-decoration-none text-white fw-light">Política e privacidade</a></li>
                </ul>
            </div>

            <div id="info-rodape">
                <p class="text-white">INFORMAÇÕES</p>
                <ul class="list-unstyled d-flex flex-column gap-2">
                    <li><a href="#" class="text-decoration-none text-white fw-light">Sobre nós</a></li>
                    <li><a href="#" class="text-decoration-none text-white fw-light">Contato</a></li>
                    <li><a href="#" class="text-decoration-none text-white fw-light">Descontos</a></li>
                    <li><a href="#" class="text-decoration-none text-white fw-light">Política e privacidade</a></li>
                </ul>
            </div>

            <div id="info-rodape">
                <p class="text-white">LINKS ÚTEIS</p>
                <ul class="list-unstyled d-flex flex-column gap-2">
                    <li><a href="<?php echo e(route('home')); ?>" class="text-decoration-none text-white fw-light">Home</a></li>
                    <li><a href="<?php echo e(route('cardapio')); ?>" class="text-decoration-none text-white fw-light">Menu</a></li>
                    <li><a href="#" class="text-decoration-none text-white fw-light">Cupons</a></li>
                    <li><a href="#" class="text-decoration-none text-white fw-light">Área do usuário</a></li>
                </ul>
            </div>

            <div id="info-rodape">
                <p class="text-white">BAIXE NOSSO APP</p>
                <ul class="list-unstyled d-flex flex-column gap-2">
                    <li><a href="#" class="text-decoration-none text-white fw-light">Explore nosso cardápio completo onde
                            estiver.
                        </a></li>

                    <li><a href="#" class="text-decoration-none text-white fw-light">Receba promoções exclusivas
                            diretamente no seu celular.</a></li>

                    <li id="icones-dowload" class="d-flex gap-2">
                        <img src="<?php echo e(asset('assets/home/rodape/Portuguese-Brazil-bagde-google-play.svg')); ?>">
                        <img src="<?php echo e(asset('assets/home/rodape/dowload_app-store.svg')); ?>">
                    </li>

                </ul>
            </div>
        </div>
    </footer>
    
    <script src="https://kit.fontawesome.com/c3faedaa29.js" crossorigin="anonymous"></script>
</body>

</html>
<?php /**PATH C:\dev\menu-vizinho\menu-vizinho\resources\views/components/layout.blade.php ENDPATH**/ ?>