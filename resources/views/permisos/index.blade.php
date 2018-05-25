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
                                    @can ('permisos.create')
                                    <a href="{{route('permisos.create')}}" class="btn btn-primary pull-right">
                                              Crear
                                            </a>


                                    @endcan

                                  </div>
                                <table class="table ">
                                  <thead>
                                    <tr>
                                      <th width="10px">ID</th>
                                      <th>Name</th>
                                      <th>Description </th>

                                      <th colspan="3">&nbsp;</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($permisos as $permiso)
                                    <tr>
                                      <td>{{$permiso->id}}</td>
                                      <td>{{$permiso->name}}</td>
                                      <td>{{$permiso->description}}</td>

                                      @can ('permisos.show')
                                      <td width="10px">
                                        <a href="{{ route('permisos.show', $permiso->id) }}" class="btn btn-sm btn-default">Ver</a>
                                      </td>
                                      @endcan

                                      @can ('permisos.edit')
                                      <td width="10px">
                                        <a href="{{ route('permisos.edit', $permiso->id) }}" class="btn btn-sm btn-info">Editar</a>
                                      </td>
                                      @endcan

                                      @can ('permisos.destroy')
                                      <td width="10px">
                                        {!!Form::open(['route'=>['permisos.destroy',$permiso->id], 'method'=>'DELETE'])!!}
                                        <button class="btn btn-sm btn-danger">Eliminar</button> {!!Form::close()!!}
                                      </td>
                                      @endcan

                                    </tr>
                                    @endforeach


                                  </tbody>



                                </table>
                                {{$permisos->render()}}

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
  $('#nav-permisos').addClass('active');
</script>

</html>
