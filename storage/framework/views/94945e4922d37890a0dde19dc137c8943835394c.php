<div class="form-group">
  <?php echo e(Form::label('fecha','Fecha')); ?>

<?php echo e(Form::date('fecha', \Illuminate\Support\Carbon::now(), ['class'=>'form-control'])); ?>

</div>

<div class="form-group">
<?php echo e(Form::label('hora','Hora')); ?>

<?php echo e(Form::time('hora',\Illuminate\Support\Carbon::now()->format('H:i'), ['class'=>'form-control'])); ?>

</div>

<div class="form-group">
  <?php echo e(Form::label('caudal','Caudal')); ?> <?php echo e(Form::number('caudal',null,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('totalizado','Totalizado')); ?> <?php echo e(Form::number('totalizado',null,['class'=>'form-control','step'=>'any'])); ?>

</div>

<div class="form-group">
  <?php echo e(Form::label('incidencias','Incidencias')); ?> <?php echo e(Form::textarea('incidencias',null,['class'=>'form-control'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])); ?>

</div>
