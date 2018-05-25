<!doctype html>
<html lang="es">
<!--CABECERAS DE HTML  ...esta en la ruta views/partials/head-->
<?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body>
  <div class="wrapper">
    <!--BARRA IZQUIERDA DE MENUS ......esta en la ruta views/partials/sidebar-->
    <?php echo $__env->make('partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="main-panel">
      <!--BARRA SUPERIOR DE MENUS ......esta en la ruta views/partials/sidebar-->
      <?php echo $__env->make('partials.defaultbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <div class="content">
        <div class="container-fluid">




          <div class="content">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="card">
                            <div class="card-header">
	                                <h4 class="card-title">Usuarios</h4>
	                                <p class="category">Lista de Usuarios</p>
	                            </div>
                              <div class="card-content">
                                <div class="toolbar">

                                  <!--Here you can write extra buttons/actions for the toolbar-->
                                  <a class="btn btn-info" href="<?php echo e(URL::previous()); ?>">Volver</a>

                                </div>
                                  <table class="table ">
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
                          </div><!--  end card  -->
                      </div> <!-- end col-md-12 -->
                  </div> <!-- end row -->
              </div>
          </div>


            <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </div>
        </div>
</body>

<?php echo $__env->make('partials.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<!-- Scripts Charts-->


<script type="text/javascript">
  $('#nav-user').addClass('active');
</script>

</html>
