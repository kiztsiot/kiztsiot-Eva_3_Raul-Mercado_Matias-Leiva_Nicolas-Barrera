<?php $__env->startSection('title', 'Registro exitoso'); ?>

<?php $__env->startSection('content'); ?>
    <h2>¡Registro exitoso!</h2>

    <div class="msg-success">
        El usuario <strong><?php echo e($usuario->nombre); ?></strong> fue registrado correctamente.
    </div>

    <p><strong>Correo:</strong> <?php echo e($usuario->correo); ?></p>

    <div class="link">
        <a href="<?php echo e(route('login')); ?>">Ir a Inicio de Sesión</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\matia\EV1-laravel\resources\views/auth/register-success.blade.php ENDPATH**/ ?>