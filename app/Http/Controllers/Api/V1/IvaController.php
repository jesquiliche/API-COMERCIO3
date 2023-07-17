<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Iva;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class IvaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

/*    public function __construct()
    {
        $this->middleware('auth:api');
    }
    */
    public function index()
    {
        //
        return Iva::all();
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
            'nombre' => 'required|unique:ivas|max:150',
            'tanto_porciento' => 'required',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(),422); 
        }
        $iva=Iva::create($request->all());
        return $iva;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Iva  $iva
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Iva::findOrFail($id);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Iva  $iva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|unique:ivas|max:150',
            'tanto_porciento' => 'required',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(),422); 
        }
        $iva=Iva::findOrFail($id)->update($request->all());
        return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Iva  $iva
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Iva::destroy($id);
        return "Iva $id eliminado.";
    }
}
