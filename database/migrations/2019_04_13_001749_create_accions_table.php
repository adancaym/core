<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accion', function (Blueprint $table) {
            $table->bigIncrements('id_accion');

            $table->char('accion',100);
            $table->char('method',100)->nullable(true);
            $table->char('controller',100);

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
        Schema::dropIfExists('accion');
    }
}
