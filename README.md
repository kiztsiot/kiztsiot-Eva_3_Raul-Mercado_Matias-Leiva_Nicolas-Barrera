# EV1 - Sistema de Gestión de Proyectos (Tech Solutions)

Proyecto Laravel para la Evaluación Sumativa Unidad 2 - Desarrollo de Software Web I.

## Contenido implementado

- ✅ Conexión y configuración de BD (Eloquent ORM) vía `.env`
- ✅ Rutas API: Registro (`POST /api/register`) e Inicio de Sesión (`POST /api/login`)
- ✅ Controlador `AuthController`: registro con clave cifrada (bcrypt) y login que devuelve JWT
- ✅ Modelos `Usuario` y `Proyecto` (con `created_by`)
- ✅ Vistas con estilos básicos: Login y Registro (`resources/views/auth/`)
- ✅ Middleware `JwtMiddleware` (`jwt.auth`) que valida el token en rutas protegidas

## Instalación (IMPORTANTE: hacer esto antes de entregar/ejecutar)

Este .zip contiene el **código fuente**. Como no incluye `vendor/` (dependencias),
debes instalar Laravel y las librerías antes de correrlo:

```bash
# 1. Crear un proyecto Laravel limpio (o usar este código dentro de uno)
composer create-project laravel/laravel temp-laravel
# copiar/pegar los archivos de este zip dentro de temp-laravel (sobrescribiendo)

# 2. Instalar dependencias, incluida la librería JWT
cd temp-laravel
composer require firebase/php-jwt

# 3. Generar la key de la app
php artisan key:generate

# 4. Configurar la base de datos en MySQL
mysql -u root -p
CREATE DATABASE desarrollo_software_1;

# 5. Ejecutar migraciones
php artisan migrate

# 6. Registrar el middleware jwt.auth en app/Http/Kernel.php
#    (ya viene definido en el archivo Kernel.php incluido, verifica que
#    tu Kernel.php final del proyecto tenga el alias 'jwt.auth')

# 7. Levantar el servidor
php artisan serve
```

## Probar la API

### Registro
```bash
curl -X POST http://localhost:8000/api/register \
  -H "Content-Type: application/json" \
  -d '{"nombre":"Juan Perez","correo":"juan@test.com","clave":"123456"}'
```

### Login (devuelve JWT)
```bash
curl -X POST http://localhost:8000/api/login \
  -H "Content-Type: application/json" \
  -d '{"correo":"juan@test.com","clave":"123456"}'
```

### Ruta protegida (usar el token del login)
```bash
curl -X GET http://localhost:8000/api/proyectos \
  -H "Authorization: Bearer TU_TOKEN_AQUI"
```

## Probar las vistas (navegador)

- http://localhost:8000/register
- http://localhost:8000/login

## Estructura de archivos

```
app/
  Http/
    Controllers/
      AuthController.php      -> registro + login (JWT)
      ProyectoController.php  -> CRUD protegido de proyectos
      Controller.php
    Middleware/
      JwtMiddleware.php       -> valida JWT (alias: jwt.auth)
    Kernel.php
  Models/
    Usuario.php
    Proyecto.php
database/
  migrations/
    2024_01_01_000001_create_usuarios_table.php
    2024_01_01_000002_create_proyectos_table.php
routes/
  api.php
  web.php
resources/
  views/
    layouts/app.blade.php
    auth/login.blade.php
    auth/register.blade.php
    auth/login-success.blade.php
    auth/register-success.blade.php
.env
composer.json
```

## Antes de entregar

Recuerda comprimir esta carpeta y renombrar el archivo final como:
**EV1.nombre.apellido.zip**
