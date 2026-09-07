<?php $__env->startSection('title', 'Registro de Usuario'); ?>

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal62af10353eb31f79a9ae18c8f9ad4d4e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal62af10353eb31f79a9ae18c8f9ad4d4e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.organisms.register-form','data' => ['errors' => $errors ?? null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('organisms.register-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors ?? null)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal62af10353eb31f79a9ae18c8f9ad4d4e)): ?>
<?php $attributes = $__attributesOriginal62af10353eb31f79a9ae18c8f9ad4d4e; ?>
<?php unset($__attributesOriginal62af10353eb31f79a9ae18c8f9ad4d4e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal62af10353eb31f79a9ae18c8f9ad4d4e)): ?>
<?php $component = $__componentOriginal62af10353eb31f79a9ae18c8f9ad4d4e; ?>
<?php unset($__componentOriginal62af10353eb31f79a9ae18c8f9ad4d4e); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\holan\OneDrive\Documentos\EV1-laravel-atomic-design\EV1-laravel\resources\views/auth/register.blade.php ENDPATH**/ ?>