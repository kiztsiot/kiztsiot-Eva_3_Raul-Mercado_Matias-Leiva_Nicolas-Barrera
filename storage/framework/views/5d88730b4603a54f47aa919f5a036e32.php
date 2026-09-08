<?php $__env->startSection('title', 'Registro exitoso'); ?>

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal2b7ab5b3f4e333e86781ed02d2ad4ac1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2b7ab5b3f4e333e86781ed02d2ad4ac1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.organisms.register-success','data' => ['usuario' => $usuario]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('organisms.register-success'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['usuario' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($usuario)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2b7ab5b3f4e333e86781ed02d2ad4ac1)): ?>
<?php $attributes = $__attributesOriginal2b7ab5b3f4e333e86781ed02d2ad4ac1; ?>
<?php unset($__attributesOriginal2b7ab5b3f4e333e86781ed02d2ad4ac1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2b7ab5b3f4e333e86781ed02d2ad4ac1)): ?>
<?php $component = $__componentOriginal2b7ab5b3f4e333e86781ed02d2ad4ac1; ?>
<?php unset($__componentOriginal2b7ab5b3f4e333e86781ed02d2ad4ac1); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\holan\OneDrive\Documentos\EV1-laravel-atomic-design\EV1-laravel\resources\views/auth/register-success.blade.php ENDPATH**/ ?>