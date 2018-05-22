<div class="form-group">
  <?php echo e(Form::label('name','Nombre')); ?> <?php echo e(Form::text('name',null,['class'=>'form-control'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('email','Email')); ?> <?php echo e(Form::text('email',null,['class'=>'form-control'])); ?>

</div>

<div class="form-group">
  <ul class="list-unstyled">
    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
      <label>
  <?php echo e(Form::checkbox('roles[]', $role->id,null)); ?>

  <?php echo e($role->name); ?>

   <em>(<?php echo e($role->description ?: 'Sin descripcion'); ?>)</em>
</label>

    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </ul>
</div>


<div class="form-group">

  <?php echo e(Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])); ?>

</div>
