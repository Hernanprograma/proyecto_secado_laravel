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

          <p><strong>Centrifuga</strong>{{$centrifuga->centrifuga}} </p>
          <p><strong>Entrada </strong>{{$centrifuga->entrada}} </p>
          <p><strong>Salida </strong>{{$centrifuga->salida}} </p>
          <p><strong>Consigna </strong>{{$centrifuga->consigna}} </p>
          <p><strong>VA </strong>{{$centrifuga->va}} </p>
          <p><strong>VR </strong>{{$centrifuga->vr}} </p>
          <p><strong>Par </strong>{{$centrifuga->par}} </p>
          <p><strong>Temp entrada centrifuga </strong>{{$centrifuga->t_entrada}} </p>
          <p><strong>Temp_salida centrifuga </strong>{{$centrifuga->t_salida}} </p>
          <p><strong>Vibracion centrifuga </strong>{{$centrifuga->vibracion}} </p>
          <p><strong>Caudal entrada a centrifuga </strong>{{$centrifuga->caudal_ent}} </p>
          <p><strong>Marca de poli </strong>{{$centrifuga->marcapoli}} </p>
          <p><strong>Caudal de poli </strong>{{$centrifuga->caudal_poli}} </p>
          <p><strong>Aspecto escurrido </strong>{{$centrifuga->aspecto}} </p>
          <p><strong>Fecha </strong>{{Carbon\Carbon::parse($centrifuga->fecha)->format('d-m-Y')}}</p>
          <p><strong>Hora </strong>{{Carbon\Carbon::parse($centrifuga->hora)->format('H:i')}}</p>
          <p><strong>Usuario dato </strong>{{$centrifuga->user->name}} </p>


        </div>
      </div>
    </div>
  </div>
</div>
@endsection
