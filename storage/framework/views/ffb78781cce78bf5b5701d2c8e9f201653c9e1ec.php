<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          Usuarios

        </div>

        <div class="panel-body">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th width="10px">ID</th>
                <th>Nombre</th>

                <th colspan="3">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($user->id); ?></td>
                <td><?php echo e($user->name); ?></td>

                <?php if (\Shinobi::can('users.show')): ?>
                <td width="10px">
                  <a href="<?php echo e(route('users.show', $user->id)); ?>" class="btn btn-sm btn-default">Ver</a>
                </td>
                <?php endif; ?>

                <?php if (\Shinobi::can('users.edit')): ?>
                <td width="10px">
                  <a href="<?php echo e(route('users.edit', $user->id)); ?>" class="btn btn-sm btn-info">Editar</a>
                </td>
                <?php endif; ?>

                <?php if (\Shinobi::can('users.destroy')): ?>
                <td width="10px">
                  <?php echo Form::open(['route'=>['users.destroy',$user->id], 'method'=>'DELETE']); ?>

                  <button class="btn btn-sm btn-danger">Eliminar</button> <?php echo Form::close(); ?>

                </td>
                <?php endif; ?>

              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </tbody>



          </table>
          <?php echo e($users->render()); ?>



        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>