
<div class="form-group">

  <?php echo e(Form::label('fecha','Fecha')); ?> <?php echo e(Form::date('fecha', \Illuminate\Support\Carbon::now(), ['class'=>'form-control'])); ?>

</div>

<div class="form-group">
  <?php echo e(Form::label('hora','Hora')); ?> <?php echo e(Form::time('hora',\Illuminate\Support\Carbon::now()->format('H:i'), ['class'=>'form-control'])); ?>

</div>

<?php echo Form::hidden('turno_id', $turno_id); ?>



<div class="form-group">
  <?php echo e(Form::label('descripcion','Tarea')); ?> <?php echo e(Form::text('descripcion',null,['class'=>'form-control'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])); ?>

</div>
