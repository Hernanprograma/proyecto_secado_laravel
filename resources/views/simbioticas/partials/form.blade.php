<div class="row">
  <div class="form-group  col-md-3 col-xs-6">
    {{Form::label('fecha','Fecha')}}
    {{ Form::date('fecha', \Illuminate\Support\Carbon::now(), ['class'=>'form-control']) }}
  </div>

  <div class="form-group  col-md-3 col-xs-6">
    {{Form::label('hora','Hora')}}
    {{ Form::time('hora',\Illuminate\Support\Carbon::now()->format('H:i'), ['class'=>'form-control']) }}
  </div>

  <div class="form-group  col-md-3 col-xs-6">
    {{Form::label('caudal','Caudal')}} {{Form::number('caudal',null,['class'=>'form-control','step'=>'any'])}}
  </div>
  <div class="form-group  col-md-3 col-xs-6">
    {{Form::label('totalizado','Totalizado')}} {{Form::number('totalizado',null,['class'=>'form-control','step'=>'any'])}}
  </div>

  <div class="form-group  col-md-12 col-xs-12">
    {{Form::label('incidencias','Incidencias')}} {{Form::textarea('incidencias',null,['class'=>'form-control'])}}
  </div>

</div>
<div class="form-group">
  {{Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])}}
</div>