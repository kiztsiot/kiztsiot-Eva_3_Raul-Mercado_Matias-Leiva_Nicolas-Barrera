<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['errors' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['errors' => null]); ?>
<?php foreach (array_filter((['errors' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if($errors): ?>
    <?php if (isset($component)) { $__componentOriginale46f6868b20c02211a27868424e8d71a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale46f6868b20c02211a27868424e8d71a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.alert','data' => ['variant' => 'error']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('atoms.alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'error']); ?>
        <ul style="margin:0; padding-left:18px;">
            <?php $__currentLoopData = $errors->all() ?? $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e(is_array($err) ? $err[0] : $err); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale46f6868b20c02211a27868424e8d71a)): ?>
<?php $attributes = $__attributesOriginale46f6868b20c02211a27868424e8d71a; ?>
<?php unset($__attributesOriginale46f6868b20c02211a27868424e8d71a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale46f6868b20c02211a27868424e8d71a)): ?>
<?php $component = $__componentOriginale46f6868b20c02211a27868424e8d71a; ?>
<?php unset($__componentOriginale46f6868b20c02211a27868424e8d71a); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\Users\holan\OneDrive\Documentos\EV1-laravel-atomic-design\EV1-laravel\resources\views/components/molecules/error-list.blade.php ENDPATH**/ ?>