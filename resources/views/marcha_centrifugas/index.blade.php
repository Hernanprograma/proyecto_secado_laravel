
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
	                                <h4 class="card-title">Estado de Centrífugas</h4>
	                                <p class="category">Edita el estado de las centrífugas</p>
	                            </div>
                              <div class="card-content">
                                  <div class="toolbar">

                                      <!--Here you can write extra buttons/actions for the toolbar-->

                                        @can ('marcha_centrifugas.create')
                                        <a href="{{route('marcha_centrifugas.create')}}" class="btn btn-primary pull-right">
                                                  Crear
                                                </a>
                                        @endcan


                                  </div>
                                  <div class="table-responsive">
                                  <table class="table">
                                    <thead>
                                      <tr>

                                        <th>Operario</th>
                                        <th>Centrifuga</th>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Estado </th>
                                        <th>Incidencias</th>
                                        <th colspan="3">&nbsp;</th>
                                      </tr>
                                    </thead>
                                      <tbody>
                                        @foreach ($marcha_centrifugas as $marcha_centrifuga)
                                        <tr>


                                          <td>@isset($marcha_centrifuga->user->name){{$marcha_centrifuga->user->name}} @endisset</td>
                                          <td>{{$marcha_centrifuga->centrifuga}}</td>
                                          <td>{{Carbon\Carbon::parse($marcha_centrifuga->fecha)->format('d-m-Y')}}</td>
                                          <td>{{$marcha_centrifuga->hora}}</td>
                                          <td>{{$marcha_centrifuga->estado}}</td>
                                          <td>{{$marcha_centrifuga->incidencias}}</td>


                                          @can ('marcha_centrifugas.edit')
                                            <td style="padding:0">
                                            <a href="{{ route('marcha_centrifugas.edit', $marcha_centrifuga->id) }}" class="btn btn-sm btn-info">Editar</a>
                                          </td>
                                          @endcan

                                          @can ('marcha_centrifugas.destroy')
                                          <td style="padding:0">
                                            {!!Form::open(['route'=>['marcha_centrifugas.destroy',$marcha_centrifuga->id], 'method'=>'DELETE'])!!}
                                            <button class="btn btn-sm btn-danger">Eliminar</button> {!!Form::close()!!}
                                          </td>
                                          @endcan

                                        </tr>
                                        @endforeach

                                      </tbody>
                                  </table>
                                </div>
                                  {{$marcha_centrifugas->render()}}
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
  $('#nav-marcha_centrifugas').addClass('active');
</script>

</html>
