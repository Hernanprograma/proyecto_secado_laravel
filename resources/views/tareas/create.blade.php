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
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title">Tareas</h4>
                      <p class="category">Añade una tarea</p>
                    </div>
                    <div class="card-content">
                      <div class="toolbar">

                        <!--Here you can write extra buttons/actions for the toolbar-->
                        <a class="btn btn-info" href="{{route('turnos.index')}}">Volver</a>

                      </div>

                      {!!Form::open(['route'=> 'tareas.store'])!!}
                      @include('tareas.partials.form') {!!Form::close()!!}



                    </div>
                  </div>
                  <!--  end card  -->
                </div>


                        {{-- @foreach ($tareas as $tarea)
                          <tr>
                      <td>{{$tarea->descripcion}}
                          @can ('tareas.destroy')
                          <td style="padding:0">
                            {!!Form::open(['route'=>['tareas.destroy',$tarea->id], 'method'=>'DELETE'])!!}
                            <button class="btn btn-sm btn-danger">Eliminar</button> {!!Form::close()!!}
                          </td>
                        </td>
                          @endcan


                          @endforeach --}}
                          @include('tareas.partials.tasks')



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
  $('#nav-tareas').addClass('active');
</script>

</html>
