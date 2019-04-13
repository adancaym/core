<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdUsersArchivo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('archivo', function (Blueprint $table) {
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
        Schema::table('archivo', function (Blueprint $table) {
            $table->dropForeign('archivo_id_users_foreign');
            $table->dropColumn('id_users');
        });
    }
}
