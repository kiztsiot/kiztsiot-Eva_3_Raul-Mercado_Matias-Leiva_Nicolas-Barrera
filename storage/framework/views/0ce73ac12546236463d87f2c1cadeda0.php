<?php $__env->startSection('title', 'Registro de Usuario'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Registro de Usuario</h2>

    <?php if(isset($errors)): ?>
        <div class="msg-error">
            <ul style="margin:0; padding-left:18px;">
                <?php $__currentLoopData = $errors->all() ?? $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e(is_array($error) ? $error[0] : $error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('register')); ?>">
        <?php echo csrf_field(); ?>
        <label>Nombre</label>
        <input type="text" name="nombre" required>

        <label>Correo</label>
        <input type="email" name="correo" required>

        <label>Clave</label>
        <input type="password" name="clave" required>

        <button type="submit">Registrarse</button>
    </form>

    <div class="link">
        ¿Ya tienes cuenta? <a href="<?php echo e(route('login')); ?>">Inicia sesión</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\matia\EV1-laravel\resources\views/auth/register.blade.php ENDPATH**/ ?>