<div class="form-group">
  <?php echo e(Form::label('name','Marca de poli')); ?>

  <?php echo e(Form::text('name',null,['class'=>'form-control'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('peso','Peso')); ?>

  <?php echo e(Form::text('peso',null,['class'=>'form-control'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('precio','Precio')); ?>

  <?php echo e(Form::text('precio',null,['class'=>'form-control'])); ?>

</div>
<div class="form-group">

  <?php echo e(Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])); ?>

</div>
