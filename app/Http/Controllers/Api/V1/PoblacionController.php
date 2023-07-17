<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Poblacion;
use Illuminate\Http\Request;


class PoblacionController extends Controller
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
        
        return Poblacion::all();
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Poblacion  $poblacion
     * @return \Illuminate\Http\Response
     */
    public function show(Poblacion $poblacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Poblacion  $poblacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poblacion $poblacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poblacion  $poblacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poblacion $poblacion)
    {
        //
    }
}
