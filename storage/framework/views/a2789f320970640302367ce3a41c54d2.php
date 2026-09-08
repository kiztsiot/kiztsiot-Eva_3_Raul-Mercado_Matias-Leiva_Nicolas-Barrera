<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['variant' => 'error']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['variant' => 'error']); ?>
<?php foreach (array_filter((['variant' => 'error']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $classes = match ($variant) {
        'success' => 'bg-green-50 border-green-200 text-green-800',
        'error'   => 'bg-red-50 border-red-200 text-red-800',
        default   => 'bg-blue-50 border-blue-200 text-blue-800',
    };
?>

<div <?php echo e($attributes->merge(['class' => "p-4 rounded-xl border text-sm flex items-start space-x-3 {$classes}"])); ?>>
    <div class="flex-1">
        <?php echo e($slot); ?>

    </div>
</div><?php /**PATH C:\Proyectos\TechSolutions\resources\views/components/atoms/alert.blade.php ENDPATH**/ ?>