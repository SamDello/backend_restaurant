<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetalleCompra;

class DetalleCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detallecompras = DetalleCompra::all();
        return $detallecompras;
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
        $detallecompra = new DetalleCompra();
        $detallecompra->cantidad = $request->cantidad;
        $detallecompra->precio = $request->precio;
        $detallecompra->idNotaCompra = $request->idNotaCompra;
        $detallecompra->idOrdenInventario = $request->idOrdenInventario;
        $detallecompra->save();
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
        $detallecompra = DetalleCompra::findOrFail();
        $detallecompra->cantidad = $request->cantidad;
        $detallecompra->precio = $request->precio;
        $detallecompra->idNotaCompra = $request->idNotaCompra;
        $detallecompra->idOrdenInventario = $request->idOrdenInventario;
        $detallecompra->save();
        return $detallecompra;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $detallecompra = DetalleCompra::destroy($request->id);
        return $detallecompra;
    }
}
