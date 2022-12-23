<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallepedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallepedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad');
            $table->float('precio');
           
            $table->integer('idOrdenInventarios')->unsigned();
            $table->foreign('idOrdenInventarios')->references('id')->on('ordenes_inventarios')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('idPedido')->unsigned();
            $table->foreign('idPedido')->references('id')->on('pedidos')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detallepedidos');
    }
}
