<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => 'Mr.Burger - Produto']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Mr.Burger - Produto']); ?>
    <div id="produto" class="p-4 p-lg-5">

        <div id="img-produto-cardapio">
            <img class="img-fluid d-block"
                src="<?php echo e(asset('assets/cardapio/produtos/hamburger_cardapio.png')); ?>"
                alt="imagem do produto Mr.King Duplo">
        </div>

        <h3 class="text-primary fw-bold">MR.KING DUPLO</h3>
        <span class="text-light fw-medium">Descrição detalhada do produto - lorem ipsum idolr apset aaa escrição
            detalhada do produto - lorem ipsum idolrapset aaa</span>
        <span class="text-light fw-medium d-block py-3">Imagem meramente ilustrativa.</span>
        <p class="text-light fw-medium">R$ 50.99</p>
    </div>

    <section>
        <div class="d-flex align-items-center justify-content-between p-4 p-lg-5 bg-secondary">
            <span class="fw-medium fw-light">Informações adicionais</span>
            <button type="button"
                class="btn btn-primary rounded-circle p-1 d-flex align-items-center justify-content-center">
                <img class="fs-3" src="<?php echo e(asset('assets/cardapio/produtos/icones/add_carrinho.svg')); ?>"
                    alt="Adicionar ao Carrinho">
            </button>
        </div>

        <div class="d-flex align-items-center justify-content-between p-4 p-lg-5 mt-4 bg-secondary">
            <span class="fw-medium fw-light">Adicionais</span>
            <button type="button"
                class="btn btn-primary rounded-circle p-1 d-flex align-items-center justify-content-center">
                <img class="fs-3" src="<?php echo e(asset('assets/cardapio/produtos/icones/add_carrinho.svg')); ?>"
                    alt="Adicionar ao Carrinho">
            </button>
        </div>

    </section>

    <div class="text-center mt-5 mb-4">
        <button class="btn btn-primary text-secondary fw-medium">
            Adicionar ao carrinho
        </button>
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
<?php /**PATH C:\dev\menu-vizinho\menu-vizinho\resources\views/product.blade.php ENDPATH**/ ?>