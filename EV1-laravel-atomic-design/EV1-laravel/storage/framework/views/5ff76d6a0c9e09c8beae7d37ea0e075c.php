<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['usuario', 'token']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['usuario', 'token']); ?>
<?php foreach (array_filter((['usuario', 'token']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<h2>¡Bienvenido, <?php echo e($usuario->nombre); ?>!</h2>

<?php if (isset($component)) { $__componentOriginald9bff49d43330398029cdfcac4f0453e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald9bff49d43330398029cdfcac4f0453e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.success-message','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.success-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Inicio de sesión exitoso. <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald9bff49d43330398029cdfcac4f0453e)): ?>
<?php $attributes = $__attributesOriginald9bff49d43330398029cdfcac4f0453e; ?>
<?php unset($__attributesOriginald9bff49d43330398029cdfcac4f0453e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald9bff49d43330398029cdfcac4f0453e)): ?>
<?php $component = $__componentOriginald9bff49d43330398029cdfcac4f0453e; ?>
<?php unset($__componentOriginald9bff49d43330398029cdfcac4f0453e); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal20aa0a63a7e54f7910e943ea6e6acae5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal20aa0a63a7e54f7910e943ea6e6acae5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.label','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('atoms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Tu token JWT: <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal20aa0a63a7e54f7910e943ea6e6acae5)): ?>
<?php $attributes = $__attributesOriginal20aa0a63a7e54f7910e943ea6e6acae5; ?>
<?php unset($__attributesOriginal20aa0a63a7e54f7910e943ea6e6acae5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal20aa0a63a7e54f7910e943ea6e6acae5)): ?>
<?php $component = $__componentOriginal20aa0a63a7e54f7910e943ea6e6acae5; ?>
<?php unset($__componentOriginal20aa0a63a7e54f7910e943ea6e6acae5); ?>
<?php endif; ?>
<pre><?php echo e($token); ?></pre>

<div class="molecule-link">
    <?php if (isset($component)) { $__componentOriginal43c4f96eed98895dc00b871e8e014e3c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal43c4f96eed98895dc00b871e8e014e3c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.link','data' => ['href' => route('login')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('atoms.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('login'))]); ?>Volver <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal43c4f96eed98895dc00b871e8e014e3c)): ?>
<?php $attributes = $__attributesOriginal43c4f96eed98895dc00b871e8e014e3c; ?>
<?php unset($__attributesOriginal43c4f96eed98895dc00b871e8e014e3c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal43c4f96eed98895dc00b871e8e014e3c)): ?>
<?php $component = $__componentOriginal43c4f96eed98895dc00b871e8e014e3c; ?>
<?php unset($__componentOriginal43c4f96eed98895dc00b871e8e014e3c); ?>
<?php endif; ?>
</div>
<?php /**PATH C:\Users\holan\OneDrive\Documentos\EV1-laravel-atomic-design\EV1-laravel\resources\views/components/organisms/login-success.blade.php ENDPATH**/ ?>