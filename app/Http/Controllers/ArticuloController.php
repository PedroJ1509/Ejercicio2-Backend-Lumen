<?php

namespace App\Http\Controllers;

use App\Models\Articulo; // Asegúrate de importar tu modelo
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    // Método para obtener todos los usuarios
    public function getAllArticulo()
    {
        $articulos = Articulo:: where('Articulo_Status', 1)-> get();  // Esto obtiene todos los usuarios de la tabla
        return response()->json($articulos);  // Retorna los datos en formato JSON
    }
    public function getArticulo($id)
    {
        // Buscar la unidad por ID
        $articulo = Articulo::find($id);

        // Verificar si la unidad fue encontrada
        if (!$articulo) {
            return response()->json(['error' => 'Articulo no encontrado'], 404);
        }

        // Retornar la unidad en formato JSON
        return response()->json($articulo);
    }
}