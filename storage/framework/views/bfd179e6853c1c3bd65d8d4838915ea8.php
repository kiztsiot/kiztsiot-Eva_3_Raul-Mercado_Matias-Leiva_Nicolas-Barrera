<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['type' => 'submit', 'variant' => 'primary']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['type' => 'submit', 'variant' => 'primary']); ?>
<?php foreach (array_filter((['type' => 'submit', 'variant' => 'primary']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $baseClasses = "w-full inline-flex justify-center items-center px-4 py-2.5 rounded-xl font-medium text-sm shadow-sm transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2";
    
    $variants = [
        'primary' => "bg-indigo-600 hover:bg-indigo-700 text-white focus:ring-indigo-500",
        'secondary' => "bg-white hover:bg-gray-50 text-gray-700 border border-gray-300 focus:ring-indigo-500",
        'danger' => "bg-red-600 hover:bg-red-700 text-white focus:ring-red-500",
    ];

    $classes = $variants[$variant] ?? $variants['primary'];
?>

<button type="<?php echo e($type); ?>" <?php echo e($attributes->merge(['class' => "$baseClasses $classes"])); ?>>
    <?php echo e($slot); ?>

</button><?php /**PATH C:\Users\holan\Downloads\TechSolutions\TechSolutions\resources\views/components/atoms/button.blade.php ENDPATH**/ ?>