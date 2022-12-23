<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NotaCompra;
class NotaCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notacompras = NotaCompra::all();
        return $notacompras;
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
        $notacompra = new NotaCompra();
        $notacompra->fecha = $request->fecha;
        $notacompra->montoTotal = $request->montoTotal;
        $notacompra->idProveedor = $request->idProveedor;
        $notacompra->idUser = $request->idUser;
        $notacompra->save();
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
        $notacompra = NotaCompra::findOrFail($request->id);
        $notacompra->fecha = $request->fecha;
        $notacompra->montoTotal = $request->montoTotal;
        $notacompra->idProveedor = $request->idProveedor;
        $notacompra->idUser = $request->idUser;
        $notacompra->save();
        return $notacompra;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $notacompra = NotaCompra::destroy($request->id);
        return $notacompra;
    }
}
