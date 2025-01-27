<?php

namespace App\Http\Controllers;

use App\Models\Usuario; // Asegúrate de importar tu modelo
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    // Método para obtener todos los usuarios
    public function getAllUsuario()
    {
        $usuarios = Usuario::all();  // Esto obtiene todos los usuarios de la tabla
        return response()->json($usuarios);  // Retorna los datos en formato JSON
    }
    public function getUsuario($user)
    {
        // Buscar la unidad por ID
        $usuario = Usuario::where('Usuario_DescID',$user)->
                            where('Activo', true)-> first();

        // Verificar si la unidad fue encontrada
        if (!$usuario) {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }

        // Retornar la unidad en formato JSON
        return response()->json($usuario);
    }
}