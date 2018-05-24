
<div class="form-group">
  {{Form::label('fecha','Fecha')}}
{{ Form::date('fecha', \Illuminate\Support\Carbon::now(), ['class'=>'form-control']) }}
</div>

<div class="form-group">
{{Form::label('hora','Hora de Paro/Marcha')}}
{{ Form::time('hora',\Illuminate\Support\Carbon::now()->format('H:i'), ['class'=>'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('Marcas') }}
    {{ Form::select('marcas', $marcas->pluck('name','id'),$selected , array('class'=>'form-control','required'=>'required')) }}
</div>


<div class="form-group">
  {{Form::label('incidencias','Incidencias')}} {{Form::textarea('incidencias',null,['class'=>'form-control'])}}
</div>
<div class="form-group">
  {{Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])}}
</div>
