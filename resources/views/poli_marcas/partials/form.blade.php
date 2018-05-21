<div class="form-group">
  {{Form::label('name','Marca de poli')}}
  {{Form::text('name',null,['class'=>'form-control'])}}
</div>
<div class="form-group">
  {{Form::label('peso','Peso')}}
  {{Form::text('peso',null,['class'=>'form-control'])}}
</div>
<div class="form-group">
  {{Form::label('precio','Precio')}}
  {{Form::text('precio',null,['class'=>'form-control'])}}
</div>
<div class="form-group">

  {{Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])}}
</div>
