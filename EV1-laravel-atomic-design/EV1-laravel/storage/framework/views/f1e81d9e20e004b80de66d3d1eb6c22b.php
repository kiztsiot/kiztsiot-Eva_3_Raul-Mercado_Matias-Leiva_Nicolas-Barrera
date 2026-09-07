<?php $__env->startSection('title', 'Sesión iniciada'); ?>

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal987f8c041f9f81a95e5ac2d4a9a44984 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal987f8c041f9f81a95e5ac2d4a9a44984 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.organisms.login-success','data' => ['usuario' => $usuario,'token' => $token]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('organisms.login-success'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['usuario' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($usuario),'token' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($token)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal987f8c041f9f81a95e5ac2d4a9a44984)): ?>
<?php $attributes = $__attributesOriginal987f8c041f9f81a95e5ac2d4a9a44984; ?>
<?php unset($__attributesOriginal987f8c041f9f81a95e5ac2d4a9a44984); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal987f8c041f9f81a95e5ac2d4a9a44984)): ?>
<?php $component = $__componentOriginal987f8c041f9f81a95e5ac2d4a9a44984; ?>
<?php unset($__componentOriginal987f8c041f9f81a95e5ac2d4a9a44984); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\holan\OneDrive\Documentos\EV1-laravel-atomic-design\EV1-laravel\resources\views/auth/login-success.blade.php ENDPATH**/ ?>