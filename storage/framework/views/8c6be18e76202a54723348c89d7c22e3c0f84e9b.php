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
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th width="20px">Dato</th>
                            <th width="30px">Valor</th>

                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <tr>
                              <td><strong>Fecha </strong></td>
                              <td><?php echo e(Carbon\Carbon::parse($linea_dato->fecha)->format('d-m-Y')); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Hora </strong></td>
                              <td><?php echo e(Carbon\Carbon::parse($linea_dato->hora)->format('H:i')); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Linea</strong></td>
                              <td><?php echo e($linea_dato->linea); ?> </td>
                            </tr>
                            <tr>
                              <td><strong>Entrada </strong></td>
                              <td><?php echo e($linea_dato->sequedadentrada); ?> </td>
                            </tr>
                            <tr>
                              <td><strong>Salida </strong></td>
                              <td><?php echo e($linea_dato->sequedadsalida); ?> </td>
                            </tr>
                            <tr>
                              <td><strong>TT1 </strong></td>
                              <td><?php echo e($linea_dato->tt1); ?> </td>
                            </tr>
                            <tr>
                              <td><strong>TT2 </strong></td>
                              <td><?php echo e($linea_dato->tt2); ?> </td>
                            </tr>
                            <tr>
                              <td><strong>TT3 </strong></td>
                              <td><?php echo e($linea_dato->tt3); ?> </td>
                            </tr>
                            <tr>
                              <td><strong>TT4 </strong></td>
                              <td><?php echo e($linea_dato->tt4); ?> </td>
                            </tr>
                            <tr>
                              <td><strong>Intensidad del tambor </strong></td>
                              <td><?php echo e($linea_dato->intensidadtambor); ?>A </td>
                            </tr>
                            <tr>
                              <td><strong>Herzios Bomba </strong></td>
                              <td><?php echo e($linea_dato->herziosbomba); ?>Hz </td>
                            </tr>
                            <tr>
                              <td><strong>Vueltas de la bomba</strong></td>
                              <td><?php echo e($linea_dato->vueltasbomba); ?> </td>
                            </tr>
                            <tr>
                              <td><strong>Nivel del silo de fango humedo </strong></td>
                              <td><?php echo e($linea_dato->nivelsilo); ?> </td>
                            </tr>
                            <tr>
                              <td><strong>Posicion válvula ventilador </strong></td>
                              <td><?php echo e($linea_dato->posicionvalvula); ?> </td>
                            </tr>
                            <tr>
                              <td><strong>Crea registro </strong></td>
                              <td>
                                <?php if(isset($linea_dato->user->name)): ?><?php echo e($linea_dato->user->name); ?>

                                  <?php endif; ?>
                              </td>
                            </tr>
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
  $('#nav-linea_datos').addClass('active');
</script>

</html>
