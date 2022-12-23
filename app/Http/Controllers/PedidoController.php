<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::all();
        return $pedidos;
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
        $pedido = new Pedido();
        $pedido->fecha=$request->fecha;
        $pedido->fechaentrega=$request->fechaEntrega;
        $pedido->hora=$request->hora;
        $pedido->horaentrega=$request->horaentrega;
        $pedido->tiempoentrega=$request->tiempoentrega;
        $pedido->montototal=$request->montoTotal;
        $pedido->estado=$request->estado;
        $pedido->idUser=$request->idUser;
        $pedido->idCliente=$request->idCliente;
        $pedido->idRepartidor=$request->idRepartidor;
        $pedido->idUbicacion=$request->idUbicacion;
        $pedido->save();

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
        $pedido = Pedido::findOrFail($request->id);
        $pedido->fecha=$request->fecha;
        $pedido->fechaentrega=$request->fechaEntrega;
        $pedido->hora=$request->hora;
        $pedido->horaentrega=$request->horaentrega;
        $pedido->tiempoentrega=$request->tiempoentrega;
        $pedido->montototal=$request->montoTotal;
        $pedido->estado=$request->estado;
        $pedido->idUser=$request->idUser;
        $pedido->idCliente=$request->idCliente;
        $pedido->idRepartidor=$request->idRepartidor;
        $pedido->idUbicacion=$request->idUbicacion;
        $pedido->save();
        return $pedido;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $pedido = Pedido::destroy($request->id);
        return $pedido;
    }
}
