
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
	                                <h4 class="card-title">Estado de Centrífugas</h4>
	                                <p class="category">Edita el estado de las centrífugas</p>
	                            </div>
                              <div class="card-content">
                                  <div class="toolbar">

                                      <!--Here you can write extra buttons/actions for the toolbar-->

                                        <?php if (\Shinobi::can('marcha_centrifugas.create')): ?>
                                        <a href="<?php echo e(route('marcha_centrifugas.create')); ?>" class="btn btn-primary pull-right">
                                                  Crear
                                                </a>
                                        <?php endif; ?>


                                  </div>
                                  <div class="table-responsive">
                                  <table class="table">
                                    <thead>
                                      <tr>

                                        <th>Operario</th>
                                        <th>Centrifuga</th>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Estado </th>
                                        <th>Incidencias</th>
                                        <th colspan="3">&nbsp;</th>
                                      </tr>
                                    </thead>
                                      <tbody>
                                        <?php $__currentLoopData = $marcha_centrifugas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marcha_centrifuga): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>


                                          <td><?php if(isset($marcha_centrifuga->user->name)): ?><?php echo e($marcha_centrifuga->user->name); ?> <?php endif; ?></td>
                                          <td><?php echo e($marcha_centrifuga->centrifuga); ?></td>
                                          <td><?php echo e(Carbon\Carbon::parse($marcha_centrifuga->fecha)->format('d-m-Y')); ?></td>
                                          <td><?php echo e($marcha_centrifuga->hora); ?></td>
                                          <td><?php echo e($marcha_centrifuga->estado); ?></td>
                                          <td><?php echo e($marcha_centrifuga->incidencias); ?></td>


                                          <?php if (\Shinobi::can('marcha_centrifugas.edit')): ?>
                                            <td style="padding:0">
                                            <a href="<?php echo e(route('marcha_centrifugas.edit', $marcha_centrifuga->id)); ?>" class="btn btn-sm btn-info">Editar</a>
                                          </td>
                                          <?php endif; ?>

                                          <?php if (\Shinobi::can('marcha_centrifugas.destroy')): ?>
                                          <td style="padding:0">
                                            <?php echo Form::open(['route'=>['marcha_centrifugas.destroy',$marcha_centrifuga->id], 'method'=>'DELETE']); ?>

                                            <button class="btn btn-sm btn-danger">Eliminar</button> <?php echo Form::close(); ?>

                                          </td>
                                          <?php endif; ?>

                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                      </tbody>
                                  </table>
                                </div>
                                  <?php echo e($marcha_centrifugas->render()); ?>

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
  $('#nav-marcha_centrifugas').addClass('active');
</script>

</html>
