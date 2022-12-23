<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetallePedido;

class DetallePedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detallepedidos = DetallePedido::all();
        return $detallepedidos;
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
        $detallepedido=new DetallePedido();
        $detallepedido->cantidad=$request->cantidad;
        $detallepedido->precio=$request->precio;
        $detallepedido->idOrdenInventario = $request->OrdenInventario;
        $detallepedido->idPedido=$request->idPedido;
        $detallepedido->save();
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
        $detallepedido=DetallePedido::findOrFail();
        $detallepedido->cantidad=$request->cantidad;
        $detallepedido->precio=$request->precio;
        $detallepedido->idOrdenInventario = $request->OrdenInventario;
        $detallepedido->idPedido=$request->idPedido;
        $detallepedido->save();
        return $detallepedido;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $detallepedido = DetallePedido::Destroy($request->id);
        return $detallepedido;
    }
}
