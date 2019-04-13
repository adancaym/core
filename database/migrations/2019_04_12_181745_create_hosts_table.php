<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('host', function (Blueprint $table) {
            $table->bigIncrements('id_host');
            $table->char('host',100);
            $table->bigInteger('id_cuenta',false,true);
            $table->foreign('id_cuenta')->references('id_cuenta')->on('cuenta');
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
        Schema::dropIfExists('host');
    }
}
