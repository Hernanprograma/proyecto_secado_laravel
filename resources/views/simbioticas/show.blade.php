{{--
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          Detalles Muestra de centífuga
        </div>
        <div class="panel-body">

          <tr><strong>Centrifuga</strong>{{$centrifuga->centrifuga}} </td></tr>
          <tr><strong>Entrada </strong>{{$centrifuga->entrada}} </td></tr>
          <tr><strong>Salida </strong>{{$centrifuga->salida}} </td></tr>
          <tr><strong>Consigna </strong>{{$centrifuga->consigna}} </td></tr>
          <tr><strong>VA </strong>{{$centrifuga->va}} </td></tr>
          <tr><strong>VR </strong>{{$centrifuga->vr}} </td></tr>
          <tr><strong>Par </strong>{{$centrifuga->par}} </td></tr>
          <tr><strong>Temp entrada centrifuga </strong>{{$centrifuga->t_entrada}} </td></tr>
          <tr><strong>Temp_salida centrifuga </strong>{{$centrifuga->t_salida}} </td></tr>
          <tr><strong>Vibracion centrifuga </strong>{{$centrifuga->vibracion}} </td></tr>
          <tr><strong>Caudal entrada a centrifuga </strong>{{$centrifuga->caudal_ent}} </td></tr>
          <tr><strong>Marca de poli </strong>{{$centrifuga->marcapoli}} </td></tr>
          <tr><strong>Caudal de poli </strong>{{$centrifuga->caudal_poli}} </td></tr>
          <tr><strong>Aspecto escurrido </strong>{{$centrifuga->aspecto}} </td></tr>
          <tr><strong>Fecha </strong>{{Carbon\Carbon::parse($centrifuga->fecha)->format('d-m-Y')}}</td></tr>
          <tr><strong>Hora </strong>{{Carbon\Carbon::parse($centrifuga->hora)->format('H:i')}}</td></tr>
          <tr><strong>Usuario dato </strong>{{$centrifuga->user->name}} </td></tr>


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
                            <tr><td><strong>Centrifuga</strong></td><td>{{$centrifuga->centrifuga}} </td></tr>
                            <tr><td><strong>Entrada </strong></td><td>{{$centrifuga->entrada}} </td></tr>
                            <tr><td><strong>Salida </strong></td><td>{{$centrifuga->salida}} </td></tr>
                            <tr><td><strong>Consigna </strong></td><td>{{$centrifuga->consigna}} </td></tr>
                            <tr><td><strong>VA </strong></td><td>{{$centrifuga->va}} </td></tr>
                            <tr><td><strong>VR </strong></td><td>{{$centrifuga->vr}} </td></tr>
                            <tr><td><strong>Par </strong></td><td>{{$centrifuga->par}} </td></tr>
                            <tr><td><strong>Temp entrada centrifuga </strong></td><td>{{$centrifuga->t_entrada}} </td></tr>
                            <tr><td><strong>Temp_salida centrifuga </strong></td><td>{{$centrifuga->t_salida}} </td></tr>
                            <tr><td><strong>Vibracion centrifuga </strong></td><td>{{$centrifuga->vibracion}} </td></tr>
                            <tr><td><strong>Caudal entrada a centrifuga </strong></td><td>{{$centrifuga->caudal_ent}} </td></tr>
                            <tr><td><strong>Marca de poli </strong></td><td>{{$centrifuga->marcapoli}} </td></tr>
                            <tr><td><strong>Caudal de poli </strong></td><td>{{$centrifuga->caudal_poli}} </td></tr>
                            <tr><td><strong>Aspecto escurrido </strong></td><td>{{$centrifuga->aspecto}} </td></tr>
                            <tr><td><strong>Fecha </strong></td><td>{{Carbon\Carbon::parse($centrifuga->fecha)->format('d-m-Y')}}</td></tr>
                            <tr><td><strong>Hora </strong></td><td>{{Carbon\Carbon::parse($centrifuga->hora)->format('H:i')}}</td></tr>
                            <tr><td><strong>Usuario dato </strong></td><td>@isset($centrifuga->user->name){{$centrifuga->user->name}} @endisset</td></tr>

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
