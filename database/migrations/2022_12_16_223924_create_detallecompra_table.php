<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallecompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallecompras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad');
            $table->float('precio');

            
            $table->integer('idOrdenInventario')->unsigned();
            $table->foreign('idOrdenInventario')->references('id')->on('ordenes_inventarios')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('idNotaCompra')->unsigned();
            $table->foreign('idNotaCompra')->references('id')->on('notacompra')->onDelete('cascade')->onUpdate('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detallecompras');
    }
}
