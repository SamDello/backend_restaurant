<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleventaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleventa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad');
            $table->float('precio');

            $table->integer('idOrdenInventario')->unsigned();
            $table->foreign('idOrdenInventario')->references('id')->on('ordenes_inventarios')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('idNotaVenta')->unsigned();
            $table->foreign('idNotaVenta')->references('id')->on('notaventa')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalleventa');
    }
}
