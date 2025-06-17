<?php
namespace App\Http\Controllers;

use App\Models\ClienteModelo;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ControladorCliente extends Controller
{
    // Definir constantes para las reglas de validación reutilizadas
    private const RULE_REQUIRED_MIN2_MAX40 = 'required|min:2|max:40';
    private const RULE_REQUIRED_MIN2_MAX12 = 'required|min:2|max:12';
    private const RULE_MIN2_MAX12 = 'min:2|max:12';
    private const RULE_REQUIRED_MIN2_MAX60 = 'required|min:2|max:60';

    public function index()
    {
        $cliente = ClienteModelo::all();
        if ($cliente->isEmpty()) {
            return response()->json([
                'message' => 'No hay clientes registrados',
                'status' => 200
            ], 200);
        }
        return response()->json($cliente, 200);
    }

    public function store(Request $request)
    {
        $validacion = Validator::make($request->all(), [
            'clie_Documento_PK' => 'required|min:5|max:12',
            'clie_nombre' => self::RULE_REQUIRED_MIN2_MAX40,
            'clie_apellido' => self::RULE_REQUIRED_MIN2_MAX40,
            'clie_Telefono' => self::RULE_REQUIRED_MIN2_MAX12,
            'clie_Telefono2' => self::RULE_MIN2_MAX12,
            'clie_direccion' => self::RULE_REQUIRED_MIN2_MAX60,
            'clie_correo' => 'required|email',
            'id_TipoDocumento_FK' => 'required|numeric',
            'contrasena' => self::RULE_REQUIRED_MIN2_MAX40,
        ]);
        if ($validacion->fails()) {
            return response()->json([
                'message' => 'Error en la validación del cliente',
                'errors' => $validacion->errors(),
                'status' => 400
            ], 400);
        }

        $cliente = new ClienteModelo();
        $cliente->clie_Documento_PK = $request->clie_Documento_PK;
        $cliente->clie_nombre = $request->clie_nombre;
        $cliente->clie_apellido = $request->clie_apellido;
        $cliente->clie_Telefono = $request->clie_Telefono;
        $cliente->clie_Telefono2 = $request->clie_Telefono2;
        $cliente->clie_direccion = $request->clie_direccion;
        $cliente->clie_correo = $request->clie_correo;
        $cliente->id_TipoDocumento_FK = $request->id_TipoDocumento_FK;
        $cliente->contrasena = $request->contrasena;
        $cliente->save();

        return response()->json([
            'message' => 'Cliente registrado',
            'cliente' => $cliente,
            'status' => 201
        ], 201);
    }

    public function update(Request $request, $clie_Documento_PK)
    {
        $cliente = ClienteModelo::find($clie_Documento_PK);
        if (!$cliente) {
            $data = [
                'message' => 'El cliente no existe',
                'status' => 404
            ];
            return response()->json($data, 404);
        }
        $validacion = Validator::make(
            $request->all(),
            [
                'clie_nombre' => self::RULE_REQUIRED_MIN2_MAX40,
                'clie_apellido' => self::RULE_REQUIRED_MIN2_MAX40,
                'clie_Telefono' => self::RULE_REQUIRED_MIN2_MAX12,
                'clie_Telefono2' => self::RULE_MIN2_MAX12,
                'clie_direccion' => self::RULE_REQUIRED_MIN2_MAX60,
            ]
        );
        if ($validacion->fails()) {
            $data = [
                'message' => 'Error en la validacion de datos',
                'errors' => $validacion->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }
        $cliente->clie_nombre = $request->clie_nombre;
        $cliente->clie_apellido = $request->clie_apellido;
        $cliente->clie_Telefono = $request->clie_Telefono;
        $cliente->clie_Telefono2 = $request->clie_Telefono2;
        $cliente->clie_direccion = $request->clie_direccion;
        $cliente->save();
        $data = [
            'message' => 'Cliente modificado',
            'cliente' => $cliente,
            'status' => 200
        ];
        return response()->json($data, 200);
    }

    //eliminar
    public function destroy($clie_Documento_PK)
    {
        $cliente = ClienteModelo::find($clie_Documento_PK);
        if (!$cliente) {
            $data = [
                'message' => 'El cliente no existe',
                'status' => 404
            ];
            return response()->json($data, 404);
        }
        $cliente->delete();
        $data = [
            'message' => 'Cliente eliminado',
            'status' => 200
        ];
        return response()->json($data, 200);
    }
}

