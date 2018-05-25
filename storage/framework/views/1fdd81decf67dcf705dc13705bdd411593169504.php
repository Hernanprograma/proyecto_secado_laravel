<div class="form-group" >
  <?php echo e(Form::label('turno','Centrifuga')); ?><?php echo e(Form::select('turno', ['MAÑANA'=>'MAÑANA','TARDE'=>'TARDE','NOCHE'=>'NOCHE'], null, ['class'=>'form-control'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('fecha','Fecha')); ?>

<?php echo e(Form::date('fecha',null, ['class'=>'form-control'])); ?>

</div>

<div class="form-group">
<?php echo e(Form::label('hora','Hora')); ?>

<?php echo e(Form::time('hora',null, ['class'=>'form-control'])); ?>

</div>


<div class="form-group">
  <?php echo e(Form::label('incidencias','Incidencias')); ?> <?php echo e(Form::textarea('incidencias',null,['class'=>'form-control'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])); ?>

</div>
