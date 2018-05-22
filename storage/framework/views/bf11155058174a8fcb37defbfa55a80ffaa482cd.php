<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          Roles
          <?php if (\Shinobi::can('roles.create')): ?>
          <a href="<?php echo e(route('roles.create')); ?>" class="btn-sm btn-primary pull-right">
                    Crear
                  </a>


          <?php endif; ?>

        </div>

        <div class="panel-body">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th width="10px">ID</th>
                <th>Name</th>
                <th>Description </th>

                <th colspan="3">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($role->id); ?></td>
                <td><?php echo e($role->name); ?></td>
                <td><?php echo e($role->description); ?></td>

                <?php if (\Shinobi::can('roles.show')): ?>
                <td width="10px">
                  <a href="<?php echo e(route('roles.show', $role->id)); ?>" class="btn btn-sm btn-default">Ver</a>
                </td>
                <?php endif; ?>

                <?php if (\Shinobi::can('roles.edit')): ?>
                <td width="10px">
                  <a href="<?php echo e(route('roles.edit', $role->id)); ?>" class="btn btn-sm btn-info">Editar</a>
                </td>
                <?php endif; ?>

                <?php if (\Shinobi::can('roles.destroy')): ?>
                <td width="10px">
                  <?php echo Form::open(['route'=>['roles.destroy',$role->id], 'method'=>'DELETE']); ?>

                  <button class="btn btn-sm btn-danger">Eliminar</button> <?php echo Form::close(); ?>

                </td>
                <?php endif; ?>

              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </tbody>



          </table>
          <?php echo e($roles->render()); ?>



        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>