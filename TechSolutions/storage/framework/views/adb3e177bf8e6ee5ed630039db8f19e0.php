<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['errors' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['errors' => null]); ?>
<?php foreach (array_filter((['errors' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<h2>Registro de Usuario</h2>

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

<form method="POST" action="<?php echo e(route('register')); ?>">
    <?php echo csrf_field(); ?>
    <?php if (isset($component)) { $__componentOriginal6d56d2dbadc1f55e67d2197e3fd2035e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d56d2dbadc1f55e67d2197e3fd2035e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.form-field','data' => ['label' => 'Nombre','name' => 'nombre','type' => 'text']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.form-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Nombre','name' => 'nombre','type' => 'text']); ?>
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
    <?php if (isset($component)) { $__componentOriginal24e00c00ca284956c19f488a436335cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal24e00c00ca284956c19f488a436335cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('atoms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Registrarse <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal24e00c00ca284956c19f488a436335cc)): ?>
<?php $attributes = $__attributesOriginal24e00c00ca284956c19f488a436335cc; ?>
<?php unset($__attributesOriginal24e00c00ca284956c19f488a436335cc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal24e00c00ca284956c19f488a436335cc)): ?>
<?php $component = $__componentOriginal24e00c00ca284956c19f488a436335cc; ?>
<?php unset($__componentOriginal24e00c00ca284956c19f488a436335cc); ?>
<?php endif; ?>
</form>

<?php if (isset($component)) { $__componentOriginal85e330569274405bc3c835baf755afcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal85e330569274405bc3c835baf755afcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.auth-link','data' => ['question' => '¿Ya tienes cuenta?','linkText' => 'Inicia sesión','route' => 'login']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.auth-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['question' => '¿Ya tienes cuenta?','linkText' => 'Inicia sesión','route' => 'login']); ?>
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
<?php /**PATH C:\Users\holan\OneDrive\Documentos\EV1-laravel-atomic-design\EV1-laravel\resources\views/components/organisms/register-form.blade.php ENDPATH**/ ?>