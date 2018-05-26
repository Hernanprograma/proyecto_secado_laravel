<!doctype html>
<html lang="es">
<!--CABECERAS DE HTML  ...esta en la ruta views/partials/head-->
@include('partials.head')

<body>
  <div class="wrapper">
    <!--BARRA IZQUIERDA DE MENUS ......esta en la ruta views/partials/sidebar-->
    @include('partials.sidebar')

    <div class="main-panel">
      <!--BARRA SUPERIOR DE MENUS ......esta en la ruta views/partials/sidebar-->
      @include('partials.defaultbar')

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

                      <a class="btn btn-info" href="{{ URL::previous() }}">Volver</a>
                    </div>




                      <div class="form-group col-md-3 col-xs-12">
                        {{ Form::date('fecha', \Illuminate\Support\Carbon::now(), ['class'=>'form-control','id'=>'fechaini']) }} {{Form::label('fecha','Fecha Inicial')}}
                      </div>



                        <div class="form-group col-md-3 col-xs-12">

                        {{ Form::date('fecha', \Illuminate\Support\Carbon::now(), ['class'=>'form-control','id'=>'fechafin']) }} {{Form::label('fecha','Fecha Final')}}
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



        @include('partials.footer')
      </div>
    </div>
</body>

@include('partials.scripts')


<!-- Scripts Charts-->
<script src="{{ asset('js/scripts_informe_gasto_poli.js')}}"></script>

<script type="text/javascript">
  $('#nav-informes').addClass('active')
  $('#nav-informes-poli').addClass('active');
</script>

{{-- To save the generated export files on client side, include in your html code: --}}
<script type="text/javascript" src="{{ asset('libs/FileSaver/FileSaver.min.js')}}"></script>
{{-- To export the table as a PDF file the following includes are required: --}}
<script type="text/javascript" src="{{ asset('libs/jsPDF/jspdf.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('libs/jsPDF-AutoTable/jspdf.plugin.autotable.js')}}"></script>
{{-- Regardless of the desired format, finally include: --}}
<script type="text/javascript" src="{{ asset('js/tableExport.min.js')}}"></script>

</html>
