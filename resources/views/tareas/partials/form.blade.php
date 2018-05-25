
<div class="form-group">

  {{Form::label('fecha','Fecha')}} {{ Form::date('fecha', \Illuminate\Support\Carbon::now(), ['class'=>'form-control']) }}
</div>

<div class="form-group">
  {{Form::label('hora','Hora')}} {{ Form::time('hora',\Illuminate\Support\Carbon::now()->format('H:i'), ['class'=>'form-control']) }}
</div>

{!! Form::hidden('turno_id', $turno_id) !!}


<div class="form-group">
  {{Form::label('descripcion','Tarea')}} {{Form::text('descripcion',null,['class'=>'form-control'])}}
</div>
<div class="form-group">
  {{Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])}}
</div>
