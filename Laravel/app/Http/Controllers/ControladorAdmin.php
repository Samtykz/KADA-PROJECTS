<?php
namespace App\Http\Controllers;

use App\Models\adminModelo;
use Illuminate\Support\Facades\Hash;
use App\Models\LoginAdmin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ControladorAdmin extends Controller
{
    // Definir constantes para las reglas de validación reutilizadas
    private const RULE_REQUIRED_MIN2_MAX12 = 'required|min:2|max:12';
    private const RULE_REQUIRED_MIN2_MAX40 = 'required|min:2|max:40';
    private const RULE_REQUIRED_MIN2_MAX60 = 'required|min:2|max:60';

    public function index()
    {
        $admi = LoginAdmin::all();
        if ($admi->isEmpty()) {
            return response()->json([
                'message' => 'No hay administradores registrados',
                'status' => 200
            ], 200);
        }
        return response()->json($admi, 200);
    }

    public function store(Request $request)
    {
        $validacion = Validator::make($request->all(), [
            'admi_Codigo_PK' => self::RULE_REQUIRED_MIN2_MAX12,
            'admi_nombre' => self::RULE_REQUIRED_MIN2_MAX40,
            'admi_apellido' => self::RULE_REQUIRED_MIN2_MAX40,
            'admi_telefono' => self::RULE_REQUIRED_MIN2_MAX12,
            'admi_direccion' => self::RULE_REQUIRED_MIN2_MAX60,
            'admi_correo' => 'required|email',
            'admi_contrasena' => 'required|string|min:6',
        ]);
        if ($validacion->fails()) {
            return response()->json([
                'message' => 'Error en la validación del Administrador',
                'errors' => $validacion->errors(),
                'status' => 400
            ], 400);
        }

        $admi = new LoginAdmin();
        $admi->admi_Codigo_PK = $request->admi_Codigo_PK;
        $admi->admi_nombre = $request->admi_nombre;
        $admi->admi_apellido = $request->admi_apellido;
        $admi->admi_telefono = $request->admi_telefono;
        $admi->admi_direccion = $request->admi_direccion;
        $admi->admi_correo = $request->admi_correo;
        $admi->admi_contrasena = Hash::make($request->admi_contrasena);
        $admi->save();

        return response()->json([
            'message' => 'Administrador registrado',
            'administrador' => $admi,
            'status' => 201
        ], 201);
    }

    public function update(Request $request, $admi_Codigo_PK)
    {
        $admi = LoginAdmin::find($admi_Codigo_PK);
        if (!$admi) {
            return response()->json([
                'message' => 'El administrador no existe',
                'status' => 404
            ], 404);
        }

        $validacion = Validator::make($request->all(), [
            'admi_Codigo_PK' => self::RULE_REQUIRED_MIN2_MAX12,
            'admi_nombre' => self::RULE_REQUIRED_MIN2_MAX40,
            'admi_apellido' => self::RULE_REQUIRED_MIN2_MAX40,
            'admi_telefono' => self::RULE_REQUIRED_MIN2_MAX12,
            'admi_direccion' => self::RULE_REQUIRED_MIN2_MAX60,
            'admi_correo' => 'required|email',
            'admi_contrasena' => 'required|string|min:6',
        ]);
        if ($validacion->fails()) {
            return response()->json([
                'message' => 'Error en la validación de datos',
                'errors' => $validacion->errors(),
                'status' => 400
            ], 400);
        }

        $admi->admi_Codigo_PK = $request->admi_Codigo_PK;
        $admi->admi_nombre = $request->admi_nombre;
        $admi->admi_apellido = $request->admi_apellido;
        $admi->admi_telefono = $request->admi_telefono;
        $admi->admi_direccion = $request->admi_direccion;
        $admi->admi_correo = $request->admi_correo;
        $admi->admi_contrasena = Hash::make($request->admi_contrasena);
        $admi->save();
        return response()->json([
            'message' => 'Administrador modificado',
            'administrador' => $admi,
            'status' => 200
        ], 200);
    }

    public function destroy($admi_Codigo_PK)
    {
        $admi = LoginAdmin::find($admi_Codigo_PK);
        if (!$admi) {
            return response()->json([
                'message' => 'El administrador no existe',
                'status' => 404
            ], 404);
        }
        $admi->delete();
        return response()->json([
            'message' => 'Administrador eliminado',
            'status' => 200
        ], 200);
    }
}
