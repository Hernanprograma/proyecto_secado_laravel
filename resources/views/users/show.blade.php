{{-- @extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          Usuario
        </div>
        <div class="panel-body">
          <p><strong>ID: </strong>{{$user->id}} </p>
          <p><strong>Nombre: </strong>{{$user->name}} </p>
          <p><strong>Email: </strong>{{$user->email}} </p>


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
                      <p class="category">Detalles de muestra de la centrífuga</p>
                    </div>
                    <div class="card-content">

                        <table  class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th width="20px">Dato</th>
                            <th width="30px">Valor</th>

                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <tr><td><strong>ID</strong></td><td>{{$user->id}} </td></tr>
                            <tr><td><strong>Nombre </strong></td><td>{{$user->name}} </td></tr>
                            <tr><td><strong>Email </strong></td><td>{{$user->email}} </td></tr>


                          </tr>
                        


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
  $('#nav-user').addClass('active');
</script>

</html>
