<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProyectoController;

/*
|--------------------------------------------------------------------------
| Rutas API
|--------------------------------------------------------------------------
*/

// Rutas públicas de autenticación
Route::post('/register', [AuthController::class, 'register']); // Registro de Usuario
Route::post('/login', [AuthController::class, 'login']);       // Inicio de Sesión de Usuario

// Rutas protegidas: requieren JWT válido (middleware jwt.auth)
Route::middleware('jwt.auth')->group(function () {
    Route::get('/proyectos', [ProyectoController::class, 'index']);
    Route::post('/proyectos', [ProyectoController::class, 'store']);
    Route::get('/proyectos/{id}', [ProyectoController::class, 'show']);
    Route::put('/proyectos/{id}', [ProyectoController::class, 'update']);
    Route::delete('/proyectos/{id}', [ProyectoController::class, 'destroy']);
});
