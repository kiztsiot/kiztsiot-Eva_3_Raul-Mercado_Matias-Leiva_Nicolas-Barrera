<?php $__env->startSection('title', 'Inicio de Sesión'); ?>

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal31044fa10f8d24c18a32448d6a478192 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal31044fa10f8d24c18a32448d6a478192 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.organisms.login-form','data' => ['error' => $error ?? null,'errors' => $errors ?? null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('organisms.login-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['error' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($error ?? null),'errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors ?? null)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal31044fa10f8d24c18a32448d6a478192)): ?>
<?php $attributes = $__attributesOriginal31044fa10f8d24c18a32448d6a478192; ?>
<?php unset($__attributesOriginal31044fa10f8d24c18a32448d6a478192); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal31044fa10f8d24c18a32448d6a478192)): ?>
<?php $component = $__componentOriginal31044fa10f8d24c18a32448d6a478192; ?>
<?php unset($__componentOriginal31044fa10f8d24c18a32448d6a478192); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\holan\OneDrive\Documentos\EV1-laravel-atomic-design\EV1-laravel\resources\views/auth/login.blade.php ENDPATH**/ ?>