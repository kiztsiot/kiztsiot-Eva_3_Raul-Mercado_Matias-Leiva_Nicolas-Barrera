<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['usuario', 'token']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['usuario', 'token']); ?>
<?php foreach (array_filter((['usuario', 'token']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="flex items-center justify-center min-h-[80vh] px-4">
    <div class="w-full max-w-xl bg-white rounded-2xl shadow-xl border border-gray-100 p-8 space-y-6">
        
        <!-- Encabezado de Bienvenida -->
        <div class="text-center space-y-2">
            <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-green-100 text-green-600 mb-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">¡Bienvenido, <?php echo e($usuario->nombre); ?>!</h2>
            <p class="text-sm text-gray-500">Has iniciado sesión correctamente en el sistema.</p>
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
            Inicio de sesión exitoso.
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

        <!-- Contenedor del Token JWT -->
        <div class="space-y-2">
            <?php if (isset($component)) { $__componentOriginal20aa0a63a7e54f7910e943ea6e6acae5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal20aa0a63a7e54f7910e943ea6e6acae5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.atoms.label','data' => ['class' => 'text-xs font-semibold text-gray-600 uppercase tracking-wider']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('atoms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-xs font-semibold text-gray-600 uppercase tracking-wider']); ?>Tu token JWT: <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal20aa0a63a7e54f7910e943ea6e6acae5)): ?>
<?php $attributes = $__attributesOriginal20aa0a63a7e54f7910e943ea6e6acae5; ?>
<?php unset($__attributesOriginal20aa0a63a7e54f7910e943ea6e6acae5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal20aa0a63a7e54f7910e943ea6e6acae5)): ?>
<?php $component = $__componentOriginal20aa0a63a7e54f7910e943ea6e6acae5; ?>
<?php unset($__componentOriginal20aa0a63a7e54f7910e943ea6e6acae5); ?>
<?php endif; ?>
            <div class="bg-gray-900 text-gray-100 p-4 rounded-xl overflow-x-auto shadow-inner border border-gray-800">
                <pre class="text-xs font-mono break-all whitespace-pre-wrap"><?php echo e($token); ?></pre>
            </div>
            <p class="text-xs text-gray-400">Guarda este token para tus peticiones autenticadas a la API.</p>
        </div>

        <!-- Botón o Enlace hacia los Proyectos -->
        <div class="pt-4 border-t border-gray-100 flex flex-col sm:flex-row justify-between items-center gap-3">
            <span class="text-sm text-gray-500">¿Todo listo para comenzar?</span>
            
            <a href="<?php echo e(route('proyectos')); ?>" class="w-full sm:w-auto inline-flex justify-center items-center py-2 px-4 border border-transparent rounded-xl shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors">
                Ver mis proyectos &rarr;
            </a>
        </div>

    </div>
</div>

<!-- SCRIPT PARA GUARDAR EL TOKEN EN EL NAVEGADOR -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const tokenJwt = "<?php echo e($token); ?>";
        if (tokenJwt) {
            localStorage.setItem('jwt_token', tokenJwt);
        }
    });
</script><?php /**PATH C:\Proyectos\TechSolutions\resources\views/components/organisms/login-success.blade.php ENDPATH**/ ?>