<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['href']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['href']); ?>
<?php foreach (array_filter((['href']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<a href="<?php echo e($href); ?>" <?php echo e($attributes->merge(['class' => 'font-medium text-indigo-600 hover:text-indigo-500 transition-colors duration-150'])); ?>>
    <?php echo e($slot); ?>

</a><?php /**PATH C:\Users\holan\Downloads\TechSolutions\TechSolutions\resources\views/components/atoms/link.blade.php ENDPATH**/ ?>