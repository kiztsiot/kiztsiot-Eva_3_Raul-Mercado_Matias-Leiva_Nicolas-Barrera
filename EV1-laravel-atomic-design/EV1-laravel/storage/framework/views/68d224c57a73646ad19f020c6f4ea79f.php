<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title', 'Tech Solutions'); ?></title>
    <style>
        * { box-sizing: border-box; }
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f5f7;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .card {
            background: #fff;
            padding: 32px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 380px;
        }
        h2 {
            color: #1a2b47;
            margin-bottom: 20px;
            text-align: center;
        }
        label { font-weight: bold; font-size: 14px; color: #333; }
        input {
            width: 100%;
            padding: 10px;
            margin: 6px 0 16px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #1a2b47;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
        }
        button:hover { background: #d4af37; }
        .msg-success { color: #1a7a3c; background: #e7f7ec; padding: 10px; border-radius: 6px; margin-bottom: 14px; }
        .msg-error { color: #a71d2a; background: #fdeceb; padding: 10px; border-radius: 6px; margin-bottom: 14px; }
        .link { text-align: center; margin-top: 14px; font-size: 14px; }
        a { color: #1a2b47; }
        pre { background:#f4f5f7; padding:10px; border-radius:6px; overflow-x:auto; font-size:12px; }
    </style>
</head>
<body>
    <div class="card">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html>
<?php /**PATH C:\Users\matia\EV1-laravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>