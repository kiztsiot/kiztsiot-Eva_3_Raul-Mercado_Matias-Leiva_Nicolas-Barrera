<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProyectoController extends Controller
{
    // Lista todos los proyectos
    public function index(Request $request)
    {
        return response()->json(Proyecto::with('usuario')->get(), 200);
    }

    // Crea un nuevo proyecto asociado al usuario autenticado (created_by)
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'fecha_inicio' => 'required|date',
            'estado' => 'required|string',
            'responsable' => 'required|string',
            'monto' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
        }

        $usuarioAutenticado = $request->usuario_autenticado;

        $proyecto = Proyecto::create([
            'nombre' => $request->nombre,
            'fecha_inicio' => $request->fecha_inicio,
            'estado' => $request->estado,
            'responsable' => $request->responsable,
            'monto' => $request->monto,
            'created_by' => $usuarioAutenticado->id,
        ]);

        return response()->json(['success' => true, 'proyecto' => $proyecto], 201);
    }

    public function show($id)
    {
        $proyecto = Proyecto::with('usuario')->find($id);
        if(!$proyecto) {
            return response()->json(['success' => false, 'message' => 'Proyecto no encontrado'], 404);
        }
        return response()->json(['success' => true, 'proyecto' => $proyecto], 200);
    }

    public function update(Request $request, $id)
    {
        $proyecto = Proyecto::find($id);
        if(!$proyecto) {
            return response()->json(['success' => false, 'message' => 'Proyecto no encontrado'], 404);
        }

        $validator = Validator::make($request->all(), [
            'nombre' => 'string|max:255',
            'fecha_inicio' => 'date',
            'estado' => 'string',
            'responsable' => 'string',
            'monto' => 'numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
        }

        $proyecto->update($request->only([
            'nombre', 'fecha_inicio', 'estado', 'responsable', 'monto'
        ]));

        return response()->json(['success' => true, 'proyecto' => $proyecto], 200);
    }

    public function destroy($id)
    {
        $proyecto = Proyecto::find($id);
        if(!$proyecto) {
            return response()->json(['success' => false, 'message' => 'Proyecto no encontrado'], 404);
        }
        $proyecto->delete();
        return response()->json(['success' => true, 'message' => 'Proyecto eliminado'], 204);
    }
}
