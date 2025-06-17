<?php
namespace App\Http\Controllers;

use App\Models\adminModelo;
use Illuminate\Support\Facades\Hash;
use App\Models\loginAdmin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

// Renombrar la clase para que siga el estándar de PascalCase
class LoginAdminController extends Controller
{
    // Método para iniciar sesión
    public function loginAdmin1(Request $request)
    {
        $response = null;
        $statusCode = null;

        // Validación de los datos de entrada
        $validacion = Validator::make($request->all(), [
            'admi_correo' => 'required|email',
            'admi_contrasena' => 'required|min:2|max:100'
        ]);

        // Si la validación falla, retornamos los errores
        if ($validacion->fails()) {
            $response = [
                'message' => 'Error en la validación de datos',
                'errors' => $validacion->errors(),
                'status' => 400
            ];
            $statusCode = 400;
        } else {
            $admi_correo = $request->admi_correo;
            $admi_contrasena = $request->admi_contrasena;
            // Buscar al cliente por correo
            $admi = loginAdmin::where('admi_correo', $admi_correo)->first();
            // Verificar si el cliente existe
            if (!$admi) {
                $response = [
                    'message' => 'Administrador No Encontrado!',
                    'status' => 404
                ];
                $statusCode = 404;
            } elseif (!Hash::check($admi_contrasena, $admi->admi_contrasena)) {
                $response = [
                    'message' => 'Contraseña incorrecta!',
                    'status' => 401
                ];
                $statusCode = 401;
            } else {
                // Generar el token JWT
                $token = JWTAuth::fromUser($admi);
                // Retornar la respuesta con el token y la información del cliente
                $response = [
                    'message' => 'Inicio de sesión correcto',
                    'token' => $token,
                    'administrador' => $admi,
                    'status' => 200
                ];
                $statusCode = 200;
            }
        }

        return response()->json($response, $statusCode);
    }
}


