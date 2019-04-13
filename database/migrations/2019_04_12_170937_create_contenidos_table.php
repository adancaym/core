<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContenidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenido', function (Blueprint $table) {
            $table->bigIncrements('id_cotnenido');
            $table->text('cotnenido');
            $table->char('titulo',100);
            $table->bigInteger('id_contenido_tipo',false,true);
            $table->foreign('id_contenido_tipo')->references('id_contenido_tipo')->on('contenido_tipo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contenido');
    }
}
