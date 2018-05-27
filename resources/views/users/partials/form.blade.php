<div class="form-group">
  {{Form::label('name','Nombre')}} {{Form::text('name',null,['class'=>'form-control'])}}
</div>
<div class="form-group">
  {{Form::label('email','Email')}} {{Form::text('email',null,['class'=>'form-control'])}}
</div>

<div class="form-group">
  <ul class="list-unstyled">
    @foreach ($roles as $role)
    <li>
      <label>
  {{ Form::checkbox('roles[]', $role->id,null) }}
  {{$role->name}}
   <em>{{$role->description ?: 'Sin descripcion'}}</em>
</label>

    </li>
    @endforeach

  </ul>
</div>


<div class="form-group">

  {{Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])}}
</div>
