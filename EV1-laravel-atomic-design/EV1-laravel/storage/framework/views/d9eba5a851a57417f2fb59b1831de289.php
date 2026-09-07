<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['label', 'name', 'type' => 'text']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['label', 'name', 'type' => 'text']); ?>
<?php foreach (array_filter((['label', 'name', 'type' => 'text']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="molecule-field">
    <?php if (isset($component)) { $__componentOriginal20aa0a63a7e54f7910e943ea6e6acae5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal20aa0a63a7e54f7910e943ea6e6acae5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.label','data' => ['for' => $name]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('atoms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name)]); ?><?php echo e($label); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal20aa0a63a7e54f7910e943ea6e6acae5)): ?>
<?php $attributes = $__attributesOriginal20aa0a63a7e54f7910e943ea6e6acae5; ?>
<?php unset($__attributesOriginal20aa0a63a7e54f7910e943ea6e6acae5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal20aa0a63a7e54f7910e943ea6e6acae5)): ?>
<?php $component = $__componentOriginal20aa0a63a7e54f7910e943ea6e6acae5; ?>
<?php unset($__componentOriginal20aa0a63a7e54f7910e943ea6e6acae5); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginala7ad5a6e359798f829f48ad8e292a778 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala7ad5a6e359798f829f48ad8e292a778 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.input','data' => ['type' => $type,'name' => $name]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('atoms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($type),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala7ad5a6e359798f829f48ad8e292a778)): ?>
<?php $attributes = $__attributesOriginala7ad5a6e359798f829f48ad8e292a778; ?>
<?php unset($__attributesOriginala7ad5a6e359798f829f48ad8e292a778); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala7ad5a6e359798f829f48ad8e292a778)): ?>
<?php $component = $__componentOriginala7ad5a6e359798f829f48ad8e292a778; ?>
<?php unset($__componentOriginala7ad5a6e359798f829f48ad8e292a778); ?>
<?php endif; ?>
</div>
<?php /**PATH C:\Users\holan\OneDrive\Documentos\EV1-laravel-atomic-design\EV1-laravel\resources\views/components/molecules/form-field.blade.php ENDPATH**/ ?>