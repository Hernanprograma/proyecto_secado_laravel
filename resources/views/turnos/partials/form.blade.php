<div class="form-group" >
  {{Form::label('turno','Centrifuga')}}{{ Form::select('turno', ['MAÑANA'=>'MAÑANA','TARDE'=>'TARDE','NOCHE'=>'NOCHE'], null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
  {{Form::label('fecha','Fecha')}}
{{ Form::date('fecha',null, ['class'=>'form-control']) }}
</div>

<div class="form-group">
{{Form::label('hora','Hora')}}
{{ Form::time('hora',null, ['class'=>'form-control']) }}
</div>


<div class="form-group">
  {{Form::label('incidencias','Incidencias')}} {{Form::textarea('incidencias',null,['class'=>'form-control'])}}
</div>
<div class="form-group">
  {{Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])}}
</div>
