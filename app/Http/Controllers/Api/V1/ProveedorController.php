<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  /*  public function __construct()
    {
        $this->middleware('auth:api');
    }*/
    
    public function index()
    {
        //
    
        $proveedores=DB::select('SELECT * FROM v_proveedores');
         return $proveedores;
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
            'nif'=>'required|max:9',
            'nombre'=>'required|max:255',
            'cod_provincia'=>'required|max:2',
            'cod_postal'=>'required|max:5',
            'calle'=>'required|max:255',
            'numero'=>'required'
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(),422); 
        }
        Proveedor::create($request->all());
        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Proveedor::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validator = Validator::make($request->all(), [
            'nif'=>'required|max:9',
            'nombre'=>'required|max:255',
            'cod_provincia'=>'required|max:2',
            'cod_postal'=>'required|max:5',
            'calle'=>'required|max:255',
            'numero'=>'required'
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(),422); 
        }
        Proveedor::findOrFail($id)->update($request->all());
        return Proveedor::findOrFail($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Proveedor::destroy($id);
        return "Proveedor $id eliminado.";
    }
}
