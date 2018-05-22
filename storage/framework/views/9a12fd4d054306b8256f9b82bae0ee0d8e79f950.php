<div class="form-group">
  <?php echo e(Form::label('name','Nombre del rol')); ?> <?php echo e(Form::text('name',null,['class'=>'form-control'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('slug','Etiqueta del rol(slug)')); ?> <?php echo e(Form::text('slug',null,['class'=>'form-control'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('description','Descripcion del rol')); ?> <?php echo e(Form::text('description',null,['class'=>'form-control'])); ?>

</div>

<?php if($permisos): ?>
<div class="form-group">
  <ul class="list-unstyled">

    <?php $__currentLoopData = $permisos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permiso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
      <label>
        <input type="checkbox" name="permisos[]" value="<?php echo e($permiso->id); ?>" <?php if($role->permissions->contains($permiso)): ?> checked <?php endif; ?>>

  <?php echo e($permiso->id); ?>

   <em>(<?php echo e($permiso->description ?: 'Sin descripcion'); ?>)</em>
</label>

    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ul>
</div>
<?php endif; ?>

<div class="form-group">

  <?php echo e(Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])); ?>

</div>
