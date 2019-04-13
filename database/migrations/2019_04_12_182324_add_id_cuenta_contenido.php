<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdCuentaContenido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contenido', function (Blueprint $table) {
            $table->bigInteger('id_cuenta',false,true);
            $table->foreign('id_cuenta')->references('id_cuenta')->on('cuenta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contenido', function (Blueprint $table) {
            $table->dropForeign('contenido_id_cuenta_foreign');
            $table->dropColumn('id_cuenta');
        });
    }
}
