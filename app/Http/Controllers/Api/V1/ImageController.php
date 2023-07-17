<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        // Validar que se ha enviado un archivo
        $validator = Validator::make($request->all(), [
            'image' => 'required|image',
        ], [
            'image.required' => 'No se ha seleccionado ninguna imagen.',
            'image.image' => 'El archivo seleccionado no es una imagen válida.',
        ]);

        // Validar que el tamaño del archivo no supere los 2MB
        $validator->after(function ($validator) use ($request) {
            if ($request->file('image')->getSize() > 2048000) {
                $validator->errors()->add('image', 'El archivo es demasiado grande.');
            }
        });

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 422);
        }

        $path = $request->file('image')->store('public/img');
    //    $url = url('/storage/img/' . basename($path));
        $url = '/storage/img/' . basename($path);
        return response()->json(['url' => $url],201);
    }
}
