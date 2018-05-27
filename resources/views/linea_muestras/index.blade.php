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
                      <p class="category">Lista de Datos y muestras de linea de secado</p>
                    </div>
                    <div class="card-content">
                      <div class="toolbar">

                        <!--Here you can write extra buttons/actions for the toolbar-->
                          <a class="btn btn-info" href="{{ URL::previous() }}">Volver</a>

                        @can ('linea_muestras.create')
                        <a href="{{route('linea_muestras.create')}}" class="btn btn-primary pull-right">
                                                  Crear
                                                </a>
                        @endcan


                      </div>
                      <div class="table-responsive">
                        <table  class="table table-striped table-hover">
                          <thead>
                            <tr>

                              <th>Línea</th>
                              <th>Fecha</th>
                              <th>Hora</th>
                              <th>Entrada </th>
                              <th>Salida</th>
                              <th colspan="3">&nbsp;</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($linea_muestras as $linea_muestra)
                            <tr>

                              <td>{{$linea_muestra->linea}}</td>
                              <td>{{Carbon\Carbon::parse($linea_muestra->fecha)->format('d-m-Y')}}</td>
                              <td>{{Carbon\Carbon::parse($linea_muestra->hora)->format('H:i')}}</td>
                              <td>{{$linea_muestra->sequedadentrada}}</td>
                              <td>{{$linea_muestra->sequedadsalida}}</td>

                              @can ('linea_muestras.show')
                              <td style="padding:0">
                                <a href="{{ route('linea_muestras.show', $linea_muestra->id) }}" class="btn btn-sm btn-default">Ver</a>
                              </td>
                              @endcan

                              @can ('linea_muestras.edit')
                              <td style="padding:0">
                                <a href="{{ route('linea_muestras.edit', $linea_muestra->id) }}" class="btn btn-sm btn-info">Editar</a>
                              </td>
                              @endcan

                              @can ('linea_muestras.destroy')
                              <td style="padding:0">
                                {!!Form::open(['route'=>['linea_muestras.destroy',$linea_muestra->id], 'method'=>'DELETE'])!!}
                                <button class="btn btn-sm btn-danger">Eliminar</button> {!!Form::close()!!}
                              </td>
                              @endcan

                            </tr>
                            @endforeach

                          </tbody>
                        </table>
                      </div>
                      {{$linea_muestras->render()}}
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
$('#nav-marcha_centrifugas').addClass('active');
$('#nav-lecturas_secado').addClass('active');
$('#lecturas_secado').addClass('collapse in');
</script>

</html>
