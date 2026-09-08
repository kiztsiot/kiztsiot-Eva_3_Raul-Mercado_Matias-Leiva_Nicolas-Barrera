<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['type' => 'button', 'variant' => 'primary']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['type' => 'button', 'variant' => 'primary']); ?>
<?php foreach (array_filter((['type' => 'button', 'variant' => 'primary']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $base = "inline-flex items-center justify-center px-4 py-2 rounded-xl text-sm font-medium shadow-sm transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2";
    $variants = [
        'primary' => "bg-indigo-600 hover:bg-indigo-700 text-white focus:ring-indigo-500",
        'danger' => "bg-red-600 hover:bg-red-700 text-white focus:ring-red-500",
        'secondary' => "bg-white hover:bg-gray-50 text-gray-700 border border-gray-300 focus:ring-indigo-500",
    ];
    $class = $variants[$variant] ?? $variants['primary'];
?>

<button type="<?php echo e($type); ?>" <?php echo e($attributes->merge(['class' => "$base $class"])); ?>>
    <?php echo e($slot); ?>

</button><?php /**PATH C:\Users\matia\OneDrive\TechSolutions\TechSolutions\resources\views/components/atoms/action-button.blade.php ENDPATH**/ ?>