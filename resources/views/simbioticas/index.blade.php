
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
	                                <p class="category">Lista de Datos y muestras de simbiótica</p>
	                            </div>
                              <div class="card-content">
                                  <div class="toolbar">

                                      <!--Here you can write extra buttons/actions for the toolbar-->
                                      <a class="btn btn-info" href="{{ URL::previous() }}">Volver</a>

                                        @can ('simbioticas.create')
                                        <a href="{{route('simbioticas.create')}}" class="btn btn-primary pull-right">
                                                  Crear
                                                </a>
                                        @endcan


                                  </div>
                                  <div class="table-responsive">
                                  <table class="table">
                                    <thead>
                                      <tr>

                                        <th>Operario</th>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Caudal </th>
                                        <th>Totalizado</th>
                                        <th>Incidencias</th>
                                        <th colspan="3">&nbsp;</th>
                                      </tr>
                                    </thead>
                                      <tbody>
                                        @foreach ($simbioticas as $simbiotica)
                                        <tr>


                                          <td>@isset($simbiotica->user->name){{$simbiotica->user->name}} @endisset</td>
                                          <td>{{Carbon\Carbon::parse($simbiotica->fecha)->format('d-m-Y')}}</td>
                                          <td>{{$simbiotica->hora}}</td>
                                          <td>{{$simbiotica->caudal}}</td>
                                          <td>{{$simbiotica->totalizado}}</td>
                                          <td>{{$simbiotica->incidencias}}</td>
                                          @can ('simbioticas.show')
                                            <td style="padding:0">
                                            <a href="{{ route('simbioticas.show', $simbiotica->id) }}" class="btn btn-sm btn-default">Ver</a>
                                          </td>
                                          @endcan

                                          @can ('simbioticas.edit')
                                            <td style="padding:0">
                                            <a href="{{ route('simbioticas.edit', $simbiotica->id) }}" class="btn btn-sm btn-info">Editar</a>
                                          </td>
                                          @endcan

                                          @can ('simbioticas.destroy')
                                          <td style="padding:0">
                                            {!!Form::open(['route'=>['simbioticas.destroy',$simbiotica->id], 'method'=>'DELETE'])!!}
                                            <button class="btn btn-sm btn-danger">Eliminar</button> {!!Form::close()!!}
                                          </td>
                                          @endcan

                                        </tr>
                                        @endforeach

                                      </tbody>
                                  </table>
                                </div>
                                  {{$simbioticas->render()}}
                              </div>
                          </div><!--  end card  -->
                      </div> <!-- end col-md-12 -->
                  </div> <!-- end row -->
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
</script>

</html>
