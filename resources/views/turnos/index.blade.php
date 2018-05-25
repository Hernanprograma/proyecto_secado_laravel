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
                    <div class="card-header ">



                        <h4 class="card-title">Turnos</h4>
                        <p class="category">Lista de los turnos</p>



                    </div>

                    <div class="card-content">
                      <div class="toolbar">

                        <!--Here you can write extra buttons/actions for the toolbar-->
                        <a class="btn btn-info" href="{{ URL::previous() }}">Volver</a>
                        @can ('turnos.create')
                        <a href="{{route('turnos.create')}}" class="btn btn-primary pull-right">
                                                  Crear
                                                </a>
                        @endcan


                      </div>
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Turno</th>
                              <th>Operario</th>
                              <th>Fecha</th>
                              <th>Hora</th>

                              <th>Tareas</th>
                              <th colspan="3">&nbsp;</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($turnos as $turno)
                            <tr>

                              <td>{{$turno->turno}}</td>
                              <td>
                                @isset($turno->user->name){{$turno->user->name}}
                                  @endisset</td>

                                    <td>{{Carbon\Carbon::parse($turno->fecha)->format('d-m-Y')}}</td>
                                    <td>{{Carbon\Carbon::parse($turno->hora)->format('H:i')}}</td>

                                    <td>

                                      @foreach ($tareas as $tarea)
                                      @if($tarea->turno_id==$turno->id){{$tarea->hora}}-{{$tarea->descripcion}}<br>

                                        @endif
                                        @endforeach

                                    </td>
                                    @can ('tareas.create')
                                    <td>
                                      {{-- <a href="{{route('tareas.create',['turno'=>$turno])}}" class="btn btn-sm btn-warning"> --}}
                                    <a href="{{route('tareas.create',$turno)}}" class="btn btn-sm btn-warning">
                                                              Tareas
                                                            </a>
                                    </td>
                                    @endcan

                                    @can ('turnos.edit')
                                    <td style="padding:0">
                                      <a href="{{ route('turnos.edit', $turno->id) }}" class="btn btn-sm btn-info">Editar</a>
                                    </td>
                                    @endcan

                                    @can ('turnos.destroy')
                                    <td style="padding:0">
                                      {!!Form::open(['route'=>['turnos.destroy',$turno->id], 'method'=>'DELETE'])!!}
                                      <button class="btn btn-sm btn-danger">Eliminar</button> {!!Form::close()!!}
                                    </td>
                                    @endcan

                            </tr>
                            @endforeach

                          </tbody>
                        </table>
                      </div>
                      {{$turnos->render()}}
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
  $('#nav-turnos').addClass('active');
</script>

</html>
