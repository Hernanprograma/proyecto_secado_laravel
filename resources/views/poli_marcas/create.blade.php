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
          {!!Form::open(['route'=> 'poli_marcas.store'])!!}
          @include('poli_marcas.partials.form') {!!Form::close()!!}
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
                      <p class="category">Agregar marca de polielectrolito</p>
                    </div>
                    <div class="card-content">


                      {!!Form::open(['route'=> 'poli_marcas.store'])!!}
                      @include('poli_marcas.partials.form')
                      {!!Form::close()!!}



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
