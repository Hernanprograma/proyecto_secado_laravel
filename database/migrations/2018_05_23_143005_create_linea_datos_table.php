<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineaDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linea_datos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fecha');
            $table->string('hora');
            $table->string('linea');
            $table->string('tt1');
            $table->string('tt2');
            $table->string('tt3');
            $table->string('tt4');
            $table->string('intensidad_total');
            $table->string('intensidad_tambor');
            $table->string('intensidad_ve2');
            $table->string('total_caudal_entrada_scruber');
            $table->string('total_caudal_salida_scruber');
            $table->string('caudal_recirc_scruber');
            $table->string('temp_aceite_entrada_tambor');
            $table->string('presion_salida_tambor');
            $table->string('presion_entrada_scruber');
            $table->string('presion_entrada_condensador');
            $table->string('presion_salida_condensador');
            $table->string('posicionvalvula_ve2');
            $table->string('posicionvalvula_purga');
            $table->string('presion_entrada_tambor');
            $table->string('variador_electrico');
            $table->string('variador_mecanico');
            $table->string('vueltas_bomba');
            $table->string('temp_aceite_ent_intercambiador');
            $table->string('temp_aceite_salida_inter');
            $table->string('temp_agua_entrada_condensador');
            $table->string('temp_agua_salida_condensador');
            $table->string('caudal_agua_a_condensador');
            $table->string('temp_agua_ent_torre');
            $table->string('temp_agua_sal_torre');
            $table->string('caudal_agua_a_torre');
            $table->string('temp_trabajo_verde');
            $table->string('temp_quemador_rojo');
            $table->string('presion_ent_biogas');
            $table->string('temp_aceite_ent_caldera_dysp');
            $table->string('temp_aceite_sal_caldera_dysp');
            $table->string('temp_humos_caldera_dysp');
            $table->string('presion_gas_ent_caldera_dysp');
            $table->string('presion_gas_sal_caldera_dysp');
            $table->string('porcentaje_ventilador_cal');
            $table->string('caudal_lampara');
            $table->string('valor_lampara_titanium');
            $table->string('dosificacion_sosa');
            $table->string('consumo_inst_biogas');
            $table->string('riqueza_biogas');
            $table->string('totalizador_biogas');
            $table->string('observaciones');
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
        Schema::dropIfExists('linea_datos');
    }
}
