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
@endsection
