<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivo', function (Blueprint $table) {
            $table->bigIncrements('id_archivo');
            $table->char('nombre',200);
            $table->text('path',500);
            $table->char('mime',30);
            $table->integer('size');
            $table->char('extension',100);
            $table->bigInteger('id_archivo_manejador',false,true);
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
        Schema::dropIfExists('archivo');
    }
}
