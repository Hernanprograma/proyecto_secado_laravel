<div class="form-group">
  <?php echo e(Form::label('centrifuga','Centrifuga')); ?><?php echo e(Form::select('centrifuga', ['A'=>'A','B'=>'B','C'=>'C'], null, ['class'=>'form-control'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('fecha','Fecha')); ?>

<?php echo e(Form::date('fecha',null, ['class'=>'form-control'])); ?>

</div>

<div class="form-group">
<?php echo e(Form::label('hora','Hora de Paro/Marcha')); ?>

<?php echo e(Form::time('hora',null, ['class'=>'form-control'])); ?>

</div>

<div class="form-group">
  <?php echo e(Form::label('estado','Estado')); ?><?php echo e(Form::select('estado', ['En marcha'=>'En Marcha','Parada'=>'Parada'], null, ['class'=>'form-control'])); ?>

</div>

<div class="form-group">
  <?php echo e(Form::label('incidencias','Incidencias')); ?> <?php echo e(Form::textarea('incidencias',null,['class'=>'form-control'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])); ?>

</div>
