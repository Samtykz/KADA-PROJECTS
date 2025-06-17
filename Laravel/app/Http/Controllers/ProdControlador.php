<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdModelo;
use Illuminate\Support\Facades\Validator;

class ProdControlador extends Controller
{
    public function index()
    {
        $producto = ProdModelo::all();
        if ($producto->isEmpty()) {
            return response()->json([
                'message' => 'No hay productos registrados',
                'status' => 200
            ], 200);
        }
        return response()->json($producto, 200);
    }

    public function show($prod_Codigo_PK){
        $producto = ProdModelo::find($prod_Codigo_PK);
        if(!$producto){
            $data=[
            'message'=>'El producto no existe',
            'status'=> 404
            ];
            return response()->json($data,404);
        }
        $data=[
            'producto'=>$producto,
            'status'=>200
        ];
        return response()->json($data,200);
    }
}



