<div class="row">
<div class="form-group col-md-3 col-xs-6">
  {{Form::label('centrifuga','Centrifuga')}}{{ Form::select('centrifuga', ['A'=>'A','B'=>'B','C'=>'C'], null, ['class'=>'form-control']) }}
</div>
<div class="form-group col-md-3 col-xs-6">
  {{Form::label('fecha','Fecha')}}
{{ Form::date('fecha',null, ['class'=>'form-control']) }}
</div>

<div class="form-group col-md-3 col-xs-6">
{{Form::label('hora','Hora de Paro/Marcha')}}
{{ Form::time('hora',null, ['class'=>'form-control']) }}
</div>

<div class="form-group col-md-3 col-xs-6">
  {{Form::label('estado','Estado')}}{{ Form::select('estado', ['En Marcha'=>'En Marcha','Parada'=>'Parada'], null, ['class'=>'form-control']) }}
</div>

<div class="form-group col-md-12 col-xs-12">
  {{Form::label('incidencias','Incidencias')}} {{Form::textarea('incidencias',null,['class'=>'form-control'])}}
</div>

</div>

<div class="form-groups">
  {{Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])}}
</div>
