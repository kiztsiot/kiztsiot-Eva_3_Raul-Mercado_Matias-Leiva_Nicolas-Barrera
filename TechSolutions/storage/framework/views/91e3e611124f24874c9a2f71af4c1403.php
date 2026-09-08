<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['error' => null, 'errors' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['error' => null, 'errors' => null]); ?>
<?php foreach (array_filter((['error' => null, 'errors' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="flex items-center justify-center min-h-[80vh] px-4">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl border border-gray-100 p-8 space-y-6">
        
        <!-- Encabezado -->
        <div class="text-center space-y-2">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Iniciar Sesión</h2>
            <p class="text-sm text-gray-500">Bienvenido de nuevo a Tech Solutions</p>
        </div>

        <!-- Alertas de Error Global -->
        <?php if($error): ?>
            <?php if (isset($component)) { $__componentOriginale46f6868b20c02211a27868424e8d71a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale46f6868b20c02211a27868424e8d71a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.alert','data' => ['variant' => 'error']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('atoms.alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'error']); ?><?php echo e($error); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale46f6868b20c02211a27868424e8d71a)): ?>
<?php $attributes = $__attributesOriginale46f6868b20c02211a27868424e8d71a; ?>
<?php unset($__attributesOriginale46f6868b20c02211a27868424e8d71a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale46f6868b20c02211a27868424e8d71a)): ?>
<?php $component = $__componentOriginale46f6868b20c02211a27868424e8d71a; ?>
<?php unset($__componentOriginale46f6868b20c02211a27868424e8d71a); ?>
<?php endif; ?>
        <?php endif; ?>

        <!-- Lista de Errores de Validación -->
        <?php if (isset($component)) { $__componentOriginal8d8885ea21c5afafca760bfdbe9d8242 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8d8885ea21c5afafca760bfdbe9d8242 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.error-list','data' => ['errors' => $errors ?? null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.error-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors ?? null)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8d8885ea21c5afafca760bfdbe9d8242)): ?>
<?php $attributes = $__attributesOriginal8d8885ea21c5afafca760bfdbe9d8242; ?>
<?php unset($__attributesOriginal8d8885ea21c5afafca760bfdbe9d8242); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8d8885ea21c5afafca760bfdbe9d8242)): ?>
<?php $component = $__componentOriginal8d8885ea21c5afafca760bfdbe9d8242; ?>
<?php unset($__componentOriginal8d8885ea21c5afafca760bfdbe9d8242); ?>
<?php endif; ?>

        <!-- Formulario -->
        <form method="POST" action="<?php echo e(route('login')); ?>" class="space-y-4">
            <?php echo csrf_field(); ?>
            
            <?php if (isset($component)) { $__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form-field','data' => ['label' => 'Correo','name' => 'correo','type' => 'email']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.form-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Correo','name' => 'correo','type' => 'email']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e)): ?>
<?php $attributes = $__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e; ?>
<?php unset($__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e)): ?>
<?php $component = $__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e; ?>
<?php unset($__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e); ?>
<?php endif; ?>
            
            <?php if (isset($component)) { $__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form-field','data' => ['label' => 'Clave','name' => 'clave','type' => 'password']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.form-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Clave','name' => 'clave','type' => 'password']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e)): ?>
<?php $attributes = $__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e; ?>
<?php unset($__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e)): ?>
<?php $component = $__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e; ?>
<?php unset($__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e); ?>
<?php endif; ?>
            
            <div class="pt-2">
                <?php if (isset($component)) { $__componentOriginal24e00c00ca284956c19f488a436335cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal24e00c00ca284956c19f488a436335cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.button','data' => ['class' => 'w-full justify-center bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 rounded-lg shadow-sm transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('atoms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full justify-center bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 rounded-lg shadow-sm transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2']); ?>
                    Ingresar
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal24e00c00ca284956c19f488a436335cc)): ?>
<?php $attributes = $__attributesOriginal24e00c00ca284956c19f488a436335cc; ?>
<?php unset($__attributesOriginal24e00c00ca284956c19f488a436335cc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal24e00c00ca284956c19f488a436335cc)): ?>
<?php $component = $__componentOriginal24e00c00ca284956c19f488a436335cc; ?>
<?php unset($__componentOriginal24e00c00ca284956c19f488a436335cc); ?>
<?php endif; ?>
            </div>
        </form>

        <!-- Enlace de Registro -->
        <div class="text-center pt-2 border-t border-gray-100">
            <?php if (isset($component)) { $__componentOriginal85e330569274405bc3c835baf755afcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal85e330569274405bc3c835baf755afcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.auth-link','data' => ['question' => '¿No tienes cuenta?','linkText' => 'Regístrate','route' => 'register']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.auth-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['question' => '¿No tienes cuenta?','linkText' => 'Regístrate','route' => 'register']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal85e330569274405bc3c835baf755afcb)): ?>
<?php $attributes = $__attributesOriginal85e330569274405bc3c835baf755afcb; ?>
<?php unset($__attributesOriginal85e330569274405bc3c835baf755afcb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal85e330569274405bc3c835baf755afcb)): ?>
<?php $component = $__componentOriginal85e330569274405bc3c835baf755afcb; ?>
<?php unset($__componentOriginal85e330569274405bc3c835baf755afcb); ?>
<?php endif; ?>
        </div>

    </div>
</div><?php /**PATH C:\Users\matia\OneDrive\TechSolutions\TechSolutions\resources\views/components/organisms/login-form.blade.php ENDPATH**/ ?>