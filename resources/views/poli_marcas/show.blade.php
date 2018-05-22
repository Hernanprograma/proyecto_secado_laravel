{{--
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          Marcas de Poli
        </div>
        <div class="panel-body">
          <p><strong>Marca: </strong>{{$poli_marca->name}} </p>
          <p><strong>Precio: </strong>{{$poli_marca->precio}} </p>
          <p><strong>Peso: </strong>{{$poli_marca->peso}} </p>

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
                            <th width="30px">Dato</th>
                            <th width="30px">Valor</th>

                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <tr>
                              <td><strong>Marca</strong></td>
                              <td>{{$poli_marca->name}} </td>
                            </tr>
                            <tr>
                              <td><strong>Precio </strong></td>
                              <td>{{$poli_marca->precio}} </td>
                            </tr>
                            <tr>
                              <td><strong>Peso </strong></td>
                              <td>{{$poli_marca->peso}} </td>
                            </tr>

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
  $('#nav-cent').addClass('active');
</script>

</html>
