
<div class="form-group">
  <?php echo e(Form::label('fecha','Fecha')); ?>

<?php echo e(Form::date('fecha', \Illuminate\Support\Carbon::now(), ['class'=>'form-control'])); ?>

</div>

<div class="form-group">
<?php echo e(Form::label('hora','Hora de Paro/Marcha')); ?>

<?php echo e(Form::time('hora',\Illuminate\Support\Carbon::now()->format('H:i'), ['class'=>'form-control'])); ?>

</div>

<div class="form-group">
  <?php echo e(Form::label('descripcion','Tarea')); ?> <?php echo e(Form::text('descripcion',null,['class'=>'form-control'])); ?>

</div>

<div class="form-group">
  <?php echo e(Form::submit('Crear tarea',['class'=>'btn btn-sm btn-primary'])); ?>

</div>
