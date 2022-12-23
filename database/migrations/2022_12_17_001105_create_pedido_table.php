<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->date('fechaentrega');
            $table->time('hora')->default(date('H:i:s'));
            $table->time('horaentrega')->nullable();     
            $table->time('tiempoentrega')->nullable();
            $table->float('montototal');
            $table->integer('estado')->default(0);
            // 0  pendiente   //  2 entregado  //3 cancelado 
            $table->integer('idUbicacion')->unsigned();
            $table->foreign('idUbicacion')->references('id')->on('ubicacion')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('idCliente')->unsigned();
            $table->foreign('idCliente')->references('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('idRepartidor')->unsigned();
            $table->foreign('idRepartidor')->references('id')->on('repartidores')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
