<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineaMuestrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linea_muestras', function (Blueprint $table) {
            $table->string('fecha');
            $table->string('hora');
            $table->increments('id');
            $table->string('linea');
            $table->string('sequedadentrada');
            $table->string('sequedadsalida');
            $table->string('tt1');
            $table->string('tt2');
            $table->string('tt3');
            $table->string('tt4');
            $table->string('intensidadtambor');
            $table->string('herziosbomba');
            $table->string('vueltasbomba');
            $table->string('nivelsilo');
            $table->string('posicionvalvula');
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
        Schema::dropIfExists('linea_muestras');
    }
}
