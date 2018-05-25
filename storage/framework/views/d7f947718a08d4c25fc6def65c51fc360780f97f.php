
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
                      <h4 class="card-title">Polielectrolito</h4>
                      <p class="category">Lista de marcas </p>
                    </div>
                    <div class="card-content">
                      <!--colocar el contenido aqui-->
                      <div class="toolbar">

                          <!--Here you can write extra buttons/actions for the toolbar-->
                          <a class="btn btn-info" href="<?php echo e(URL::previous()); ?>">Volver</a>

                            <?php if (\Shinobi::can('poli_marcas.create')): ?>
                            <a href="<?php echo e(route('poli_marcas.create')); ?>" class="btn btn-primary pull-right">
                                      Crear
                                    </a>


                            <?php endif; ?>


                      </div>

                        <table id="bootstrap-table" class="table">
                        <thead>
                          <tr>
                            <th width="10px">ID</th>
                            <th>Marca</th>
                            <th>Precio </th>
                            <th>Peso</th>
                            <th colspan="3">&nbsp;</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $__currentLoopData = $poli_marcas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poli_marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <td><?php echo e($poli_marca->id); ?></td>
                            <td><?php echo e($poli_marca->name); ?></td>
                            <td><?php echo e($poli_marca->precio); ?></td>
                            <td><?php echo e($poli_marca->peso); ?></td>
                            <?php if (\Shinobi::can('poli_marcas.show')): ?>
                            <td width="10px">
                              <a href="<?php echo e(route('poli_marcas.show', $poli_marca->id)); ?>" class="btn btn-sm btn-default">Ver</a>
                            </td>
                            <?php endif; ?>

                            <?php if (\Shinobi::can('poli_marcas.edit')): ?>
                            <td width="10px">
                              <a href="<?php echo e(route('poli_marcas.edit', $poli_marca->id)); ?>" class="btn btn-sm btn-info">Editar</a>
                            </td>
                            <?php endif; ?>

                            <?php if (\Shinobi::can('poli_marcas.destroy')): ?>
                            <td width="10px">
                              <?php echo Form::open(['route'=>['poli_marcas.destroy',$poli_marca->id], 'method'=>'DELETE']); ?>

                              <button class="btn btn-sm btn-danger">Eliminar</button> <?php echo Form::close(); ?>

                            </td>
                            <?php endif; ?>

                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </tbody>



                      </table>
                      <?php echo e($poli_marcas->render()); ?>



                      <!--fin del contenido-->


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
  $('#nav-poli').addClass('active');
</script>

</html>
