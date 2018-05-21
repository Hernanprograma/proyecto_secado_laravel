@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          Crear muestra de Centrifuga
        </div>
        <div class="panel-body">
          {!!Form::open(['route'=> 'centrifugas.store'])!!}
          @include('centrifugas.partials.form')
          {!!Form::close()!!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
