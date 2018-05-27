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
                      <h4 class="card-title">Simbiotica</h4>
                      <p class="category">Detalle dato de la simbiótica</p>
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
                              <td><strong>ID</strong></td>
                              <td>{{$simbiotica->id}} </td>
                            </tr>
                            <tr>
                              <td><strong>Caudal </strong></td>
                              <td>{{$simbiotica->caudal}} </td>
                            </tr>
                            <tr>
                              <td><strong>Totalizado </strong></td>
                              <td>{{$simbiotica->totalizado}} </td>
                            </tr>
                            <tr>
                              <td><strong>Incidencias </strong></td>
                              <td>{{$simbiotica->incidencias}} </td>
                            </tr>
                            <tr>
                              <td><strong>Fecha </strong></td>
                              <td>{{Carbon\Carbon::parse($simbiotica->fecha)->format('d-m-Y')}}</td>
                            </tr>
                            <tr>
                              <td><strong>Hora </strong></td>
                              <td>{{Carbon\Carbon::parse($simbiotica->hora)->format('H:i')}}</td>
                            </tr>
                            <tr>
                              <td><strong>Crea registro</strong></td>
                              <td>
                                @isset($simbiotica->user->name){{$simbiotica->user->name}}
                                @endisset
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


          @include('partials.footer')
        </div>
      </div>
</body>

@include('partials.scripts')


<!-- Scripts Charts-->


<script type="text/javascript">
$('#nav-simbio').addClass('active');
$('#nav-lecturas_secado').addClass('active');
$('#lecturas_secado').addClass('collapse in');
</script>

</html>
