

<?php $__env->startSection('title', 'Gestión de Proyectos'); ?>

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal0eb2454b5d46d5a96815b0d03cc1197f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0eb2454b5d46d5a96815b0d03cc1197f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.organisms.project-dashboard','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('organisms.project-dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0eb2454b5d46d5a96815b0d03cc1197f)): ?>
<?php $attributes = $__attributesOriginal0eb2454b5d46d5a96815b0d03cc1197f; ?>
<?php unset($__attributesOriginal0eb2454b5d46d5a96815b0d03cc1197f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0eb2454b5d46d5a96815b0d03cc1197f)): ?>
<?php $component = $__componentOriginal0eb2454b5d46d5a96815b0d03cc1197f; ?>
<?php unset($__componentOriginal0eb2454b5d46d5a96815b0d03cc1197f); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Proyectos\TechSolutions\resources\views/proyectos.blade.php ENDPATH**/ ?>