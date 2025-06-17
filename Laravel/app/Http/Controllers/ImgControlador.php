<?php
namespace App\Http\Controllers;

use App\Models\ImgModelo;
use Illuminate\Http\Request;

// Renombrar la clase para que siga el estándar de PascalCase
class ImgControlador extends Controller
{
    public function index()
    {
        $imagenes = ImgModelo::all();
        
        if ($imagenes->isEmpty()) {
            return response()->json(['message' => 'No hay imágenes'], 200);
        }
        // Convertir cada imagen a base64
        $imagenes->transform(function ($imagen) {
            $path = storage_path('app/public/' . $imagen->imagen); // Ajusta la ruta según tu estructura
            if (file_exists($path)) {
                $imagen->imagen = base64_encode(file_get_contents($path));
            }
            return $imagen;
        });
        return response()->json($imagenes, 200);
    }
    
    public function show($codigoImagenes)
    {
        $imagenes = ImgModelo::find($codigoImagenes);
        if(!$imagenes){
            $data = [
                'message' => 'La imagen no existe',
                'status' => 404
            ];
            return response()->json($data, 404);
        }
        $data = [
            'imagenes' => $imagenes,
            'status' => 200
        ];
        return response()->json($data, 200);
    }
}

