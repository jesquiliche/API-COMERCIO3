<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 /*   public function __construct()
    {
        $this->middleware('auth:api');
    }*/
    
    public function index()
    {
        //
        $productos=DB::select('SELECT * FROM v_productos ORDER BY id DESC');
        return $productos;
        
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       
        $validator = Validator::make($request->all(), [
            'precio'=>'required',
            'nombre'=>'required|unique:productos',
            'descripcion'=>'required',
            'subcategoria_id'=>'required',
            'iva_id'=>'required',
            'marca_id'=>'required']);
        if($validator->fails()){
            return response()->json($validator->errors(),422); 
        }
        Producto::create($request->all());
        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Producto::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validator = Validator::make($request->all(), [
            'precio'=>'required|numeric',
            'nombre'=>'required',
            'descripcion'=>'required',
            'subcategoria_id'=>'required|numeric',
            'iva_id'=>'required|numeric',
            'marca_id'=>'required|numeric'       ]);
        if($validator->fails()){
            return response()->json($validator->errors(),422); 
        }
        Producto::findOrFail($id)->update($request->all());
        return $request->all();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Producto::destroy($id);
        return "Producto $id eliminado.";
    }
}
