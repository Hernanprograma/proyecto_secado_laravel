<div class="form-group">
  {{Form::label('linea','Linea')}}{{ Form::select('linea', ['A'=>'A','B'=>'B'], $linea_dato->linea, ['class'=>'form-control']) }}
</div>
<div class="form-group">
  {{Form::label('fecha','Fecha')}} {{ Form::date('fecha', $linea_dato->fecha, ['class'=>'form-control']) }}
</div>
<div class="form-group">
  {{Form::label('hora','Hora')}} {{ Form::time('hora',$linea_dato->hora, ['class'=>'form-control']) }}
</div>
<div class="form-group">
  {{Form::label('tt2','TT1')}} {{Form::number('tt1',$linea_dato->tt1,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('vr','TT2')}} {{Form::number('tt2',$linea_dato->tt2,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('tt3','TT3')}} {{Form::number('tt3',$linea_dato->tt3,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('tt4','TT4')}} {{Form::number('tt4',$linea_dato->tt4,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('intensidad_total','')}} {{Form::number ('intensidad_total',$linea_dato->intensidad_total,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('intensidad_tambor','Intensidad Tambor')}} {{Form::number ('intensidad_tambor',$linea_dato->intensidad_tambor,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('intensidad_ve2','')}} {{Form::number ('intensidad_ve2',$linea_dato->intensidad_ve2,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('total_caudal_entrada_scruber','')}} {{Form::number ('total_caudal_entrada_scruber',$linea_dato->total_caudal_entrada_scruber,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('total_caudal_salida_scruber','')}} {{Form::number ('total_caudal_salida_scruber',$linea_dato->total_caudal_salida_scruber,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('caudal_recirc_scruber','')}} {{Form::number ('caudal_recirc_scruber',$linea_dato->caudal_recirc_scruber,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('temp_aceite_entrada_tambor','')}} {{Form::number ('temp_aceite_entrada_tambor',$linea_dato->temp_aceite_entrada_tambor,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('presion_salida_tambor','')}} {{Form::number ('presion_salida_tambor',$linea_dato->presion_salida_tambor,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('presion_entrada_scruber','')}} {{Form::number ('presion_entrada_scruber',$linea_dato->presion_entrada_scruber,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('presion_entrada_condensador','')}} {{Form::number ('presion_entrada_condensador',$linea_dato->presion_entrada_condensador,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('presion_salida_condensador','')}} {{Form::number ('presion_salida_condensador',$linea_dato->presion_salida_condensador,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('posicionvalvula_ve2','')}} {{Form::number ('posicionvalvula_ve2',$linea_dato->posicionvalvula_ve2,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('posicionvalvula_purga','')}} {{Form::number ('posicionvalvula_purga',$linea_dato->posicionvalvula_purga,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('presion_entrada_tambor','')}} {{Form::number ('presion_entrada_tambor',$linea_dato->presion_entrada_tambor,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('variador_electrico','')}} {{Form::number ('variador_electrico',$linea_dato->variador_electrico,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('variador_mecanico','')}} {{Form::number ('variador_mecanico',$linea_dato->variador_mecanico,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('vueltas_bomba','')}} {{Form::number ('vueltas_bomba',$linea_dato->vueltas_bomba,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('temp_aceite_ent_intercambiador','')}} {{Form::number ('temp_aceite_ent_intercambiador',$linea_dato->temp_aceite_ent_intercambiador,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('temp_aceite_salida_intercambiador','')}} {{Form::number ('temp_aceite_salida_inter',$linea_dato->temp_aceite_salida_inter,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('temp_agua_entrada_condensador','')}} {{Form::number ('temp_agua_entrada_condensador',$linea_dato->temp_agua_entrada_condensador,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('temp_agua_salida_condensador','')}} {{Form::number ('temp_agua_salida_condensador',$linea_dato->temp_agua_salida_condensador,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('caudal_agua_a_condensador','')}} {{Form::number ('caudal_agua_a_condensador',$linea_dato->caudal_agua_a_condensador,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('temp_agua_ent_torre','')}} {{Form::number ('temp_agua_ent_torre',$linea_dato->temp_agua_ent_torre,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('temp_agua_sal_torre','')}} {{Form::number ('temp_agua_sal_torre',$linea_dato->temp_agua_sal_torre,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('caudal_agua_a_torre','')}} {{Form::number ('caudal_agua_a_torre',$linea_dato->caudal_agua_a_torre,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('temp_trabajo_verde','')}} {{Form::number ('temp_trabajo_verde',$linea_dato->temp_trabajo_verde,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('temp_quemador_rojo','')}} {{Form::number ('temp_quemador_rojo',$linea_dato->temp_quemador_rojo,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('presion_ent_biogas','')}} {{Form::number ('presion_ent_biogas',$linea_dato->presion_ent_biogas,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('temp_aceite_ent_caldera_dysp','')}} {{Form::number ('temp_aceite_ent_caldera_dysp',$linea_dato->temp_aceite_ent_caldera_dysp,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('temp_aceite_sal_caldera_dysp','')}} {{Form::number ('temp_aceite_sal_caldera_dysp',$linea_dato->temp_aceite_sal_caldera_dysp,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('temp_humos_caldera_dysp','')}} {{Form::number ('temp_humos_caldera_dysp',$linea_dato->temp_humos_caldera_dysp,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('presion_gas_ent_caldera_dysp','')}} {{Form::number ('presion_gas_ent_caldera_dysp',$linea_dato->presion_gas_ent_caldera_dysp,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('presion_gas_sal_caldera_dysp','')}} {{Form::number ('presion_gas_sal_caldera_dysp',$linea_dato->presion_gas_sal_caldera_dysp,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('porcentaje_ventilador_cal','')}} {{Form::number ('porcentaje_ventilador_cal',$linea_dato->porcentaje_ventilador_cal,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('caudal_lampara','')}} {{Form::number ('caudal_lampara',$linea_dato->caudal_lampara,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('valor_lampara_titanium','')}} {{Form::number ('valor_lampara_titanium',$linea_dato->valor_lampara_titanium,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('dosificacion_sosa','')}} {{Form::number ('dosificacion_sosa',$linea_dato->dosificacion_sosa,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('consumo_inst_biogas','')}} {{Form::number ('consumo_inst_biogas',$linea_dato->consumo_inst_biogas,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('riqueza_biogas','')}} {{Form::number ('riqueza_biogas',$linea_dato->riqueza_biogas,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('totalizador_biogas','')}} {{Form::number ('totalizador_biogas',$linea_dato->totalizador_biogas,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('observaciones','')}} {{Form::textarea ('observaciones',null,['class'=>'form-control','step'=>'any'])}}
</div>

{{-- Boton Submit --}}
<div class="form-group">
  {{Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])}}
</div>
