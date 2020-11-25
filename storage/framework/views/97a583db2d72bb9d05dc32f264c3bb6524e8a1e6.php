

<?php echo e(Form::hidden('fecha', \Illuminate\Support\Carbon::now(), ['class'=>'form-control'])); ?>



<?php echo e(Form::hidden('hora',\Illuminate\Support\Carbon::now()->format('H:i'), ['class'=>'form-control'])); ?>


<div class="form-group">
  <?php echo e(Form::label('nivel_seco_a','Nivel de fango seco A')); ?> <?php echo e(Form::number('nivel_seco_a',$nivel->nivel_seco_a,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('nivel_seco_b','Nivel de fango seco B')); ?> <?php echo e(Form::number('nivel_seco_b',$nivel->nivel_seco_b,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('silo_nuevo','Silo Nuevo de fango(Centrifugas)')); ?> <?php echo e(Form::number('silo_nuevo',$nivel->silo_nuevo,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('silo_almacen','Silo Almacenamiento(Camiones)')); ?> <?php echo e(Form::number('silo_almacen',$nivel->silo_almacen,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('digestor','Digestor')); ?> <?php echo e(Form::number('digestor',$nivel->digestor,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('tolva_recepcion','Tolva Recepcion(Camiones)')); ?><?php echo e(Form::select('tolva_recepcion', ['Vacia'=>'Vacia','Llena'=>'Llena','Por la mitad'=>'Por la mitad','Dos tercios'=>'Dos tercios'], $nivel->tolva_recepcion, ['class'=>'form-control'])); ?>

</div>

<div class="form-group">
  <?php echo e(Form::label('gas','Gas')); ?> <?php echo e(Form::number ('gas',$nivel->gas,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('linea_a','Estado linea A')); ?><?php echo e(Form::select('linea_a', ['En Marcha'=>'En Marcha','Parada'=>'Parada'], $nivel->linea_a, ['class'=>'form-control'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('linea_b','Estado linea B')); ?><?php echo e(Form::select('linea_b', ['En Marcha'=>'En Marcha','Parada'=>'Parada'], $nivel->linea_b, ['class'=>'form-control'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('centrifuga_a','Estado Centrifuga A')); ?><?php echo e(Form::select('centrifuga_a', ['En Marcha'=>'En Marcha','Parada'=>'Parada'], $nivel->centrifuga_a, ['class'=>'form-control'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('centrifuga_b','Estado Centrifuga B')); ?><?php echo e(Form::select('centrifuga_b', ['En Marcha'=>'En Marcha','Parada'=>'Parada'], $nivel->centrifuga_b, ['class'=>'form-control'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('centrifuga_c','Estado Centrifuga C')); ?><?php echo e(Form::select('centrifuga_c', ['En Marcha'=>'En Marcha','Parada'=>'Parada'], $nivel->centrifuga_c, ['class'=>'form-control'])); ?>

</div>



<div class="form-group">
  <?php echo e(Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])); ?>

</div>
