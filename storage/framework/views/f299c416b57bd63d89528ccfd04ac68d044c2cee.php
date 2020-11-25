<div class="row">
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('linea','Linea')); ?><?php echo e(Form::select('linea', ['A'=>'A','B'=>'B'], $linea_dato->linea, ['class'=>'form-control'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('fecha','Fecha')); ?> <?php echo e(Form::date('fecha', $linea_dato->fecha, ['class'=>'form-control'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('hora','Hora')); ?> <?php echo e(Form::time('hora',$linea_dato->hora, ['class'=>'form-control'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('tt2','TT1')); ?> <?php echo e(Form::number('tt1',$linea_dato->tt1,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('vr','TT2')); ?> <?php echo e(Form::number('tt2',$linea_dato->tt2,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('tt3','TT3')); ?> <?php echo e(Form::number('tt3',$linea_dato->tt3,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('tt4','TT4')); ?> <?php echo e(Form::number('tt4',$linea_dato->tt4,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('intensidad_total','')); ?> <?php echo e(Form::number ('intensidad_total',$linea_dato->intensidad_total,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('intensidad_tambor','Intensidad Tambor')); ?> <?php echo e(Form::number ('intensidad_tambor',$linea_dato->intensidad_tambor,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('intensidad_ve2','')); ?> <?php echo e(Form::number ('intensidad_ve2',$linea_dato->intensidad_ve2,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('total_caudal_entrada_scruber','')); ?> <?php echo e(Form::number ('total_caudal_entrada_scruber',$linea_dato->total_caudal_entrada_scruber,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('total_caudal_salida_scruber','')); ?> <?php echo e(Form::number ('total_caudal_salida_scruber',$linea_dato->total_caudal_salida_scruber,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('caudal_recirc_scruber','')); ?> <?php echo e(Form::number ('caudal_recirc_scruber',$linea_dato->caudal_recirc_scruber,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('temp_aceite_entrada_tambor','')); ?> <?php echo e(Form::number ('temp_aceite_entrada_tambor',$linea_dato->temp_aceite_entrada_tambor,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('presion_salida_tambor','')); ?> <?php echo e(Form::number ('presion_salida_tambor',$linea_dato->presion_salida_tambor,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('presion_entrada_scruber','')); ?> <?php echo e(Form::number ('presion_entrada_scruber',$linea_dato->presion_entrada_scruber,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('presion_entrada_condensador','')); ?> <?php echo e(Form::number ('presion_entrada_condensador',$linea_dato->presion_entrada_condensador,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('presion_salida_condensador','')); ?> <?php echo e(Form::number ('presion_salida_condensador',$linea_dato->presion_salida_condensador,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('posicionvalvula_ve2','')); ?> <?php echo e(Form::number ('posicionvalvula_ve2',$linea_dato->posicionvalvula_ve2,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('posicionvalvula_purga','')); ?> <?php echo e(Form::number ('posicionvalvula_purga',$linea_dato->posicionvalvula_purga,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('presion_entrada_tambor','')); ?> <?php echo e(Form::number ('presion_entrada_tambor',$linea_dato->presion_entrada_tambor,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('variador_electrico','')); ?> <?php echo e(Form::number ('variador_electrico',$linea_dato->variador_electrico,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('variador_mecanico','')); ?> <?php echo e(Form::number ('variador_mecanico',$linea_dato->variador_mecanico,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('vueltas_bomba','')); ?> <?php echo e(Form::number ('vueltas_bomba',$linea_dato->vueltas_bomba,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('temp_aceite_ent_intercambiador','')); ?> <?php echo e(Form::number ('temp_aceite_ent_intercambiador',$linea_dato->temp_aceite_ent_intercambiador,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('temp_aceite_salida_intercambiador','')); ?> <?php echo e(Form::number ('temp_aceite_salida_inter',$linea_dato->temp_aceite_salida_inter,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('temp_agua_entrada_condensador','')); ?> <?php echo e(Form::number ('temp_agua_entrada_condensador',$linea_dato->temp_agua_entrada_condensador,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('temp_agua_salida_condensador','')); ?> <?php echo e(Form::number ('temp_agua_salida_condensador',$linea_dato->temp_agua_salida_condensador,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('caudal_agua_a_condensador','')); ?> <?php echo e(Form::number ('caudal_agua_a_condensador',$linea_dato->caudal_agua_a_condensador,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('temp_agua_ent_torre','')); ?> <?php echo e(Form::number ('temp_agua_ent_torre',$linea_dato->temp_agua_ent_torre,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('temp_agua_sal_torre','')); ?> <?php echo e(Form::number ('temp_agua_sal_torre',$linea_dato->temp_agua_sal_torre,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('caudal_agua_a_torre','')); ?> <?php echo e(Form::number ('caudal_agua_a_torre',$linea_dato->caudal_agua_a_torre,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('temp_trabajo_verde','')); ?> <?php echo e(Form::number ('temp_trabajo_verde',$linea_dato->temp_trabajo_verde,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('temp_quemador_rojo','')); ?> <?php echo e(Form::number ('temp_quemador_rojo',$linea_dato->temp_quemador_rojo,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('presion_ent_biogas','')); ?> <?php echo e(Form::number ('presion_ent_biogas',$linea_dato->presion_ent_biogas,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('temp_aceite_ent_caldera_dysp','')); ?> <?php echo e(Form::number ('temp_aceite_ent_caldera_dysp',$linea_dato->temp_aceite_ent_caldera_dysp,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('temp_aceite_sal_caldera_dysp','')); ?> <?php echo e(Form::number ('temp_aceite_sal_caldera_dysp',$linea_dato->temp_aceite_sal_caldera_dysp,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('temp_humos_caldera_dysp','')); ?> <?php echo e(Form::number ('temp_humos_caldera_dysp',$linea_dato->temp_humos_caldera_dysp,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('presion_gas_ent_caldera_dysp','')); ?> <?php echo e(Form::number ('presion_gas_ent_caldera_dysp',$linea_dato->presion_gas_ent_caldera_dysp,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('presion_gas_sal_caldera_dysp','')); ?> <?php echo e(Form::number ('presion_gas_sal_caldera_dysp',$linea_dato->presion_gas_sal_caldera_dysp,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('porcentaje_ventilador_cal','')); ?> <?php echo e(Form::number ('porcentaje_ventilador_cal',$linea_dato->porcentaje_ventilador_cal,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('caudal_lampara','')); ?> <?php echo e(Form::number ('caudal_lampara',$linea_dato->caudal_lampara,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('valor_lampara_titanium','')); ?> <?php echo e(Form::number ('valor_lampara_titanium',$linea_dato->valor_lampara_titanium,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('dosificacion_sosa','')); ?> <?php echo e(Form::number ('dosificacion_sosa',$linea_dato->dosificacion_sosa,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('consumo_inst_biogas','')); ?> <?php echo e(Form::number ('consumo_inst_biogas',$linea_dato->consumo_inst_biogas,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('riqueza_biogas','')); ?> <?php echo e(Form::number ('riqueza_biogas',$linea_dato->riqueza_biogas,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-3 col-xs-6">
  <?php echo e(Form::label('totalizador_biogas','')); ?> <?php echo e(Form::number ('totalizador_biogas',$linea_dato->totalizador_biogas,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group  col-md-12 col-xs-12">
  <?php echo e(Form::label('observaciones','')); ?> <?php echo e(Form::textarea ('observaciones',null,['class'=>'form-control','step'=>'any'])); ?>

</div>

</div>


<div class="form-group">
  <?php echo e(Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])); ?>

</div>
