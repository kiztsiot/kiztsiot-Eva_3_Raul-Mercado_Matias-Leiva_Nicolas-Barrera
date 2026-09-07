<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Tech Solutions')</title>
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

        /* --- Átomos --- */
        .atom-label { font-weight: bold; font-size: 14px; color: #333; }
        .atom-input {
            width: 100%;
            padding: 10px;
            margin: 6px 0 16px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        .atom-btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            color: #fff;
        }
        .atom-btn--primary { background: #1a2b47; }
        .atom-btn--primary:hover { background: #d4af37; }
        .atom-alert { padding: 10px; border-radius: 6px; margin-bottom: 14px; }
        .atom-alert--success { color: #1a7a3c; background: #e7f7ec; }
        .atom-alert--error { color: #a71d2a; background: #fdeceb; }
        .atom-link { color: #1a2b47; }

        /* --- Moléculas --- */
        .molecule-field { display: flex; flex-direction: column; }
        .molecule-link { text-align: center; margin-top: 14px; font-size: 14px; }

        pre { background:#f4f5f7; padding:10px; border-radius:6px; overflow-x:auto; font-size:12px; }
    </style>
</head>
<body>
    <div class="card">
        @yield('content')
    </div>
</body>
</html>
