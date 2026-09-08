<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['usuario']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['usuario']); ?>
<?php foreach (array_filter((['usuario']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="flex items-center justify-center min-h-[80vh] px-4">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl border border-gray-100 p-8 space-y-6">
        
        <!-- Encabezado con Icono -->
        <div class="text-center space-y-2">
            <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-indigo-100 text-indigo-600 mb-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                </svg>
            </div>
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">¡Registro exitoso!</h2>
            <p class="text-sm text-gray-500">Tu cuenta ha sido creada correctamente.</p>
        </div>

        <!-- Mensaje de Éxito -->
        <?php if (isset($component)) { $__componentOriginald9bff49d43330398029cdfcac4f0453e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald9bff49d43330398029cdfcac4f0453e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.molecules.success-message','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.success-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            El usuario <strong class="font-semibold text-gray-900"><?php echo e($usuario->nombre); ?></strong> fue registrado correctamente.
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald9bff49d43330398029cdfcac4f0453e)): ?>
<?php $attributes = $__attributesOriginald9bff49d43330398029cdfcac4f0453e; ?>
<?php unset($__attributesOriginald9bff49d43330398029cdfcac4f0453e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald9bff49d43330398029cdfcac4f0453e)): ?>
<?php $component = $__componentOriginald9bff49d43330398029cdfcac4f0453e; ?>
<?php unset($__componentOriginald9bff49d43330398029cdfcac4f0453e); ?>
<?php endif; ?>

        <!-- Información del Usuario -->
        <div class="bg-gray-50 rounded-xl p-4 border border-gray-100 space-y-2 text-sm">
            <div class="flex justify-between">
                <span class="text-gray-500 font-medium">Correo:</span>
                <span class="text-gray-900 font-semibold"><?php echo e($usuario->correo); ?></span>
            </div>
        </div>

        <!-- Enlace de Acción -->
        <div class="pt-2 text-center">
            <?php if (isset($component)) { $__componentOriginal43c4f96eed98895dc00b871e8e014e3c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal43c4f96eed98895dc00b871e8e014e3c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.link','data' => ['href' => route('login'),'class' => 'w-full inline-flex justify-center items-center bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 px-4 rounded-lg shadow-sm transition-all duration-200']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('atoms.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('login')),'class' => 'w-full inline-flex justify-center items-center bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 px-4 rounded-lg shadow-sm transition-all duration-200']); ?>
                Ir a Inicio de Sesión
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
        </div>

    </div>
</div><?php /**PATH C:\Users\holan\Downloads\TechSolutions\TechSolutions\resources\views/components/organisms/register-success.blade.php ENDPATH**/ ?>