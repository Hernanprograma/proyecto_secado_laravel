<div class="form-group">
  <?php echo e(Form::label('name','Nombre del rol')); ?>

  <?php echo e(Form::text('name',null,['class'=>'form-control'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('slug','Etiqueta del rol(slug)')); ?>

  <?php echo e(Form::text('slug',null,['class'=>'form-control'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('description','Descripcion del rol')); ?>

  <?php echo e(Form::text('description',null,['class'=>'form-control'])); ?>

</div>

<div class="form-group">

  <?php echo e(Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])); ?>

</div>
