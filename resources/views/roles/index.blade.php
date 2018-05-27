
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
                      <h4 class="card-title">Roles</h4>
                      <p class="category">Lista de Datos y muestras de las centrífugas</p>
                    </div>
                    <div class="card-content">
                      <div class="toolbar">
                        <a class="btn btn-info" href="{{ URL::previous() }}">Volver</a>
                        @can ('roles.create')
                        <a href="{{route('roles.create')}}" class="btn btn-primary pull-right">
                                              Crear
                                            </a>


                        @endcan

                      </div>
                      <div class="table-responsive">
                        <table  class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th width="10px">ID</th>
                            <th>Name</th>
                            <th>Description </th>

                            <th colspan="3">&nbsp;</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($roles as $role)
                          <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>
                            <td>{{$role->description}}</td>

                            @can ('roles.show')
                            <td width="10px">
                              <a href="{{ route('roles.show', $role->id) }}" class="btn btn-sm btn-default">Ver</a>
                            </td>
                            @endcan

                            @can ('roles.edit')
                            <td width="10px">
                              <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-sm btn-info">Editar</a>
                            </td>
                            @endcan

                            @can ('roles.destroy')
                            <td width="10px">
                              {!!Form::open(['route'=>['roles.destroy',$role->id], 'method'=>'DELETE'])!!}
                              <button class="btn btn-sm btn-danger">Eliminar</button> {!!Form::close()!!}
                            </td>
                            @endcan

                          </tr>
                          @endforeach


                        </tbody>



                      </table>
                    </div>
                      {{$roles->render()}}

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
  $('#nav-roles').addClass('active');
  $('#nav-gestion').addClass('active');
  $('#gestion').addClass('collapse in');
</script>

</html>
