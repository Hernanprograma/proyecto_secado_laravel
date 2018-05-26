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
                      <h4 class="card-title">Datos de la linea</h4>
                      <p class="category">Lista de Datos de la linea</p>
                    </div>
                    <div class="card-content">
                      <div class="toolbar">

                        <!--Here you can write extra buttons/actions for the toolbar-->
                        <a class="btn btn-info" href="<?php echo e(URL::previous()); ?>">Volver</a>

                        <?php if (\Shinobi::can('linea_datos.create')): ?>
                        <a href="<?php echo e(route('linea_datos.create')); ?>" class="btn btn-primary pull-right">
                                                  Crear
                                                </a>
                        <?php endif; ?>


                      </div>
                      <div class="table-responsive">
                        <table  class="table table-striped table-hover">
                          <thead>
                            <tr>

                              <th>Línea</th>
                              <th>Fecha</th>
                              <th>Hora</th>
                              <th>Operario</th>
                              <th>TT1</th>
                              <th>TT2</th>
                              <th>TT3</th>
                              <th>TT4</th>
                              <th colspan="3">&nbsp;</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $__currentLoopData = $linea_datos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $linea_dato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>

                              <td><?php echo e($linea_dato->linea); ?></td>
                              <td><?php echo e(Carbon\Carbon::parse($linea_dato->fecha)->format('d-m-Y')); ?></td>
                              <td><?php echo e(Carbon\Carbon::parse($linea_dato->hora)->format('H:i')); ?></td>
                              <td>
                                <?php if(isset($linea_dato->user->name)): ?><?php echo e($linea_dato->user->name); ?>

                                  <?php endif; ?>
                              </td>
                              <td><?php echo e($linea_dato->tt1); ?></td>
                              <td><?php echo e($linea_dato->tt2); ?></td>
                              <td><?php echo e($linea_dato->tt3); ?></td>
                              <td><?php echo e($linea_dato->tt4); ?></td>

                              <?php if (\Shinobi::can('linea_datos.show')): ?>
                              <td style="padding:0">
                                <a href="<?php echo e(route('linea_datos.show', $linea_dato->id)); ?>" class="btn btn-sm btn-default">Ver</a>
                              </td>
                              <?php endif; ?>

                              <?php if (\Shinobi::can('linea_datos.edit')): ?>
                              <td style="padding:0">
                                <a href="<?php echo e(route('linea_datos.edit', $linea_dato->id)); ?>" class="btn btn-sm btn-info">Editar</a>
                              </td>
                              <?php endif; ?>

                              <?php if (\Shinobi::can('linea_datos.destroy')): ?>
                              <td style="padding:0">
                                <?php echo Form::open(['route'=>['linea_datos.destroy',$linea_dato->id], 'method'=>'DELETE']); ?>

                                <button class="btn btn-sm btn-danger">Eliminar</button> <?php echo Form::close(); ?>

                              </td>
                              <?php endif; ?>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                          </tbody>
                        </table>
                      </div>
                      <?php echo e($linea_datos->render()); ?>

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
  $('#nav-linea_datos').addClass('active');
</script>

</html>
