

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
                      <h4 class="card-title">Permiso</h4>
                      <p class="category">Detalles del permiso</p>
                    </div>
                    <div class="card-content">
                      <div class="toolbar">

                        <!--Here you can write extra buttons/actions for the toolbar-->
                        <a class="btn btn-info" href="{{ URL::previous() }}">Volver</a>

                      </div>

                        <table  class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th width="20px">Dato</th>
                            <th width="20px">Valor</th>
                          </tr>
                        </thead>
                        <tbody>


                            <tr><td><strong>ID: </strong></td><td>{{$permiso->id}}</td></tr>
                            <tr><td><strong>Nombre: </strong></td><td>{{$permiso->name}}</td></tr>
                            <tr><td><strong>Etiqueta(slug): </td><td></strong>{{$permiso->slug}}</td></tr>
                            <tr><td><strong>Description: </td><td></strong>{{$permiso->description}}</td></tr>
                            <tr><td><strong>Creado: </td><td></strong>{{Carbon\Carbon::parse($permiso->created_at)->format('d-m-Y H:i')}}</td></tr>
                            <tr><td><strong>Actualizado: </td><td></strong>{{Carbon\Carbon::parse($permiso->updated_at)->format('d-m-Y H:i')}}</td></tr>





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
  $('#nav-permisos').addClass('active');
</script>

</html>
