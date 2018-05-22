{{--
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          Centrífugas
          @can ('centrifugas.create')
          <a href="{{route('centrifugas.create')}}" class="btn-sm btn-primary pull-right">
                    Crear
                  </a>


          @endcan

        </div>

        <div class="panel-body">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th width="10px">ID</th>
                <th>Centrífuga</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Entrada </th>
                <th>Salida</th>
                <th colspan="3">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($centrifugas as $centrifuga)
              <tr>
                <td>{{$centrifuga->id}}</td>
                <td>{{$centrifuga->centrifuga}}</td>
                <td>{{Carbon\Carbon::parse($centrifuga->fecha)->format('d-m-Y')}}</td>
                </td>
                <td>{{$centrifuga->hora}}</td>
                <td>{{$centrifuga->entrada}}</td>
                <td>{{$centrifuga->salida}}</td>
                @can ('centrifugas.show')
                <td width="10px">
                  <a href="{{ route('centrifugas.show', $centrifuga->id) }}" class="btn btn-sm btn-default">Ver</a>
                </td>
                @endcan

                @can ('centrifugas.edit')
                <td width="10px">
                  <a href="{{ route('centrifugas.edit', $centrifuga->id) }}" class="btn btn-sm btn-info">Editar</a>
                </td>
                @endcan

                @can ('centrifugas.destroy')
                <td width="10px">
                  {!!Form::open(['route'=>['centrifugas.destroy',$centrifuga->id], 'method'=>'DELETE'])!!}
                  <button class="btn btn-sm btn-danger">Eliminar</button> {!!Form::close()!!}
                </td>
                @endcan

              </tr>
              @endforeach


            </tbody>



          </table>
          {{$centrifugas->render()}}


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
	                                <h4 class="card-title">Centífugas</h4>
	                                <p class="category">Datos y muestras de las centrífugas</p>
	                            </div>
                              <div class="card-content">
                                  <div class="toolbar">

                                      <!--Here you can write extra buttons/actions for the toolbar-->

                                        @can ('centrifugas.create')
                                        <a href="{{route('centrifugas.create')}}" class="btn btn-primary pull-right">
                                                  Crear
                                                </a>


                                        @endcan


                                  </div>
                                  <table id="bootstrap-table" class="table">
                                    <thead>
                                      <tr>
                                        <th width="10px">ID</th>
                                        <th>Centrífuga</th>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Entrada </th>
                                        <th>Salida</th>
                                        <th colspan="3">&nbsp;</th>
                                      </tr>
                                    </thead>
                                      <tbody>
                                        @foreach ($centrifugas as $centrifuga)
                                        <tr>
                                          <td>{{$centrifuga->id}}</td>
                                          <td>{{$centrifuga->centrifuga}}</td>
                                          <td>{{Carbon\Carbon::parse($centrifuga->fecha)->format('d-m-Y')}}</td>
                                          </td>
                                          <td>{{$centrifuga->hora}}</td>
                                          <td>{{$centrifuga->entrada}}</td>
                                          <td>{{$centrifuga->salida}}</td>
                                          @can ('centrifugas.show')
                                          <td width="10px">
                                            <a href="{{ route('centrifugas.show', $centrifuga->id) }}" class="btn btn-sm btn-default">Ver</a>
                                          </td>
                                          @endcan

                                          @can ('centrifugas.edit')
                                          <td width="10px">
                                            <a href="{{ route('centrifugas.edit', $centrifuga->id) }}" class="btn btn-sm btn-info">Editar</a>
                                          </td>
                                          @endcan

                                          @can ('centrifugas.destroy')
                                          <td width="10px">
                                            {!!Form::open(['route'=>['centrifugas.destroy',$centrifuga->id], 'method'=>'DELETE'])!!}
                                            <button class="btn btn-sm btn-danger">Eliminar</button> {!!Form::close()!!}
                                          </td>
                                          @endcan

                                        </tr>
                                        @endforeach

                                      </tbody>
                                  </table>
                                  {{$centrifugas->render()}}
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
  $('#nav-cent').addClass('active');
</script>

</html>
