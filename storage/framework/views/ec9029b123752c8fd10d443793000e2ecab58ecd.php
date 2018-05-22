

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
                      <h4 class="card-title">Centífugas</h4>
                      <p class="category">Detalles de muestra de la centrífuga</p>
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
                            <tr><td><strong>Centrifuga</strong></td><td><?php echo e($centrifuga->centrifuga); ?> </td></tr>
                            <tr><td><strong>Entrada </strong></td><td><?php echo e($centrifuga->entrada); ?> </td></tr>
                            <tr><td><strong>Salida </strong></td><td><?php echo e($centrifuga->salida); ?> </td></tr>
                            <tr><td><strong>Consigna </strong></td><td><?php echo e($centrifuga->consigna); ?> </td></tr>
                            <tr><td><strong>VA </strong></td><td><?php echo e($centrifuga->va); ?> </td></tr>
                            <tr><td><strong>VR </strong></td><td><?php echo e($centrifuga->vr); ?> </td></tr>
                            <tr><td><strong>Par </strong></td><td><?php echo e($centrifuga->par); ?> </td></tr>
                            <tr><td><strong>Temp entrada centrifuga </strong></td><td><?php echo e($centrifuga->t_entrada); ?> </td></tr>
                            <tr><td><strong>Temp_salida centrifuga </strong></td><td><?php echo e($centrifuga->t_salida); ?> </td></tr>
                            <tr><td><strong>Vibracion centrifuga </strong></td><td><?php echo e($centrifuga->vibracion); ?> </td></tr>
                            <tr><td><strong>Caudal entrada a centrifuga </strong></td><td><?php echo e($centrifuga->caudal_ent); ?> </td></tr>
                            <tr><td><strong>Marca de poli </strong></td><td><?php echo e($centrifuga->marcapoli); ?> </td></tr>
                            <tr><td><strong>Caudal de poli </strong></td><td><?php echo e($centrifuga->caudal_poli); ?> </td></tr>
                            <tr><td><strong>Aspecto escurrido </strong></td><td><?php echo e($centrifuga->aspecto); ?> </td></tr>
                            <tr><td><strong>Fecha </strong></td><td><?php echo e(Carbon\Carbon::parse($centrifuga->fecha)->format('d-m-Y')); ?></td></tr>
                            <tr><td><strong>Hora </strong></td><td><?php echo e(Carbon\Carbon::parse($centrifuga->hora)->format('H:i')); ?></td></tr>
                            <tr><td><strong>Usuario dato </strong></td><td><?php if(isset($centrifuga->user->name)): ?><?php echo e($centrifuga->user->name); ?> <?php endif; ?></td></tr>

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
  $('#nav-cent').addClass('active');
</script>

</html>
