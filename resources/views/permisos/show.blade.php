{{-- @extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          Rol
        </div>
        <div class="panel-body">
          <p><strong>ID: </strong>{{$role->id}} </p>
          <p><strong>Nombre: </strong>{{$role->name}} </p>
          <p><strong>Etiqueta(slug): </strong>{{$role->slug}} </p>
          <p><strong>Description: </strong>{{$role->description}} </p>
          <p><strong>Creado: </strong>{{$role->created_at}} </p>
          <p><strong>Actualizado: </strong>{{$role->updated_at}} </p>
          <p><strong>Especial: </strong>{{$role->special}} </p>

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
                      <h4 class="card-title">Roles</h4>
                      <p class="category">Detalles de los Roles</p>
                    </div>
                    <div class="card-content">

                        <table  class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th width="20px">Dato</th>
                            <th width="20px">Valor</th>
                          </tr>
                        </thead>
                        <tbody>


                            <tr><td><strong>ID: </strong></td><td>{{$role->id}}</td></tr>
                            <tr><td><strong>Nombre: </strong></td><td>{{$role->name}}</td></tr>
                            <tr><td><strong>Etiqueta(slug): </td><td></strong>{{$role->slug}}</td></tr>
                            <tr><td><strong>Description: </td><td></strong>{{$role->description}}</td></tr>
                            <tr><td><strong>Creado: </td><td></strong>{{Carbon\Carbon::parse($role->created_at)->format('d-m-Y H:i')}}</td></tr>
                            <tr><td><strong>Actualizado: </td><td></strong>{{Carbon\Carbon::parse($role->updated_at)->format('d-m-Y H:i')}}</td></tr>
                            <tr><td><strong>Especial: </td><td></strong>{{$role->special}}</td></tr>




                        </tbody>
                      </table>






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
  $('#nav-cent').addClass('active');
</script>

</html>
