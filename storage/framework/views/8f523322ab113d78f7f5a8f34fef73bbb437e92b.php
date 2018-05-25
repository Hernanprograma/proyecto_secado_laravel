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
                    <div class="card-header ">



                        <h4 class="card-title">Turnos</h4>
                        <p class="category">Lista de los turnos</p>



                    </div>

                    <div class="card-content">
                      <div class="toolbar">

                        <!--Here you can write extra buttons/actions for the toolbar-->
                        <a class="btn btn-info" href="<?php echo e(URL::previous()); ?>">Volver</a>
                        <?php if (\Shinobi::can('turnos.create')): ?>
                        <a href="<?php echo e(route('turnos.create')); ?>" class="btn btn-primary pull-right">
                                                  Crear
                                                </a>
                        <?php endif; ?>


                      </div>
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Turno</th>
                              <th>Operario</th>
                              <th>Fecha</th>
                              <th>Hora</th>

                              <th>Tareas</th>
                              <th colspan="3">&nbsp;</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $__currentLoopData = $turnos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $turno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>

                              <td><?php echo e($turno->turno); ?></td>
                              <td>
                                <?php if(isset($turno->user->name)): ?><?php echo e($turno->user->name); ?>

                                  <?php endif; ?></td>

                                    <td><?php echo e(Carbon\Carbon::parse($turno->fecha)->format('d-m-Y')); ?></td>
                                    <td><?php echo e(Carbon\Carbon::parse($turno->hora)->format('H:i')); ?></td>

                                    <td>

                                      <?php $__currentLoopData = $tareas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tarea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <?php if($tarea->turno_id==$turno->id): ?><?php echo e($tarea->hora); ?>-<?php echo e($tarea->descripcion); ?><br>

                                        <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </td>
                                    <?php if (\Shinobi::can('tareas.create')): ?>
                                    <td>
                                      
                                    <a href="<?php echo e(route('tareas.create',$turno)); ?>" class="btn btn-sm btn-warning">
                                                              Tareas
                                                            </a>
                                    </td>
                                    <?php endif; ?>

                                    <?php if (\Shinobi::can('turnos.edit')): ?>
                                    <td style="padding:0">
                                      <a href="<?php echo e(route('turnos.edit', $turno->id)); ?>" class="btn btn-sm btn-info">Editar</a>
                                    </td>
                                    <?php endif; ?>

                                    <?php if (\Shinobi::can('turnos.destroy')): ?>
                                    <td style="padding:0">
                                      <?php echo Form::open(['route'=>['turnos.destroy',$turno->id], 'method'=>'DELETE']); ?>

                                      <button class="btn btn-sm btn-danger">Eliminar</button> <?php echo Form::close(); ?>

                                    </td>
                                    <?php endif; ?>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                          </tbody>
                        </table>
                      </div>
                      <?php echo e($turnos->render()); ?>

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
  $('#nav-turnos').addClass('active');
</script>

</html>
