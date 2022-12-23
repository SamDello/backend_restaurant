<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orden;

class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordenes = Orden::all();
        return $ordenes;
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
        $orden = new Orden();
        $orden->descripcion = $request->descripcion;
        $orden->codigo = $request->codigo;
        $orden->precio = $request->precio;
        $orden->idLocal = $request->idLocal;
        $orden->idTipo = $request->idTipo;
        $orden->idCategoria = $request->idCategoria;
        $orden->save();

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
        $orden = Orden::findOrFail($request->id);
        $orden->descripcion = $request->descripcion;
        $orden->codigo = $request->codigo;
        $orden->precio = $request->precio;
        $orden->idLocal = $request->idLocal;
        $orden->idTipo = $request->idTipo;
        $orden->idCategoria = $request->idCategoria;
        $orden->save();
        return $orden;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $orden = Orden::destroy($request->id);
        return $orden;
    }
}
