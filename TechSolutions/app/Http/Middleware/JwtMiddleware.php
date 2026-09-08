<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Firebase\JWT\ExpiredException;
use Firebase\JWT\SignatureInvalidException;
use App\Models\Usuario;

class JwtMiddleware
{
    /**
     * Valida si el usuario está autenticado mediante un JWT
     * enviado en el header: Authorization: Bearer <token>
     */
    public function handle(Request $request, Closure $next)
    {
        $authHeader = $request->header('Authorization');

        if (!$authHeader || !str_starts_with($authHeader, 'Bearer ')) {
            return response()->json([
                'success' => false,
                'message' => 'Token no proporcionado. Acceso no autorizado.',
            ], 401);
        }

        $token = substr($authHeader, 7); // quita "Bearer "

        try {
            $secret = env('JWT_SECRET');
            $decoded = JWT::decode($token, new Key($secret, 'HS256'));

            $usuario = Usuario::find($decoded->sub);

            if (!$usuario) {
                return response()->json([
                    'success' => false,
                    'message' => 'Usuario no encontrado.',
                ], 401);
            }

            // Adjuntamos el usuario autenticado al request para usarlo en el controlador
            $request->merge(['usuario_autenticado' => $usuario]);

        } catch (ExpiredException $e) {
            return response()->json([
                'success' => false,
                'message' => 'El token ha expirado.',
            ], 401);
        } catch (SignatureInvalidException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Firma del token inválida.',
            ], 401);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Token inválido.',
            ], 401);
        }

        return $next($request);
    }
}
