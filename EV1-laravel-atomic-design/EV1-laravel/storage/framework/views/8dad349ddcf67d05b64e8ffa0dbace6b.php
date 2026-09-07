<?php $__env->startSection('title', 'Sesión iniciada'); ?>

<?php $__env->startSection('content'); ?>
    <h2>¡Bienvenido, <?php echo e($usuario->nombre); ?>!</h2>

    <div class="msg-success">Inicio de sesión exitoso.</div>

    <label>Tu token JWT:</label>
    <pre><?php echo e($token); ?></pre>

    <div class="link">
        <a href="<?php echo e(route('login')); ?>">Volver</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\matia\EV1-laravel\resources\views/auth/login-success.blade.php ENDPATH**/ ?>