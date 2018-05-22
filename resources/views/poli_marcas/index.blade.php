{{--
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          Marcas de poli
          @can ('poli_marcas.create')
          <a href="{{route('poli_marcas.create')}}" class="btn-sm btn-primary pull-right">
                    Crear
                  </a>


          @endcan

        </div>

        <div class="panel-body">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th width="10px">ID</th>
                <th>Marca</th>
                <th>Precio </th>
                <th>Peso</th>
                <th colspan="3">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($poli_marcas as $poli_marca)
              <tr>
                <td>{{$poli_marca->id}}</td>
                <td>{{$poli_marca->name}}</td>
                <td>{{$poli_marca->precio}}</td>
                <td>{{$poli_marca->peso}}</td>
                @can ('poli_marcas.show')
                <td width="10px">
                  <a href="{{ route('poli_marcas.show', $poli_marca->id) }}" class="btn btn-sm btn-default">Ver</a>
                </td>
                @endcan

                @can ('poli_marcas.edit')
                <td width="10px">
                  <a href="{{ route('poli_marcas.edit', $poli_marca->id) }}" class="btn btn-sm btn-info">Editar</a>
                </td>
                @endcan

                @can ('poli_marcas.destroy')
                <td width="10px">
                  {!!Form::open(['route'=>['poli_marcas.destroy',$poli_marca->id], 'method'=>'DELETE'])!!}
                  <button class="btn btn-sm btn-danger">Eliminar</button> {!!Form::close()!!}
                </td>
                @endcan

              </tr>
              @endforeach


            </tbody>



          </table>
          {{$poli_marcas->render()}}


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
                      <h4 class="card-title">Polielectrolito</h4>
                      <p class="category">Lista de marcas </p>
                    </div>
                    <div class="card-content">
                      <!--colocar el contenido aqui-->
                      <div class="toolbar">

                          <!--Here you can write extra buttons/actions for the toolbar-->

                            @can ('poli_marcas.create')
                            <a href="{{route('poli_marcas.create')}}" class="btn btn-primary pull-right">
                                      Crear
                                    </a>


                            @endcan


                      </div>

                        <table id="bootstrap-table" class="table">
                        <thead>
                          <tr>
                            <th width="10px">ID</th>
                            <th>Marca</th>
                            <th>Precio </th>
                            <th>Peso</th>
                            <th colspan="3">&nbsp;</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($poli_marcas as $poli_marca)
                          <tr>
                            <td>{{$poli_marca->id}}</td>
                            <td>{{$poli_marca->name}}</td>
                            <td>{{$poli_marca->precio}}</td>
                            <td>{{$poli_marca->peso}}</td>
                            @can ('poli_marcas.show')
                            <td width="10px">
                              <a href="{{ route('poli_marcas.show', $poli_marca->id) }}" class="btn btn-sm btn-default">Ver</a>
                            </td>
                            @endcan

                            @can ('poli_marcas.edit')
                            <td width="10px">
                              <a href="{{ route('poli_marcas.edit', $poli_marca->id) }}" class="btn btn-sm btn-info">Editar</a>
                            </td>
                            @endcan

                            @can ('poli_marcas.destroy')
                            <td width="10px">
                              {!!Form::open(['route'=>['poli_marcas.destroy',$poli_marca->id], 'method'=>'DELETE'])!!}
                              <button class="btn btn-sm btn-danger">Eliminar</button> {!!Form::close()!!}
                            </td>
                            @endcan

                          </tr>
                          @endforeach


                        </tbody>



                      </table>
                      {{$poli_marcas->render()}}


                      <!--fin del contenido-->


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
  $('#nav-poli').addClass('active');
</script>

</html>
