<?php
namespace App\Http\Controllers;
use App\Models\adminModelo;
use Illuminate\Support\Facades\Hash;
use App\Models\loginAdmin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ControladorAdmin extends Controller
{
    public function index()
    {
        $admi = loginAdmin::all();
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
            'admi_Codigo_PK' => 'required|min:2|max:12',
            'admi_nombre' => 'required|min:2|max:40',
            'admi_apellido' => 'required|min:2|max:40',
            'admi_telefono' => 'required|min:2|max:12',
            'admi_direccion' => 'required|min:2|max:60',
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

        $admi = loginAdmin::create([
            'admi_Codigo_PK' => $request->admi_Codigo_PK,
            'admi_nombre' => $request->admi_nombre,
            'admi_apellido' => $request->admi_apellido,
            'admi_telefono' => $request->admi_telefono,
            'admi_direccion' => $request->admi_direccion,
            'admi_correo' => $request->admi_correo,
          'admi_contrasena' => Hash::make($request->admi_contrasena),
        ]);

        if (!$admi) {
            return response()->json([
                'message' => 'Error al registrar Administrador', 
                'status' => 500
            ], 500);
        }

        return response()->json([
            'administrador' => $admi,
            'status' => 201
        ], 201);
    }

    public function show($admi_Codigo_PK)
    {
        $admi = loginAdmin::find($admi_Codigo_PK);
        if (!$admi) {
            return response()->json([
                'message' => 'El administrador no existe',
                'status' => 404 
            ], 404);
        }

        return response()->json([
            'administrador' => $admi,
            'status' => 200
        ], 200);
    }

    public function update(Request $request, $admi_Codigo_PK)
    {
        $admi = loginAdmin::find($admi_Codigo_PK);
        if (!$admi) {
            return response()->json([
                'message' => 'Administrador no encontrado',
                'status' => 404
            ], 404);
        }

        $validacion = Validator::make($request->all(), [
            'admi_Codigo_PK' => 'required|min:2|max:12',
            'admi_nombre' => 'required|min:2|max:40',
            'admi_apellido' => 'required|min:2|max:40',
            'admi_telefono' => 'required|min:2|max:12',
            'admi_direccion' => 'required|min:2|max:60',
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
        $admi = loginAdmin::find($admi_Codigo_PK);
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
