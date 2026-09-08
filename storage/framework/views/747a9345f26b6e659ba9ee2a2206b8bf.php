<?php $__env->startSection('title', 'Inicio de Sesión'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Inicio de Sesión</h2>

    <?php if(isset($error)): ?>
        <div class="msg-error"><?php echo e($error); ?></div>
    <?php endif; ?>

    <?php if(isset($errors)): ?>
        <div class="msg-error">
            <ul style="margin:0; padding-left:18px;">
                <?php $__currentLoopData = $errors->all() ?? $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e(is_array($err) ? $err[0] : $err); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>
        <label>Correo</label>
        <input type="email" name="correo" required>

        <label>Clave</label>
        <input type="password" name="clave" required>

        <button type="submit">Ingresar</button>
    </form>

    <div class="link">
        ¿No tienes cuenta? <a href="<?php echo e(route('register')); ?>">Regístrate</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\matia\EV1-laravel\resources\views/auth/login.blade.php ENDPATH**/ ?>