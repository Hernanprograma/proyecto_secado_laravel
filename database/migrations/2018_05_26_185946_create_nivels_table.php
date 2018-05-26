<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNivelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nivels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fecha');
            $table->string('hora');
            $table->string('nivel_seco_a');
            $table->string('nivel_seco_b');
            $table->string('silo_nuevo');
            $table->string('silo_almacen');
            $table->string('digestor');
            $table->string('tolva_recepcion');
            $table->string('gas');
            $table->string('linea_a');
            $table->string('linea_b');
            $table->string('centrifuga_a');
            $table->string('centrifuga_b');
            $table->string('centrifuga_c');
            $table->unsignedInteger('user_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nivels');
    }
}
