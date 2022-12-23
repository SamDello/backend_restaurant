<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrdenInventario;

class OrdenInventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordenes_inventarios = OrdenInventario::all();
        return $ordenes_inventarios;
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
        $orden_inventario = new OrdenInventario();
        $orden_inventario->stock = $request->stock;
        $orden_inventario->idOrden = $request->idOrden;
        $orden_inventario->idInventario = $request->idInventario;
        $orden_inventario->save();
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
        $orden_inventario = OrdenInventario::findOrFail($request->id);
        $orden_inventario->stock = $request->stock;
        $orden_inventario->idOrden = $request->idOrden;
        $orden_inventario->idInventario = $request->idInventario;
        $orden_inventario->save();
        return $orden_inventario;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $orden_inventario = OrdenInventario::destroy($request->id);
        return $orden_inventario;
    }
}
