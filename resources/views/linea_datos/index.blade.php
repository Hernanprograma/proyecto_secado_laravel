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
                      <p class="category">Lista de Datos de la linea</p>
                    </div>
                    <div class="card-content">
                      <div class="toolbar">

                        <!--Here you can write extra buttons/actions for the toolbar-->
                        <a class="btn btn-info" href="{{ URL::previous() }}">Volver</a>

                        @can ('linea_datos.create')
                        <a href="{{route('linea_datos.create')}}" class="btn btn-primary pull-right">
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
                              <th>Operario</th>
                              <th>TT1</th>
                              <th>TT2</th>
                              <th>TT3</th>
                              <th>TT4</th>
                              <th colspan="3">&nbsp;</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($linea_datos as $linea_dato)
                            <tr>

                              <td>{{$linea_dato->linea}}</td>
                              <td>{{Carbon\Carbon::parse($linea_dato->fecha)->format('d-m-Y')}}</td>
                              <td>{{Carbon\Carbon::parse($linea_dato->hora)->format('H:i')}}</td>
                              <td>
                                @isset($linea_dato->user->name){{$linea_dato->user->name}}
                                  @endisset
                              </td>
                              <td>{{$linea_dato->tt1}}</td>
                              <td>{{$linea_dato->tt2}}</td>
                              <td>{{$linea_dato->tt3}}</td>
                              <td>{{$linea_dato->tt4}}</td>

                              @can ('linea_datos.show')
                              <td style="padding:0">
                                <a href="{{ route('linea_datos.show', $linea_dato->id) }}" class="btn btn-sm btn-default">Ver</a>
                              </td>
                              @endcan

                              @can ('linea_datos.edit')
                              <td style="padding:0">
                                <a href="{{ route('linea_datos.edit', $linea_dato->id) }}" class="btn btn-sm btn-info">Editar</a>
                              </td>
                              @endcan

                              @can ('linea_datos.destroy')
                              <td style="padding:0">
                                {!!Form::open(['route'=>['linea_datos.destroy',$linea_dato->id], 'method'=>'DELETE'])!!}
                                <button class="btn btn-sm btn-danger">Eliminar</button> {!!Form::close()!!}
                              </td>
                              @endcan

                            </tr>
                            @endforeach

                          </tbody>
                        </table>
                      </div>
                      {{$linea_datos->render()}}
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
