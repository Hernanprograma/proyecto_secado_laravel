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
                      <h4 class="card-title">Niveles y estados</h4>
                      <p class="category">Lista de los estados</p>
                    </div>
                    <div class="card-content">
                      <div class="toolbar">

                        <!--Here you can write extra buttons/actions for the toolbar-->
                        <a class="btn btn-info" href="<?php echo e(URL::previous()); ?>">Volver</a>

                        <?php if (\Shinobi::can('nivels.create')): ?>
                        <a href="<?php echo e(route('nivels.create')); ?>" class="btn btn-primary pull-right">
                                                  Modificar ultimos niveles
                                                </a>
                        <?php endif; ?>


                      </div>
                      <div class="table-responsive">
                        <table  class="table table-striped table-hover">
                          <thead>
                            <tr>

                              <th>Gas</th>
                              <th>Silo nuevo</th>
                              <th>Silo almacen</th>
                              <th>Digestor</th>


                              <th colspan="3">&nbsp;</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $__currentLoopData = $nivels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nivel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



                              <td><?php echo e($nivel->gas); ?></td>
                              <td><?php echo e($nivel->silo_nuevo); ?></td>
                              <td><?php echo e($nivel->silo_almacen); ?></td>
                              <td><?php echo e($nivel->digestor); ?></td>

                              <?php if (\Shinobi::can('nivels.show')): ?>
                              <td style="padding:0">
                                <a href="<?php echo e(route('nivels.show', $nivel->id)); ?>" class="btn btn-sm btn-default">Ver</a>
                              </td>
                              <?php endif; ?>

                              <?php if (\Shinobi::can('nivels.edit')): ?>
                              <td style="padding:0">
                                <a href="<?php echo e(route('nivels.edit', $nivel->id)); ?>" class="btn btn-sm btn-info">Editar</a>
                              </td>
                              <?php endif; ?>

                              <?php if (\Shinobi::can('nivels.destroy')): ?>
                              <td style="padding:0">
                                <?php echo Form::open(['route'=>['nivels.destroy',$nivel->id], 'method'=>'DELETE']); ?>

                                <button class="btn btn-sm btn-danger">Eliminar</button> <?php echo Form::close(); ?>

                              </td>
                              <?php endif; ?>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                          </tbody>
                        </table>
                      </div>
                      <?php echo e($nivels->render()); ?>

                    </div>
                  </div>
                  <!--  end card  -->
                </div>
                <!-- end col-md-12 -->
              </div>
              <!-- end row -->
            </div>
          </div>


          <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
      </div>
</body>

<?php echo $__env->make('partials.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<!-- Scripts Charts-->


<script type="text/javascript">
  $('#nav-nivels').addClass('active');
</script>

</html>
