<div class="row">
<div class="form-group  col-md-4 col-xs-6">
  {{Form::label('name','Marca de poli')}}
  {{Form::text('name',null,['class'=>'form-control'])}}
</div>
<div class="form-group  col-md-4 col-xs-6">
  {{Form::label('peso','Peso')}}
  {{Form::text('peso',null,['class'=>'form-control'])}}
</div>
<div class="form-group  col-md-4 col-xs-6">
  {{Form::label('precio','Precio')}}
  {{Form::text('precio',null,['class'=>'form-control'])}}
</div>
</div>
<div class="form-group">

  {{Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])}}
</div>
