<?php

namespace App\Http\Controllers;

use App\Models\clienteModelo;
use App\Models\Login;
use Hash;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Validator;
 // Asegúrate de importar Hash

class LoginController extends Controller
{
    // Método para iniciar sesión
    public function login(Request $request)
    {
        // Validación de los datos de entrada
        $validacion = Validator::make($request->all(), [
            'clie_correo' => 'required|email',
            'contrasena' => 'required|min:2|max:40'
        ]);

        // Si la validación falla, retornamos los errores
        if ($validacion->fails()) {
            $data = [
                'message' => 'Error en la validación de datos',
                'errors' => $validacion->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }

        $clie_correo = $request->clie_correo;
        $contrasena = $request->contrasena;

        // Buscar al cliente por correo
        $cliente = Login::where('clie_correo', $clie_correo)->first();


        // Verificar si el cliente existe y si la contraseña es válida
        if (!$cliente && !$request -> contrasena === $contrasena) {
            $data = [
                'message' => 'Cliente No Encontrado!',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        // Generar el token JWT
        $token = JWTAuth::fromUser($cliente);

        // Retornar la respuesta con el token y la información del cliente
        $data = [
            'message' => 'Inicio de sesión correcto',
            'token' => $token,
            'cliente' => $cliente,
            'status' => 200
        ];
        return response()->json($data, 200);
    }
}


