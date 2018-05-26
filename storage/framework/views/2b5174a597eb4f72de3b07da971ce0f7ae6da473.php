
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
	                                <h4 class="card-title">Gasto de Polielectrolito</h4>
	                                <p class="category">Lista de sacos de poli Gastados</p>
	                            </div>
                              <div class="card-content">
                                  <div class="toolbar">

                                      <!--Here you can write extra buttons/actions for the toolbar-->
                                        <a class="btn btn-info" href="<?php echo e(URL::previous()); ?>">Volver</a>

                                        <?php if (\Shinobi::can('gasto_polis.create')): ?>
                                        <a href="<?php echo e(route('gasto_polis.create')); ?>" class="btn btn-primary pull-right">
                                                  Crear
                                                </a>
                                        <?php endif; ?>


                                  </div>
                                  <div class="table-responsive">
                                    <table  class="table table-striped table-hover">
                                    <thead>
                                      <tr>

                                        <th>Operario</th>
                                        <th>Marca de poli</th>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Incidencias</th>
                                        <th colspan="3">&nbsp;</th>
                                      </tr>
                                    </thead>
                                      <tbody>

                                        <?php $__currentLoopData = $gasto_polis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gasto_poli): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>


                                          <td><?php if(isset($gasto_poli->user->name)): ?><?php echo e($gasto_poli->user->name); ?> <?php endif; ?></td>
                                          <td><?php if(isset($gasto_poli->poli->name)): ?><?php echo e($gasto_poli->poli->name); ?> <?php endif; ?></td>
                                          <td><?php echo e(Carbon\Carbon::parse($gasto_poli->fecha)->format('d-m-Y')); ?></td>
                                          <td><?php echo e($gasto_poli->hora); ?></td>
                                          <td><?php echo e($gasto_poli->incidencias); ?></td>


                                          <?php if (\Shinobi::can('gasto_polis.edit')): ?>
                                            <td style="padding:0">
                                            <a href="<?php echo e(route('gasto_polis.edit', $gasto_poli->id)); ?>" class="btn btn-sm btn-info">Editar</a>
                                          </td>
                                          <?php endif; ?>

                                          <?php if (\Shinobi::can('gasto_polis.destroy')): ?>
                                          <td style="padding:0">
                                            <?php echo Form::open(['route'=>['gasto_polis.destroy',$gasto_poli->id], 'method'=>'DELETE']); ?>

                                            <button class="btn btn-sm btn-danger">Eliminar</button> <?php echo Form::close(); ?>

                                          </td>
                                          <?php endif; ?>

                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                      </tbody>
                                  </table>
                                </div>
                                  <?php echo e($gasto_polis->render()); ?>

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
  $('#nav-gasto_polis').addClass('active');
</script>

</html>
