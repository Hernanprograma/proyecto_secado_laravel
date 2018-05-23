<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarchaCentrifugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcha_centrifugas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('centrifuga');
            $table->string('estado');
            $table->string('fecha');
            $table->string('hora');
            $table->string('incidencias');
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
        Schema::dropIfExists('marcha_centrifugas');
    }
}
