<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion', 150);
            $table->integer('codigo');
            $table->float('precio');

            $table->integer('idLocal')->unsigned();
            $table->foreign('idLocal')->references('id')->on('locales')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('idTipo')->unsigned();
            $table->foreign('idTipo')->references('id')->on('tipos')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('idCategoria')->unsigned();
            $table->foreign('idCategoria')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordenes');
    }
}
