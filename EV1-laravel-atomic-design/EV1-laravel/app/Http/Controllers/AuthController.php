<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class AuthController extends Controller
{
    /**
     * Muestra el formulario/vista de Registro
     */
    public function showRegister()
    {
        return view('auth.register');
    }

    /**
     * Muestra el formulario/vista de Inicio de Sesión
     */
    public function showLogin()
    {
        return view('auth.login');
    }

    /**
     * Función de Registro de Usuario
     * - Valida los datos
     * - Cifra la clave (bcrypt vía Hash::make)
     * - Crea el usuario
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|unique:usuarios,correo',
            'clave'  => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return $this->responder($request, [
                'success' => false,
                'errors' => $validator->errors(),
            ], 422, 'auth.register', ['errors' => $validator->errors()]);
        }

        $usuario = Usuario::create([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            // Cifrado de la clave según requerimiento
            'clave'  => Hash::make($request->clave),
        ]);

        $data = [
            'success' => true,
            'message' => 'Usuario registrado correctamente',
            'usuario' => $usuario,
        ];

        return $this->responder($request, $data, 201, 'auth.register-success', $data);
    }

    /**
     * Función de Inicio de Sesión
     * - Valida credenciales
     * - Si son correctas, genera y devuelve un JWT
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'correo' => 'required|email',
            'clave'  => 'required|string',
        ]);

        if ($validator->fails()) {
            return $this->responder($request, [
                'success' => false,
                'errors' => $validator->errors(),
            ], 422, 'auth.login', ['errors' => $validator->errors()]);
        }

        $usuario = Usuario::where('correo', $request->correo)->first();

        if (!$usuario || !Hash::check($request->clave, $usuario->clave)) {
            return $this->responder($request, [
                'success' => false,
                'message' => 'Credenciales inválidas',
            ], 401, 'auth.login', ['error' => 'Credenciales inválidas']);
        }

        $token = $this->generarJWT($usuario);

        $data = [
            'success' => true,
            'message' => 'Inicio de sesión exitoso',
            'token' => $token,
            'usuario' => $usuario,
        ];

        return $this->responder($request, $data, 200, 'auth.login-success', $data);
    }

    /**
     * Genera un JWT firmado con la información del usuario
     */
    private function generarJWT(Usuario $usuario): string
    {
        $secret = env('JWT_SECRET');
        $expira = (int) env('JWT_EXPIRE_SECONDS', 3600);
        $ahora = time();

        $payload = [
            'iss' => config('app.url'),
            'sub' => $usuario->id,
            'correo' => $usuario->correo,
            'iat' => $ahora,
            'exp' => $ahora + $expira,
        ];

        return JWT::encode($payload, $secret, 'HS256');
    }

    /**
     * Responde en JSON si es petición de API, o con una vista si es web.
     */
    private function responder(Request $request, array $jsonData, int $status, string $view, array $viewData)
    {
        if ($request->wantsJson() || $request->is('api/*')) {
            return response()->json($jsonData, $status);
        }

        return view($view, $viewData);
    }
}
