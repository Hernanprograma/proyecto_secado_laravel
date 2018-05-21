<div class="form-group">
  {{Form::label('name','Nombre del rol')}}
  {{Form::text('name',null,['class'=>'form-control'])}}
</div>
<div class="form-group">
  {{Form::label('slug','Etiqueta del rol(slug)')}}
  {{Form::text('slug',null,['class'=>'form-control'])}}
</div>
<div class="form-group">
  {{Form::label('description','Descripcion del rol')}}
  {{Form::text('description',null,['class'=>'form-control'])}}
</div>
{{-- <div class="form-group">
  {{Form::label('special','Especial("all_access,no_access")')}}
  {{Form::text('special',null,['class'=>'form-control'])}}
</div> --}}
<div class="form-group">

  {{Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])}}
</div>
