<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Repartidor;

class RepartidorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repartidores = Repartidor::all();
        return $repartidores;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $repartidor = new Repartidor();
        $repartidor->nombre=$request->nombre;
        $repartidor->apellidos=$request->apellidos;
        $repartidor->correo=$request->correo;
        $repartidor->telefono=$request->telefono;
        $repartidor->numeroLicencia=$request->numeroLicencia;
        $repartidor->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $repartidor = Repartidor::findOrFail($request->id);
        $repartidor->nombre=$request->nombre;
        $repartidor->apellidos=$request->apellidos;
        $repartidor->correo=$request->correo;
        $repartidor->telefono=$request->telefono;
        $repartidor->numeroLicencia=$request->numeroLicencia;
        $repartidor->save();
        return $repartidor;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $repartidor = Repartidor::destroy($request->id);
        return $repartidor;
    }
}
