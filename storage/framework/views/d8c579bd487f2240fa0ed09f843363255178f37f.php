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
                      <h4 class="card-title">Simbiotica</h4>
                      <p class="category">Detalle dato de la simbiótica</p>
                    </div>
                    <div class="card-content">

                        <table  class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th width="20px">Dato</th>
                            <th width="30px">Valor</th>

                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <tr><td><strong>ID</strong></td><td><?php echo e($simbiotica->id); ?> </td></tr>
                            <tr><td><strong>Caudal </strong></td><td><?php echo e($simbiotica->caudal); ?> </td></tr>
                            <tr><td><strong>Totalizado </strong></td><td><?php echo e($simbiotica->totalizado); ?> </td></tr>
                            <tr><td><strong>Incidencias </strong></td><td><?php echo e($simbiotica->incidencias); ?> </td></tr>
                            <tr><td><strong>Fecha </strong></td><td><?php echo e(Carbon\Carbon::parse($simbiotica->fecha)->format('d-m-Y')); ?></td></tr>
                            <tr><td><strong>Hora </strong></td><td><?php echo e(Carbon\Carbon::parse($simbiotica->hora)->format('H:i')); ?></td></tr>
                            <tr><td><strong>Crea registro</strong></td><td><?php if(isset($simbiotica->user->name)): ?><?php echo e($simbiotica->user->name); ?> <?php endif; ?></td></tr>

                          </tr>


                        </tbody>
                      </table>






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
  $('#nav-simbio').addClass('active');
</script>

</html>
