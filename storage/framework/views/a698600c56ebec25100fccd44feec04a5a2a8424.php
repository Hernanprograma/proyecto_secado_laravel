<div class="form-group">
  <?php echo e(Form::label('centrifuga','Centrifuga')); ?><?php echo e(Form::select('centrifuga', ['A'=>'A','B'=>'B','C'=>'C'], 'A', ['class'=>'form-control'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('fecha','Fecha')); ?>

<?php echo e(Form::date('fecha', \Illuminate\Support\Carbon::now(), ['class'=>'form-control'])); ?>

</div>

<div class="form-group">
<?php echo e(Form::label('hora','Hora de Paro/Marcha')); ?>

<?php echo e(Form::time('hora',\Illuminate\Support\Carbon::now()->format('H:i'), ['class'=>'form-control'])); ?>

</div>

<div class="form-group">
  <?php echo e(Form::label('estado','Estado')); ?><?php echo e(Form::select('estado', ['En marcha'=>'En Marcha','Parada'=>'Parada'], 'Parada', ['class'=>'form-control'])); ?>

</div>

<div class="form-group">
  <?php echo e(Form::label('incidencias','Incidencias')); ?> <?php echo e(Form::textarea('incidencias',null,['class'=>'form-control'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])); ?>

</div>
