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
                      <h4 class="card-title">Muestras de linea</h4>
                      <p class="category">Lista de Datos y muestras de linea de secado</p>
                    </div>
                    <div class="card-content">
                      <div class="toolbar">

                        <!--Here you can write extra buttons/actions for the toolbar-->
                          <a class="btn btn-info" href="<?php echo e(URL::previous()); ?>">Volver</a>

                        <?php if (\Shinobi::can('linea_muestras.create')): ?>
                        <a href="<?php echo e(route('linea_muestras.create')); ?>" class="btn btn-primary pull-right">
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
                              <th>Entrada </th>
                              <th>Salida</th>
                              <th colspan="3">&nbsp;</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $__currentLoopData = $linea_muestras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $linea_muestra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>

                              <td><?php echo e($linea_muestra->linea); ?></td>
                              <td><?php echo e(Carbon\Carbon::parse($linea_muestra->fecha)->format('d-m-Y')); ?></td>
                              <td><?php echo e(Carbon\Carbon::parse($linea_muestra->hora)->format('H:i')); ?></td>
                              <td><?php echo e($linea_muestra->sequedadentrada); ?></td>
                              <td><?php echo e($linea_muestra->sequedadsalida); ?></td>

                              <?php if (\Shinobi::can('linea_muestras.show')): ?>
                              <td style="padding:0">
                                <a href="<?php echo e(route('linea_muestras.show', $linea_muestra->id)); ?>" class="btn btn-sm btn-default">Ver</a>
                              </td>
                              <?php endif; ?>

                              <?php if (\Shinobi::can('linea_muestras.edit')): ?>
                              <td style="padding:0">
                                <a href="<?php echo e(route('linea_muestras.edit', $linea_muestra->id)); ?>" class="btn btn-sm btn-info">Editar</a>
                              </td>
                              <?php endif; ?>

                              <?php if (\Shinobi::can('linea_muestras.destroy')): ?>
                              <td style="padding:0">
                                <?php echo Form::open(['route'=>['linea_muestras.destroy',$linea_muestra->id], 'method'=>'DELETE']); ?>

                                <button class="btn btn-sm btn-danger">Eliminar</button> <?php echo Form::close(); ?>

                              </td>
                              <?php endif; ?>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                          </tbody>
                        </table>
                      </div>
                      <?php echo e($linea_muestras->render()); ?>

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
$('#nav-linea_muestras').addClass('active');
$('#nav-lecturas_secado').addClass('active');
$('#lecturas_secado').addClass('collapse in');
</script>

</html>
