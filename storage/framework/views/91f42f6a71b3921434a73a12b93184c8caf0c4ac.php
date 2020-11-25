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
                      <h4 class="card-title">Usuario</h4>
                      <p class="category">Detalles del usuario</p>
                    </div>
                    <div class="card-content">
                      <div class="toolbar">

                        <!--Here you can write extra buttons/actions for the toolbar-->
                        <a class="btn btn-info" href="<?php echo e(URL::previous()); ?>">Volver</a>

                      </div>

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
                              <td><strong>ID</strong></td>
                              <td><?php echo e($user->id); ?> </td>
                            </tr>
                            <tr>
                              <td><strong>Nombre </strong></td>
                              <td><?php echo e($user->name); ?> </td>
                            </tr>
                            <tr>
                              <td><strong>Email </strong></td>
                              <td><?php echo e($user->email); ?> </td>
                            </tr>
                            <tr>
                              <td><strong>Apellidos </strong></td>
                              <td><?php echo e($user->surname); ?> </td>
                            </tr>
                            <tr>
                              <td><strong>Creado </strong></td>
                              <td><?php echo e(Carbon\Carbon::parse($user->created_at)->format('d-m-Y H:i')); ?> </td>
                            </tr>
                            <tr>
                              <td><strong>Editado </strong></td>
                              <td><?php echo e(Carbon\Carbon::parse($user->updated_at)->format('d-m-Y H:i')); ?> </td>
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
  $('#nav-user').addClass('active');
  $('#nav-gestion').addClass('active');
  $('#gestion').addClass('collapse in');
</script>

</html>
