<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');

            $table->integer('idPlato')->unsigned();
            $table->foreign('idPlato')->references('id')->on('platos')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('idBebida')->unsigned();
            $table->foreign('idBebida')->references('id')->on('bebidas')->onDelete('cascade')->onUpdate('cascade');

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locales');
    }
}
