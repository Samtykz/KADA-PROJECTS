<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prodModelo; 
use Illuminate\Support\Facades\Validator; 

class prodControlador extends Controller
{
    public function index()
    {
        $producto = prodModelo::all();
        if ($producto->isEmpty()) {
            return response()->json([
                'message' => 'No hay productos registrados',
                'status' => 200
            ], 200); 
        }
        return response()->json($producto, 200);
    }

    public function show($prod_Codigo_PK){
        $producto = prodModelo::find($prod_Codigo_PK);
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
