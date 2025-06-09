<?php

namespace App\Http\Controllers;

use App\Models\clienteModelo;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class controladorCliente extends Controller
{
    public function index()
    {
        $cliente = clienteModelo::all();
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
            'clie_nombre' => 'required|min:2|max:40',
            'clie_apellido' => 'required|min:2|max:40',
            'clie_Telefono' => 'required|min:2|max:12',
            'clie_Telefono2' => 'min:2|max:12',
            'clie_direccion' => 'required|min:2|max:60',
            'clie_correo' => 'required|email',
            'id_TipoDocumento_FK' => 'required|numeric',
            'contrasena' => 'required|min:2|max:40'
        ]);

        if ($validacion->fails()) {
            return response()->json([
                'message' => 'Error en la validación del cliente',
                'errors' => $validacion->errors(),
                'status' => 400
            ], 400);
        }

        $cliente = clienteModelo::create([
            'clie_Documento_PK' => $request->clie_Documento_PK,
            'clie_nombre' => $request->clie_nombre,
            'clie_apellido' => $request->clie_apellido,
            'clie_Telefono' => $request->clie_Telefono,
            'clie_Telefono2' => $request->clie_Telefono2,
            'clie_direccion' => $request->clie_direccion,
            'clie_correo' => $request->clie_correo,
            'id_TipoDocumento_FK' => $request->id_TipoDocumento_FK,
            'contrasena' => bcrypt($request->contrasena) // Encriptar contraseña
        ]);

        if (!$cliente) {
            return response()->json([
                'message' => 'Error al registrar cliente',
                'status' => 500
            ], 500);
        }

        return response()->json([
            'cliente' => $cliente,
            'status' => 201
        ], 201);
    }
    //buscar por el id

    public function show($clie_Documento_PK)
    {
        $cliente = clienteModelo::find($clie_Documento_PK);
        if (!$cliente) {

            $data = [
                'message' => 'El cliente no existe',
                'status' => 404
            ];
            return response()->json($data, 404);
        }
        $data = [
            'cliente' => $cliente,
            'status' => 200
        ];
        return response()->json($data, 200);
    }
    //actualizar
    public function update(Request $request, $clie_Documento_PK)
    {
        $cliente = clienteModelo::find($clie_Documento_PK);
        if (!$cliente) {
            $data = [
                'message' => 'Cliente no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404);
        }
        $validacion = Validator::make(
            $request->all(),
            [
                'clie_nombre' => 'required|min:2|max:40',
                'clie_apellido' => 'required|min:2|max:40',
                'clie_Telefono' => 'required|min:2|max:12',
                'clie_Telefono2' => 'min:2|max:12',
                'clie_direccion' => 'required|min:2|max:60',
            ]
        );
        if ($validacion->fails()) {
            $data = [
                'message' => 'Error en la validacion de datos',
                'errors' => $validacion->errors(),
                'status' => 200
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
        $cliente = clienteModelo::find($clie_Documento_PK);
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
