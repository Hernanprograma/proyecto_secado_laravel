
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
	                                <h4 class="card-title">Gasto de Polielectrolito</h4>
	                                <p class="category">Lista de sacos de poli Gastados</p>
	                            </div>
                              <div class="card-content">
                                  <div class="toolbar">

                                      <!--Here you can write extra buttons/actions for the toolbar-->
                                        <a class="btn btn-info" href="{{ URL::previous() }}">Volver</a>

                                        @can ('gasto_polis.create')
                                        <a href="{{route('gasto_polis.create')}}" class="btn btn-primary pull-right">
                                                  Crear
                                                </a>
                                        @endcan


                                  </div>
                                  <div class="table-responsive">
                                  <table class="table">
                                    <thead>
                                      <tr>

                                        <th>Operario</th>
                                        <th>Marca de poli</th>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Incidencias</th>
                                        <th colspan="3">&nbsp;</th>
                                      </tr>
                                    </thead>
                                      <tbody>

                                        @foreach ($gasto_polis as $gasto_poli)
                                        <tr>


                                          <td>@isset($gasto_poli->user->name){{$gasto_poli->user->name}} @endisset</td>
                                          <td>@isset($gasto_poli->poli->name){{$gasto_poli->poli->name}} @endisset</td>
                                          <td>{{Carbon\Carbon::parse($gasto_poli->fecha)->format('d-m-Y')}}</td>
                                          <td>{{$gasto_poli->hora}}</td>
                                          <td>{{$gasto_poli->incidencias}}</td>


                                          @can ('gasto_polis.edit')
                                            <td style="padding:0">
                                            <a href="{{ route('gasto_polis.edit', $gasto_poli->id) }}" class="btn btn-sm btn-info">Editar</a>
                                          </td>
                                          @endcan

                                          @can ('gasto_polis.destroy')
                                          <td style="padding:0">
                                            {!!Form::open(['route'=>['gasto_polis.destroy',$gasto_poli->id], 'method'=>'DELETE'])!!}
                                            <button class="btn btn-sm btn-danger">Eliminar</button> {!!Form::close()!!}
                                          </td>
                                          @endcan

                                        </tr>
                                        @endforeach

                                      </tbody>
                                  </table>
                                </div>
                                  {{$gasto_polis->render()}}
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
  $('#nav-gasto_polis').addClass('active');
</script>

</html>
