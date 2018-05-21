@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          Rol
        </div>
        <div class="panel-body">
          <p><strong>ID: </strong>{{$role->id}} </p>
          <p><strong>Nombre: </strong>{{$role->name}} </p>
          <p><strong>Etiqueta(slug): </strong>{{$role->slug}} </p>
          <p><strong>Description: </strong>{{$role->description}} </p>
          <p><strong>Creado: </strong>{{$role->created_at}} </p>
          <p><strong>Actualizado: </strong>{{$role->updated_at}} </p>
          <p><strong>Especial: </strong>{{$role->special}} </p>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
