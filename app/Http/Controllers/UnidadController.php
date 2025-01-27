<?php

namespace App\Http\Controllers;

use App\Models\Unidad; // Asegúrate de importar tu modelo
use Illuminate\Http\Request;

class UnidadController extends Controller
{
    // Método para obtener todos los usuarios
    public function getAllUnidad()
    {
        $unidades = Unidad::all();  // Esto obtiene todos los usuarios de la tabla
        return response()->json($unidades);  // Retorna los datos en formato JSON
    }
    public function getUnidad($id)
    {
        // Buscar la unidad por ID
        $unidad = Unidad::find($id);

        // Verificar si la unidad fue encontrada
        if (!$unidad) {
            return response()->json(['error' => 'Unidad no encontrada'], 404);
        }

        // Retornar la unidad en formato JSON
        return response()->json($unidad);
    }
}