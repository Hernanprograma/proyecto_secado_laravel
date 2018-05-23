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
                      <h4 class="card-title">Datos de la linea</h4>
                      <p class="category">Lista de datos la linea</p>
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
                              <td><strong>Operario </strong></td>
                              <td>
                                <?php if(isset($linea_dato->user->name)): ?><?php echo e($linea_dato->user->name); ?>

                                  <?php endif; ?>
                              </td>
                            </tr>
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
                              <td><strong>Intensidad total </strong></td>
                              <td><?php echo e($linea_dato->intensidad_total); ?> </td>
                            </tr>
                            <tr>
                              <td><strong>Intensidad Tambor </strong></td>
                              <td><?php echo e($linea_dato->intensidad_tambor); ?>A </td>
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
                              <td><strong>Intensidad ventilador principal</strong></td>
                              <td><?php echo e($linea_dato->intensidad_ve2); ?>A </td>
                            </tr>
                            <tr>
                              <td><strong>Caudal totalizado entrada scruber</strong></td>
                              <td><?php echo e($linea_dato->total_caudal_entrada_scruber); ?> </td>
                            </tr>
                            <tr>
                              <td><strong>Caudal totalizado salida scruber </strong></td>
                              <td><?php echo e($linea_dato->total_caudal_salida_scruber); ?> </td>
                            </tr>
                            <tr>
                              <td><strong>Caudal recirculacion scruber </strong></td>
                              <td><?php echo e($linea_dato->caudal_recirc_scruber); ?> </td>
                            </tr>

                            <tr>
                              <td><strong>Temperatura aceite ent tambor</strong></td>
                              <td><?php echo e($linea_dato->temp_aceite_entrada_tambor); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Presion Salida Tambor</strong></td>
                              <td><?php echo e($linea_dato->presion_salida_tambor); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Presion Entrada Scruber</strong></td>
                              <td><?php echo e($linea_dato->presion_entrada_scruber); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Presion entrada Condensador</strong></td>
                              <td><?php echo e($linea_dato->presion_entrada_condensador); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Presion salida Condensador</strong></td>
                              <td><?php echo e($linea_dato->presion_salida_condensador); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Posicion valvula VE2</strong></td>
                              <td><?php echo e($linea_dato->posicionvalvula_ve2); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Posicion val vent purga </strong></td>
                              <td><?php echo e($linea_dato->posicionvalvula_purga); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Presion ent tambor</strong></td>
                              <td><?php echo e($linea_dato->presion_entrada_tambor); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Variador Eléctrico</strong></td>
                              <td><?php echo e($linea_dato->variador_electrico); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Variador mecánico</strong></td>
                              <td><?php echo e($linea_dato->variador_mecanico); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Vueltas Bomba</strong></td>
                              <td><?php echo e($linea_dato->vueltas_bomba); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Temperatura aceite entrada intercambiador</strong></td>
                              <td><?php echo e($linea_dato->temp_aceite_ent_intercambiador); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Temperatura aceite salida intercambiador</strong></td>
                              <td><?php echo e($linea_dato->temp_aceite_salida_intercambiador); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Temperatura agua entrada condensador</strong></td>
                              <td><?php echo e($linea_dato->temp_agua_entrada_condensador); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Temperatura agua salida condensador</strong></td>
                              <td><?php echo e($linea_dato->temp_agua_salida_condensador); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Caudal agua a consensador</strong></td>
                              <td><?php echo e($linea_dato->caudal_agua_a_condensador); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Temp agua ent torre</strong></td>
                              <td><?php echo e($linea_dato->temp_agua_ent_torre); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Temp agua sal torre</strong></td>
                              <td><?php echo e($linea_dato->temp_agua_sal_torre); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Caudal agua a torre(intercambiador)</strong></td>
                              <td><?php echo e($linea_dato->caudal_agua_a_torre); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Temp trabajo(verde)</strong></td>
                              <td><?php echo e($linea_dato->temp_trabajo_verde); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Temperatura quemador(rojo)</strong></td>
                              <td><?php echo e($linea_dato->temp_quemador_rojo); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Presion ent Biogás</strong></td>
                              <td><?php echo e($linea_dato->presion_ent_biogas); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Temperatura aceite ent caldera(pantalla)</strong></td>
                              <td><?php echo e($linea_dato->temp_aceite_ent_caldera_dysp); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Temperatura aceite sal caldera(pantalla)</strong></td>
                              <td><?php echo e($linea_dato->temp_aceite_sal_caldera_dysp); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Temperatura Humos (pantalla)</strong></td>
                              <td><?php echo e($linea_dato->temp_humos_caldera_dysp); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Presion gas ent caldera(pantalla) </strong></td>
                              <td><?php echo e($linea_dato->presion_gas_ent_caldera_dysp); ?></td>
                            </tr>
                            <tr>
                              <td><strong>presion gas salida caldera(pantalla)</strong></td>
                              <td><?php echo e($linea_dato->presion_gas_sal_caldera_dysp); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Porcentaje trabajo ventilador</strong></td>
                              <td><?php echo e($linea_dato->porcentaje_ventilador_cal); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Caudal agua lampara </strong></td>
                              <td><?php echo e($linea_dato->caudal_lampara); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Lampara titanium</strong></td>
                              <td><?php echo e($linea_dato->valor_lampara_titanium); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Dosificacion sosa</strong></td>
                              <td><?php echo e($linea_dato->dosificacion_sosa); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Consumo biogas</strong></td>
                              <td><?php echo e($linea_dato->consumo_inst_biogas); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Riqueza biogas</strong></td>
                              <td><?php echo e($linea_dato->riqueza_biogas); ?>%</td>
                            </tr>
                            <tr>
                              <td><strong>Totalizador biogas</strong></td>
                              <td><?php echo e($linea_dato->totalizador_biogas); ?></td>
                            </tr>
                            <tr>
                              <td><strong>Observaciones</strong></td>
                              <td><?php echo e($linea_dato->observaciones); ?></td>
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
