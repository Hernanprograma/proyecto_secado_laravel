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
                      <h4 class="card-title">Niveles y estados</h4>
                      <p class="category">Lista de los estados</p>
                    </div>
                    <div class="card-content">
                      <div class="toolbar">

                        <!--Here you can write extra buttons/actions for the toolbar-->
                        <a class="btn btn-info" href="{{ URL::previous() }}">Volver</a>

                        @can ('nivels.create')
                        <a href="{{route('nivels.create')}}" class="btn btn-primary pull-right">
                                                  Crear
                                                </a>
                        @endcan


                      </div>
                      <div class="table-responsive">
                        <table  class="table table-striped table-hover">
                          <thead>
                            <tr>

                              <th>gas</th>
                              <th>silo_nuevo</th>
                              <th>silo_almacen</th>
                              <th>digestor</th>


                              <th colspan="3">&nbsp;</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($nivels as $nivel)



                              <td>{{$nivel->gas}}</td>
                              <td>{{$nivel->silo_nuevo}}</td>
                              <td>{{$nivel->silo_almacen}}</td>
                              <td>{{$nivel->tt4}}</td>

                              @can ('nivels.show')
                              <td style="padding:0">
                                <a href="{{ route('nivels.show', $nivel->id) }}" class="btn btn-sm btn-default">Ver</a>
                              </td>
                              @endcan

                              @can ('nivels.edit')
                              <td style="padding:0">
                                <a href="{{ route('nivels.edit', $nivel->id) }}" class="btn btn-sm btn-info">Editar</a>
                              </td>
                              @endcan

                              @can ('nivels.destroy')
                              <td style="padding:0">
                                {!!Form::open(['route'=>['nivels.destroy',$nivel->id], 'method'=>'DELETE'])!!}
                                <button class="btn btn-sm btn-danger">Eliminar</button> {!!Form::close()!!}
                              </td>
                              @endcan

                            </tr>
                            @endforeach

                          </tbody>
                        </table>
                      </div>
                      {{$nivels->render()}}
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
