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




          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Polielectrolito</h4>
                  <p class="category">Genera informe de poli gastado</p>

                </div>


                  <div class="card-content">
                    <div class="toolbar">
                        <div class="row">
                      <div class="form-group col-md-2 col-xs-6">

                      <a class="btn btn-info" href="<?php echo e(URL::previous()); ?>">Volver</a>
                    </div>




                      <div class="form-group col-md-3 col-xs-12">
                        <?php echo e(Form::date('fecha', \Illuminate\Support\Carbon::now(), ['class'=>'form-control','id'=>'fechaini'])); ?> <?php echo e(Form::label('fecha','Fecha Inicial')); ?>

                      </div>



                        <div class="form-group col-md-3 col-xs-12">

                        <?php echo e(Form::date('fecha', \Illuminate\Support\Carbon::now(), ['class'=>'form-control','id'=>'fechafin'])); ?> <?php echo e(Form::label('fecha','Fecha Final')); ?>

                      </div>

                      <div class="form-group col-md-2 col-xs-12">
                        <input type="button" value="Mostrar datos  " class="btn btn-info btn-block" onclick="getDatos()">
                      </div>
                      <div class="form-group col-md-2 col-xs-12">

                        <select id="tipo-informe" class="selectpicker" name="tipo-reporte" data-style="btn btn-warning btn-block" title="Tipo de informe" data-size="3">
                          <option value="excel">Excel</option>
                          <option value="pdf">PDF</option>

                        </select>
                      </div>




                    </div>
                  </div>


                    <table id="bootstrap-table">



                      <thead>


                        <th data-field="operario" class="text-center" data-sortable="true">Nombre</th>
                        <th data-field="fecha" data-sortable="true" data-visible="true" data-formatter="dateFormat">Fecha</th>
                        <th data-field="hora" data-sortable="true" data-visible="true">Hora</th>
                        <th data-field="marca" data-sortable="true" data-visible="true">Marca de poli</th>
                        <th data-field="incidencias" data-sortable="true">Incidencias</th>

                      </thead>
                      <tbody>

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
        <!-- end col-md-12 -->



        <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </div>
    </div>
</body>

<?php echo $__env->make('partials.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<!-- Scripts Charts-->
<script src="<?php echo e(asset('js/scripts_informe_gasto_poli.js')); ?>"></script>

<script type="text/javascript">
  $('#nav-informes').addClass('active');
  $('#informes').addClass('collapse in');
  $('#nav-informes-poli').addClass('active');
</script>


<script type="text/javascript" src="<?php echo e(asset('libs/FileSaver/FileSaver.min.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('libs/jsPDF/jspdf.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('libs/jsPDF-AutoTable/jspdf.plugin.autotable.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('js/tableExport.min.js')); ?>"></script>

</html>
