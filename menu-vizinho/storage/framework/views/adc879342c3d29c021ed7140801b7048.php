<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => 'Mr.Burger - Cadastro']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Mr.Burger - Cadastro']); ?>

    <div class="p-3">

        <div class="img-login">
            <img class="img-fluid rounded-2 shadow" src="<?php echo e(asset('assets/login/restaurant-login.jpg')); ?>"
                alt="Imagem do restaurante Mr.Burger">
        </div>

        <div class="titulos mt-4">
            <h3 class="fw-bold">Criando sua conta!</h3>
            <p>Um ótimo dia começa por aqui. Um dia de novas vitórias.
                Registre-se e comece a comprar.</p>
        </div>

        <form class="row g-3">
            
            <div class="col-12">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>

            <div class="col-12">
                <label for="inputPassword4" class="form-label">Senha</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>

            <div class="col-12">
                <label for="inputConfirmPassword4" class="form-label">Confirmar a senha</label>
                <input type="password" class="form-control" id="inputConfirmPassword4">
            </div>

            <div class="col-12 mt-4">
                <button type="submit" class="btn btn-primary w-100">Registrar</button>
            </div>
        </form>

        <div class="mt-4 d-flex align-items-center gap-2">
            
            
            <hr class="flex-grow-1 m-0">
            <p class="mb-0">Ou</p>
            <hr class="flex-grow-1 m-0">
        </div>

        <div class="mt-2 d-flex flex-column gap-3">

            <a href="#"
                class="login-register-social-media btn btn-secondary d-flex justify-content-center align-items-center gap-2 py-2">
                <img src="<?php echo e(asset('assets/login/google_icon.svg')); ?>" alt="ícone do Google">
                <p class="text-light m-0">Registrar com Google</p>
            </a>

            <a href="#"
                class="login-register-social-media btn btn-secondary d-flex justify-content-center align-items-center gap-2 py-2">
                <img src="<?php echo e(asset('assets/login/Facebook_Logo_Primary.png')); ?>" alt="ícone do Google">
                <p class="text-light m-0">Registrar com Facebook</p>
            </a>

        </div>

        <p class="mt-4 text-center">Já possui uma conta? <a href="<?php echo e(route('login')); ?>">Entre</a></p>

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
<?php /**PATH C:\dev\menu-vizinho\menu-vizinho\resources\views/register.blade.php ENDPATH**/ ?>