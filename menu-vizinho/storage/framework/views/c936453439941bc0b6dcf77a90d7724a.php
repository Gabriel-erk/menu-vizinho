<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => 'Mr.Burger - Cardápio']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Mr.Burger - Cardápio']); ?>
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo e(asset('assets/cardapio/banners/01_banner_cardapio.jpg')); ?>" class="d-block w-100"
                    alt="Banner promocional do restaurante Mr.Burger">
            </div>

            <div class="carousel-item">
                <img src="<?php echo e(asset('assets/cardapio/banners/01_banner_cardapio.jpg')); ?>" class="d-block w-100"
                    alt="Banner promocional do restaurante Mr.Burger">
            </div>

            <div class="carousel-item">
                <img src="<?php echo e(asset('assets/cardapio/banners/01_banner_cardapio.jpg')); ?>" class="d-block w-100"
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
            
            <button type="button" class="btn btn-outline-primary rounded-pill">Lanches</button>
            <button type="button" class="btn btn-outline-primary rounded-pill">Bebidas</button>
            <button type="button" class="btn btn-outline-primary rounded-pill">Sobremesas</button>
        </div>

        <section class="pt-3">
            <h2 class="text-primary mb-3">Lanches mais pedidos</h2>

            
            <div class="row mx-auto">
                
                <div class="col-12 col-md-6 col-lg-4 pb-4">
                    <div class="card shadow-sm">
                        <a href="<?php echo e(route('produto')); ?>">
                            <img class="img-fluid" src="<?php echo e(asset('assets/cardapio/produtos/hamburger_cardapio.png')); ?>"
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
                                        src="<?php echo e(asset('assets/cardapio/produtos/icones/add_carrinho.svg')); ?>"
                                        alt="Adicionar ao Carrinho">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 pb-4">
                    <div class="card shadow-sm ">
                        <img class="img-fluid" src="<?php echo e(asset('assets/cardapio/produtos/hamburger_cardapio.png')); ?>"
                            alt="">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Mr.King Duplo</h5>
                            <p class="card-text text-light fw-medium">loreom aoeuramue rueamrueu ramrusjerua.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-light fw-medium">R$ 40,99</span>
                                <button type="button"
                                    class="btn btn-primary rounded-circle p-1 d-flex align-items-center justify-content-center">
                                    <img class="fs-1"
                                        src="<?php echo e(asset('assets/cardapio/produtos/icones/add_carrinho.svg')); ?>"
                                        alt="Adicionar ao Carrinho">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 pb-4">
                    <div class="card shadow-sm ">
                        <img class="img-fluid" src="<?php echo e(asset('assets/cardapio/produtos/hamburger_cardapio.png')); ?>"
                            alt="">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Mr.King Duplo</h5>
                            <p class="card-text text-light fw-medium">loreom aoeuramue rueamrueu ramrusjerua.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-light fw-medium">R$ 40,99</span>
                                <button type="button"
                                    class="btn btn-primary rounded-circle p-1 d-flex align-items-center justify-content-center">
                                    <img class="fs-1"
                                        src="<?php echo e(asset('assets/cardapio/produtos/icones/add_carrinho.svg')); ?>"
                                        alt="Adicionar ao Carrinho">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 pb-4">
                    <div class="card shadow-sm ">
                        <img class="img-fluid" src="<?php echo e(asset('assets/cardapio/produtos/hamburger_cardapio.png')); ?>"
                            alt="">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Mr.King Duplo</h5>
                            <p class="card-text text-light fw-medium">loreom aoeuramue rueamrueu ramrusjerua.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-light fw-medium">R$ 40,99</span>
                                <button type="button"
                                    class="btn btn-primary rounded-circle p-1 d-flex align-items-center justify-content-center">
                                    <img class="fs-1"
                                        src="<?php echo e(asset('assets/cardapio/produtos/icones/add_carrinho.svg')); ?>"
                                        alt="Adicionar ao Carrinho">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 pb-4">
                    <div class="card shadow-sm ">
                        <img class="img-fluid" src="<?php echo e(asset('assets/cardapio/produtos/hamburger_cardapio.png')); ?>"
                            alt="">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Mr.King Duplo</h5>
                            <p class="card-text text-light fw-medium">loreom aoeuramue rueamrueu ramrusjerua.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-light fw-medium">R$ 40,99</span>
                                <button type="button"
                                    class="btn btn-primary rounded-circle p-1 d-flex align-items-center justify-content-center">
                                    <img class="fs-1"
                                        src="<?php echo e(asset('assets/cardapio/produtos/icones/add_carrinho.svg')); ?>"
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

            
            <div class="row mx-auto">
                
                <div class="col-12 col-md-6 col-lg-4 pb-4">
                    <div class="card shadow-sm ">
                        <img class="img-fluid" src="<?php echo e(asset('assets/cardapio/produtos/hamburger_cardapio.png')); ?>"
                            alt="">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Mr.King Duplo</h5>
                            <p class="card-text text-light fw-medium">loreom aoeuramue rueamrueu ramrusjerua.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-light fw-medium">R$ 40,99</span>
                                <button type="button"
                                    class="btn btn-primary rounded-circle p-1 d-flex align-items-center justify-content-center">
                                    <img class="fs-1"
                                        src="<?php echo e(asset('assets/cardapio/produtos/icones/add_carrinho.svg')); ?>"
                                        alt="Adicionar ao Carrinho">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 pb-4">
                    <div class="card shadow-sm ">
                        <img class="img-fluid" src="<?php echo e(asset('assets/cardapio/produtos/hamburger_cardapio.png')); ?>"
                            alt="">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Mr.King Duplo</h5>
                            <p class="card-text text-light fw-medium">loreom aoeuramue rueamrueu ramrusjerua.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-light fw-medium">R$ 40,99</span>
                                <button type="button"
                                    class="btn btn-primary rounded-circle p-1 d-flex align-items-center justify-content-center">
                                    <img class="fs-1"
                                        src="<?php echo e(asset('assets/cardapio/produtos/icones/add_carrinho.svg')); ?>"
                                        alt="Adicionar ao Carrinho">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 pb-4">
                    <div class="card shadow-sm ">
                        <img class="img-fluid" src="<?php echo e(asset('assets/cardapio/produtos/hamburger_cardapio.png')); ?>"
                            alt="">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Mr.King Duplo</h5>
                            <p class="card-text text-light fw-medium">loreom aoeuramue rueamrueu ramrusjerua.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-light fw-medium">R$ 40,99</span>
                                <button type="button"
                                    class="btn btn-primary rounded-circle p-1 d-flex align-items-center justify-content-center">
                                    <img class="fs-1"
                                        src="<?php echo e(asset('assets/cardapio/produtos/icones/add_carrinho.svg')); ?>"
                                        alt="Adicionar ao Carrinho">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 pb-4">
                    <div class="card shadow-sm ">
                        <img class="img-fluid" src="<?php echo e(asset('assets/cardapio/produtos/hamburger_cardapio.png')); ?>"
                            alt="">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Mr.King Duplo</h5>
                            <p class="card-text text-light fw-medium">loreom aoeuramue rueamrueu ramrusjerua.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-light fw-medium">R$ 40,99</span>
                                <button type="button"
                                    class="btn btn-primary rounded-circle p-1 d-flex align-items-center justify-content-center">
                                    <img class="fs-1"
                                        src="<?php echo e(asset('assets/cardapio/produtos/icones/add_carrinho.svg')); ?>"
                                        alt="Adicionar ao Carrinho">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 pb-4">
                    <div class="card shadow-sm ">
                        <img class="img-fluid" src="<?php echo e(asset('assets/cardapio/produtos/hamburger_cardapio.png')); ?>"
                            alt="">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Mr.King Duplo</h5>
                            <p class="card-text text-light fw-medium">loreom aoeuramue rueamrueu ramrusjerua.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-light fw-medium">R$ 40,99</span>
                                <button type="button"
                                    class="btn btn-primary rounded-circle p-1 d-flex align-items-center justify-content-center">
                                    <img class="fs-1"
                                        src="<?php echo e(asset('assets/cardapio/produtos/icones/add_carrinho.svg')); ?>"
                                        alt="Adicionar ao Carrinho">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH C:\dev\menu-vizinho\menu-vizinho\resources\views/menu.blade.php ENDPATH**/ ?>