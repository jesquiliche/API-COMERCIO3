<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //Requiere autentificación
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    //Método GET
    public function index()
    {
        //
        return Categoria::all();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Método POST
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|unique:categorias|max:150',
            'descripcion' => 'required',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(),422); 
        }
        $categoria=Categoria::create($request->all());
        return $categoria;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
        $categoria= Categoria::findOrFail($id);
        return $categoria;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    //Método PUT
    public function update(Request $request, $id)
    {
        //
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|unique:categorias|max:150',
            'descripcion' => 'required',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(),422); 
        }
      
        $categoria=Categoria::findOrFail($id)->update($request->all());
        return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    //Método DELETE
    public function destroy($id)
    {
        Categoria::destroy($id);
        return "Categoria $id eliminada.";
    }
}
