<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['type' => 'text', 'name', 'id' => null, 'required' => true]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['type' => 'text', 'name', 'id' => null, 'required' => true]); ?>
<?php foreach (array_filter((['type' => 'text', 'name', 'id' => null, 'required' => true]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<input
    type="<?php echo e($type); ?>"
    name="<?php echo e($name); ?>"
    id="<?php echo e($id ?? $name); ?>"
    <?php echo e($required ? 'required' : ''); ?>

    <?php echo e($attributes->merge(['class' => 'w-full px-4 py-2.5 text-sm bg-white border border-gray-300 rounded-xl shadow-sm placeholder-gray-400 text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200'])); ?>

><?php /**PATH C:\Users\matia\OneDrive\TechSolutions\TechSolutions\resources\views/components/atoms/input.blade.php ENDPATH**/ ?>