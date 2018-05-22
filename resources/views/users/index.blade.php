{{-- @extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          Usuarios

        </div>

        <div class="panel-body">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th width="10px">ID</th>
                <th>Nombre</th>

                <th colspan="3">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>

                @can ('users.show')
                <td width="10px">
                  <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-default">Ver</a>
                </td>
                @endcan

                @can ('users.edit')
                <td width="10px">
                  <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-info">Editar</a>
                </td>
                @endcan

                @can ('users.destroy')
                <td width="10px">
                  {!!Form::open(['route'=>['users.destroy',$user->id], 'method'=>'DELETE'])!!}
                  <button class="btn btn-sm btn-danger">Eliminar</button> {!!Form::close()!!}
                </td>
                @endcan

              </tr>
              @endforeach


            </tbody>



          </table>
          {{$users->render()}}


        </div>
      </div>
    </div>
  </div>
</div>
@endsection --}}

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
	                                <h4 class="card-title">Usuarios</h4>
	                                <p class="category">Lista de Usuarios</p>
	                            </div>
                              <div class="card-content">
                                  <div class="toolbar">

                                      <!--Here you can write extra buttons/actions for the toolbar-->



                                  </div>
                                  <table class="table ">
                                    <thead>
                                      <tr>
                                        <th width="10px">ID</th>
                                        <th>Nombre</th>

                                        <th colspan="3">&nbsp;</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($users as $user)
                                      <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>

                                        @can ('users.show')
                                        <td width="10px">
                                          <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-default">Ver</a>
                                        </td>
                                        @endcan

                                        @can ('users.edit')
                                        <td width="10px">
                                          <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-info">Editar</a>
                                        </td>
                                        @endcan

                                        @can ('users.destroy')
                                        <td width="10px">
                                          {!!Form::open(['route'=>['users.destroy',$user->id], 'method'=>'DELETE'])!!}
                                          <button class="btn btn-sm btn-danger">Eliminar</button> {!!Form::close()!!}
                                        </td>
                                        @endcan

                                      </tr>
                                      @endforeach


                                    </tbody>



                                  </table>
                                  {{$users->render()}}
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
  $('#nav-user').addClass('active');
</script>

</html>
