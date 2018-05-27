

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
                      <div class="toolbar">

                        <!--Here you can write extra buttons/actions for the toolbar-->
                        <a class="btn btn-info" href="{{ URL::previous() }}">Volver</a>

                      </div>

                        <table  class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th width="20px">Dato</th>
                            <th width="30px">Valor</th>

                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <tr><td><strong>Fecha </strong></td><td>{{Carbon\Carbon::parse($linea_muestra->fecha)->format('d-m-Y')}}</td></tr>
                            <tr><td><strong>Hora </strong></td><td>{{Carbon\Carbon::parse($linea_muestra->hora)->format('H:i')}}</td></tr>
                            <tr><td><strong>Linea</strong></td><td>{{$linea_muestra->linea}} </td></tr>
                            <tr><td><strong>Entrada </strong></td><td>{{$linea_muestra->sequedadentrada}} </td></tr>
                            <tr><td><strong>Salida </strong></td><td>{{$linea_muestra->sequedadsalida}} </td></tr>
                            <tr><td><strong>TT1 </strong></td><td>{{$linea_muestra->tt1}} </td></tr>
                            <tr><td><strong>TT2 </strong></td><td>{{$linea_muestra->tt2}} </td></tr>
                            <tr><td><strong>TT3 </strong></td><td>{{$linea_muestra->tt3}} </td></tr>
                            <tr><td><strong>TT4 </strong></td><td>{{$linea_muestra->tt4}} </td></tr>
                            <tr><td><strong>Intensidad del tambor </strong></td><td>{{$linea_muestra->intensidadtambor}}A </td></tr>
                            <tr><td><strong>Herzios Bomba </strong></td><td>{{$linea_muestra->herziosbomba}}Hz </td></tr>
                            <tr><td><strong>Vueltas de la bomba</strong></td><td>{{$linea_muestra->vueltasbomba}} </td></tr>
                            <tr><td><strong>Nivel del silo de fango humedo </strong></td><td>{{$linea_muestra->nivelsilo}} </td></tr>
                            <tr><td><strong>Posicion válvula ventilador </strong></td><td>{{$linea_muestra->posicionvalvula}} </td></tr>
                            <tr><td><strong>Crea registro </strong></td><td>@isset($linea_muestra->user->name){{$linea_muestra->user->name}} @endisset</td></tr>

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
  $('#nav-linea_muestras').addClass('active');
  $('#nav-lecturas_secado').addClass('active');
  $('#lecturas_secado').addClass('collapse in');
</script>

</html>
