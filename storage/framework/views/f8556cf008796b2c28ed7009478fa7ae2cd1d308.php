<div class="col-md-6">


  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Tareas</h4>
      <p class="category">Lista de tareas</p>
    </div>
    <div class="card-content">
      <div class="table-full-width table-tasks">
        <table class="table">
          <tbody>

            <tr>



              <?php $__currentLoopData = $tareas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tarea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($tarea->descripcion); ?>

                  <?php if (\Shinobi::can('tareas.destroy')): ?>
                  <td>
                    <td class="td-actions text-right">
                      <div class="table-icons">

                        <?php echo Form::open(['route'=>['tareas.destroy',$tarea->id], 'method'=>'DELETE']); ?>

                        <button class="btn btn-sm btn-danger">Eliminar</button> <?php echo Form::close(); ?>

                    </td>


                    </div>

                    <?php endif; ?>


                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer">
      <hr>
      <div class="stats">
        <i class="fa fa-history"></i> Updated 3 minutes ago
      </div>
    </div>
  </div>
</div>
