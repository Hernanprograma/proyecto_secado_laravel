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
                      <div class="toolbar">

                        <!--Here you can write extra buttons/actions for the toolbar-->
                        <a class="btn btn-info" href="{{ URL::previous() }}">Volver</a>

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
                              <td><strong>Ultima modificación</strong></td>
                              <td>
                                @isset($nivel->user->name){{$nivel->user->name}}
                                  @endisset
                              </td>
                            </tr>
                            <tr>
                              <td><strong>Fecha </strong></td>
                              <td>{{Carbon\Carbon::parse($nivel->fecha)->format('d-m-Y')}}</td>
                            </tr>
                            <tr>
                              <td><strong>Hora </strong></td>
                              <td>{{Carbon\Carbon::parse($nivel->hora)->format('H:i')}}</td>
                            </tr>


                            <tr>
                              <td><strong>Silo de Fango seco A </strong></td>
                              <td>{{$nivel->nivel_seco_a}}% </td>
                            </tr>
                            <tr>
                              <td><strong>Silo de Fango seco B </strong></td>
                              <td>{{$nivel->nivel_seco_b}}% </td>
                            </tr>

                            <tr>
                              <td><strong>Silo Nuevo</strong></td>
                              <td>{{$nivel->silo_nuevo}} </td>
                            </tr>
                            <tr>
                              <td><strong>Silo almacenamiento</strong></td>
                              <td>{{$nivel->silo_almacen}} </td>
                            </tr>
                            <tr>
                              <td><strong>Nivel digestor </strong></td>
                              <td>{{$nivel->digestor}} </td>
                            </tr>
                            <tr>
                              <td><strong>Tolva recepcion de fango </strong></td>
                              <td>{{$nivel->tolva_recepcion}} </td>
                            </tr>

                            <tr>
                              <td><strong>Presion de gas</strong></td>
                              <td>{{$nivel->gas}}A </td>
                            </tr>
                            <tr>
                              <td><strong>Estado de linea de fango A</strong></td>
                              <td>{{$nivel->linea_a}} </td>
                            </tr>
                            <tr>
                              <td><strong>Estado de linea de fango B</strong></td>
                              <td>{{$nivel->linea_b}} </td>
                            </tr>
                            <tr>
                              <td><strong>Centrifuga A </strong></td>
                              <td>{{$nivel->centrifuga_a}} </td>
                            </tr>

                            <tr>
                              <td><strong>Centrifuga B</strong></td>
                              <td>{{$nivel->centrifuga_b}}</td>
                            </tr>
                            <tr>
                              <td><strong>Centrifuga C</strong></td>
                              <td>{{$nivel->centrifuga_c}}</td>
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


          @include('partials.footer')
        </div>
      </div>
</body>

@include('partials.scripts')


<!-- Scripts Charts-->


<script type="text/javascript">
  $('#nav-nivels').addClass('active');
</script>

</html>
