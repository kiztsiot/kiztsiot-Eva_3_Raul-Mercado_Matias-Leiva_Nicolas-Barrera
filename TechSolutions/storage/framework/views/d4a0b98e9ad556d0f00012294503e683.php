<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['question', 'linkText', 'route']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['question', 'linkText', 'route']); ?>
<?php foreach (array_filter((['question', 'linkText', 'route']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="text-sm text-center text-gray-500">
    <?php echo e($question); ?> 
    <?php if (isset($component)) { $__componentOriginal43c4f96eed98895dc00b871e8e014e3c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal43c4f96eed98895dc00b871e8e014e3c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.link','data' => ['href' => route($route),'class' => 'font-medium text-indigo-600 hover:text-indigo-500 transition-colors ml-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('atoms.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route($route)),'class' => 'font-medium text-indigo-600 hover:text-indigo-500 transition-colors ml-1']); ?>
        <?php echo e($linkText); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal43c4f96eed98895dc00b871e8e014e3c)): ?>
<?php $attributes = $__attributesOriginal43c4f96eed98895dc00b871e8e014e3c; ?>
<?php unset($__attributesOriginal43c4f96eed98895dc00b871e8e014e3c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal43c4f96eed98895dc00b871e8e014e3c)): ?>
<?php $component = $__componentOriginal43c4f96eed98895dc00b871e8e014e3c; ?>
<?php unset($__componentOriginal43c4f96eed98895dc00b871e8e014e3c); ?>
<?php endif; ?>
</div><?php /**PATH C:\Proyectos\TechSolutions\resources\views/components/molecules/auth-link.blade.php ENDPATH**/ ?>