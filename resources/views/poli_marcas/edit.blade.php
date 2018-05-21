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
          {!!Form::model($poli_marca, ['route'=> ['poli_marcas.update',$poli_marca], 'method'=>'PUT'])!!}

          @include('poli_marcas.partials.form')

           {!!Form::close()!!}
           
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
