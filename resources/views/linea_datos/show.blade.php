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
                              <td><strong>Crea registro </strong></td>
                              <td>
                                @isset($linea_dato->user->name){{$linea_dato->user->name}}
                                  @endisset
                              </td>
                            </tr>
                            <tr>
                              <td><strong>Fecha </strong></td>
                              <td>{{Carbon\Carbon::parse($linea_dato->fecha)->format('d-m-Y')}}</td>
                            </tr>
                            <tr>
                              <td><strong>Hora </strong></td>
                              <td>{{Carbon\Carbon::parse($linea_dato->hora)->format('H:i')}}</td>
                            </tr>
                            <tr>
                              <td><strong>Linea</strong></td>
                              <td>{{$linea_dato->linea}} </td>
                            </tr>
                            <tr>
                              <td><strong>Entrada </strong></td>
                              <td>{{$linea_dato->sequedadentrada}} </td>
                            </tr>
                            <tr>
                              <td><strong>Salida </strong></td>
                              <td>{{$linea_dato->sequedadsalida}} </td>
                            </tr>
                            <tr>
                              <td><strong>TT1 </strong></td>
                              <td>{{$linea_dato->tt1}} </td>
                            </tr>
                            <tr>
                              <td><strong>TT2 </strong></td>
                              <td>{{$linea_dato->tt2}} </td>
                            </tr>
                            <tr>
                              <td><strong>TT3 </strong></td>
                              <td>{{$linea_dato->tt3}} </td>
                            </tr>
                            <tr>
                              <td><strong>TT4 </strong></td>
                              <td>{{$linea_dato->tt4}} </td>
                            </tr>
                            <tr>
                              <td><strong>Intensidad del tambor </strong></td>
                              <td>{{$linea_dato->intensidadtambor}}A </td>
                            </tr>
                            <tr>
                              <td><strong>Herzios Bomba </strong></td>
                              <td>{{$linea_dato->herziosbomba}}Hz </td>
                            </tr>
                            <tr>
                              <td><strong>Vueltas de la bomba</strong></td>
                              <td>{{$linea_dato->vueltasbomba}} </td>
                            </tr>
                            <tr>
                              <td><strong>Nivel del silo de fango humedo </strong></td>
                              <td>{{$linea_dato->nivelsilo}} </td>
                            </tr>
                            <tr>
                              <td><strong>Posicion válvula ventilador </strong></td>
                              <td>{{$linea_dato->posicionvalvula}} </td>
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
  $('#nav-linea_datos').addClass('active');
</script>

</html>
