<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCpotencialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cpotenciales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre');
            $table->string('Giro');
            $table->text('Descripcion');

            $table->unsignedInteger('ideanegocio_id');
            $table->foreign('ideanegocio_id')->references('id')->on('ideanegocios')->onDelete('cascade');;

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
        Schema::dropIfExists('cpotenciales');
    }
}
