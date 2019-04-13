<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdUsersContenido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contenido', function (Blueprint $table) {
            $table->bigInteger('id_users',false,true);
            $table->foreign('id_users')->references('id_users')->on('users');
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
            $table->dropForeign('contenido_id_users_foreign');
            $table->dropColumn('id_users');
        });
    }
}
