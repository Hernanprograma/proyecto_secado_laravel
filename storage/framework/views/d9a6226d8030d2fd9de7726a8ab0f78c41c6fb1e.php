

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
                      <p class="category">Lista de muestras de la linea</p>
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
                            <tr><td><strong>Fecha </strong></td><td><?php echo e(Carbon\Carbon::parse($linea_muestra->fecha)->format('d-m-Y')); ?></td></tr>
                            <tr><td><strong>Hora </strong></td><td><?php echo e(Carbon\Carbon::parse($linea_muestra->hora)->format('H:i')); ?></td></tr>
                            <tr><td><strong>Linea</strong></td><td><?php echo e($linea_muestra->linea); ?> </td></tr>
                            <tr><td><strong>Entrada </strong></td><td><?php echo e($linea_muestra->sequedadentrada); ?> </td></tr>
                            <tr><td><strong>Salida </strong></td><td><?php echo e($linea_muestra->sequedadsalida); ?> </td></tr>
                            <tr><td><strong>TT1 </strong></td><td><?php echo e($linea_muestra->tt1); ?> </td></tr>
                            <tr><td><strong>TT2 </strong></td><td><?php echo e($linea_muestra->tt2); ?> </td></tr>
                            <tr><td><strong>TT3 </strong></td><td><?php echo e($linea_muestra->tt3); ?> </td></tr>
                            <tr><td><strong>TT4 </strong></td><td><?php echo e($linea_muestra->tt4); ?> </td></tr>
                            <tr><td><strong>Intensidad del tambor </strong></td><td><?php echo e($linea_muestra->intensidadtambor); ?>A </td></tr>
                            <tr><td><strong>Herzios Bomba </strong></td><td><?php echo e($linea_muestra->herziosbomba); ?>Hz </td></tr>
                            <tr><td><strong>Vueltas de la bomba</strong></td><td><?php echo e($linea_muestra->vueltasbomba); ?> </td></tr>
                            <tr><td><strong>Nivel del silo de fango humedo </strong></td><td><?php echo e($linea_muestra->nivelsilo); ?> </td></tr>
                            <tr><td><strong>Posicion válvula ventilador </strong></td><td><?php echo e($linea_muestra->posicionvalvula); ?> </td></tr>
                            <tr><td><strong>Crea registro </strong></td><td><?php if(isset($linea_muestra->user->name)): ?><?php echo e($linea_muestra->user->name); ?> <?php endif; ?></td></tr>

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
  $('#nav-linea_muestras').addClass('active');
</script>

</html>
