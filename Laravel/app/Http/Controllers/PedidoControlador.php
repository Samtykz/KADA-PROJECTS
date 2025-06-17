<?php

namespace App\Http\Controllers;

use App\Models\pedidoModelo; 
use Illuminate\Support\Facades\Validator; 
use Illuminate\Http\Request;

class PedidoControlador extends Controller 
{
    public function index()
    {
        $pedido = pedidoModelo::all();
        if ($pedido->isEmpty()) {
            return response()->json([
                'message' => 'No hay pedidos registrados',
                'status' => 200
            ], 200); 
        }
        return response()->json($pedido, 200);
    }

    public function store(Request $request) 
    {
        $validacion = Validator::make($request->all(), [
            'fechaPedido' => 'required|date',
            'horaPedido' => 'required|date_format:H:i',
            'clie_Documento_FK' => 'required|min:4|max:20'
        ]);

        if ($validacion->fails()) {
            return response()->json([
                'message' => 'Error en la validación de datos',
                'errors' => $validacion->errors(),
                'status' => 400 
            ], 400);
        }

        $pedido = pedidoModelo::create([
            'id_Pedido_PK' => $request->id_Pedido_PK,
            'fechaPedido' => $request->fechaPedido,  
            'horaPedido' => $request->horaPedido, 
            'clie_Documento_FK' => $request->clie_Documento_FK
        ]);

        if (!$pedido) {
            return response()->json([
                'message' => 'Error al registrar el Pedido', 
                'status' => 500
            ], 500);
        }

        return response()->json([
            'pedido' => $pedido,
            'status' => 201
        ], 201);
    }
    public function show($id_Pedido_PK){
        $pedido = pedidoModelo::find($id_Pedido_PK);
        if(!$pedido){
            $data=[
            'message'=>'El Pedido no existe',
            'status'=> 404
            ];
            return response()->json($data,404);
        }
        $data=[
            'pedido'=>$pedido,
            'status'=>200
        ];
        return response()->json($data,200);
    }

    public function update(Request $request, $id_Pedido_PK){
        $pedido=pedidoModelo::find($id_Pedido_PK);
        if(!$pedido){
            $data=[
                'message'=>'Pedido no encontrado',
                'status'=>404
            ];
            return response()->json($data,404);
        }
        $validacion=Validator::make($request->all(),
        [
            //'id_Pedido_PK' => $request->id_Pedido_PK,
            'fechaPedido' => 'required|date',
            'horaPedido' => 'required|date_format:H:i',
            'clie_Documento_FK' => 'required|min:4|max:20' 
        ]);
        if($validacion->fails()){
            $data=[
                'messsage'=>'Error en la validacion de datos',
                'errors'=>$validacion->errors(),
                'status'=>200
            ];
            return response()->json($data,400);
        }
        //$pedido->id_Pedido_PK=$request->id_Pedido_PK;
        $pedido->fechaPedido=$request->fechaPedido;
        $pedido->horaPedido=$request->horaPedido;
        $pedido->clie_Documento_FK=$request->clie_Documento_FK;
        $pedido->save();
        $data=[
            'message'=>'Pedido modificado',
            'pedido'=>$pedido,
            'status'=>200
        ];
        return response()->json($data,200);
        
    }
    public function destroy($id_Pedido_PK){
        $pedido = pedidoModelo::find($id_Pedido_PK);
        if(!$pedido){
            $data=[
            'message'=>'El Pedido no existe',
            'status'=> 404
            ];
            return response()->json($data,404);
        }
        $pedido->delete();
        $data=[
            'message'=>'Pedido eliminado',
            'status'=>200
        ];
        return response()->json($data,200);
    } 
}
