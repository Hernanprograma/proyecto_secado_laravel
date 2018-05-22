<div class="form-group">
  {{Form::label('name','Nombre del rol')}} {{Form::text('name',null,['class'=>'form-control'])}}
</div>
<div class="form-group">
  {{Form::label('slug','Etiqueta del rol(slug)')}} {{Form::text('slug',null,['class'=>'form-control'])}}
</div>
<div class="form-group">
  {{Form::label('description','Descripcion del rol')}} {{Form::text('description',null,['class'=>'form-control'])}}
</div>

@if($permisos)
<div class="form-group">
  <ul class="list-unstyled">

    @foreach ($permisos as $permiso)
    <li>
      <label>
        <input type="checkbox" name="permisos[]" value="{{ $permiso->id }}" @if($role->permissions->contains($permiso)) checked @endif>

  {{$permiso->id}}
   <em>({{$permiso->description ?: 'Sin descripcion'}})</em>
</label>

    </li>
    @endforeach
  </ul>
</div>
@endif

<div class="form-group">

  {{Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])}}
</div>
