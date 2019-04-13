<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdManejadorArchivo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('archivo', function (Blueprint $table) {
            $table->foreign('id_archivo_manejador')->references('id_archivo_manejador')->on('archivo_manejador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('archivo', function (Blueprint $table) {
            $table->dropForeign('archivo_id_archivo_manejador_foreign');
            $table->dropColumn('id_archivo_manejador');

        });
    }
}
