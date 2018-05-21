<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentrifugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centrifugas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('entrada');
            $table->string('salida');
            $table->string('centrifuga');
            $table->string('consigna');
            $table->string('va');
            $table->string('vr');
            $table->string('par');
            $table->string('t_entrada');
            $table->string('t_salida');
            $table->string('vibracion');
            $table->string('caudal_ent');
            $table->string('marcapoli');
            $table->string('caudal_poli');
            $table->string('aspecto');
            $table->string('fecha');
            $table->string('hora');
            $table->unsignedInteger('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('centrifugas');
    }
}
