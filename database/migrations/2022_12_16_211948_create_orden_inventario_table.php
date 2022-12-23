<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenInventarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes_inventarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stock');

            $table->integer('idOrden')->unsigned();
            $table->foreign('idOrden')->references('id')->on('ordenes')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('idInventario')->unsigned();
            $table->foreign('idInventario')->references('id')->on('inventarios')->onDelete('cascade')->onUpdate('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordenes_inventarios');
    }
}
