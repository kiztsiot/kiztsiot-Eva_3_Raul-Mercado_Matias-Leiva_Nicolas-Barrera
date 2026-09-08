<!DOCTYPE html>
<html lang="es" class="h-full bg-gray-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Tech Solutions'); ?></title>
<!--ESTE PROYECTO FUE DESARROLLADO POR RAUL MERCADO, NICOLAS BARRERA & MATIAS LEIVA-->
    
    <!-- Tailwind CSS -->
   <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">

</head>
<body class="h-full font-sans antialiased text-gray-900 bg-gray-50 flex flex-col justify-start py-8 sm:px-6 lg:px-8">
    
    <div class="w-full max-w-7xl mx-auto">
        <h1 class="text-center text-xl font-bold tracking-tight text-indigo-600 mb-2">Tech Solutions</h1>
    </div>

    <div class="mt-2 w-full max-w-7xl mx-auto">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- --- Átomos --- -->
    <!-- --- Moléculas --- -->
    <!-- --- Organismos --- -->
</body>
</html><?php /**PATH C:\Users\matia\OneDrive\TechSolutions\TechSolutions\resources\views/layouts/app.blade.php ENDPATH**/ ?>