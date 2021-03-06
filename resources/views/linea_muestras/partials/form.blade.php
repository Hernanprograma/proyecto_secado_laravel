<div class="row">
  <div class="form-group col-md-3 col-xs-6">
    {{Form::label('linea','Linea')}}{{ Form::select('linea', ['A'=>'A','B'=>'B'], null, ['class'=>'form-control']) }}
  </div>
  <div class="form-group col-md-3 col-xs-6">
    {{Form::label('fecha','Fecha')}}
    {{ Form::date('fecha',null, ['class'=>'form-control']) }}
  </div>
  <div class="form-group col-md-3 col-xs-6">
    {{Form::label('hora','Hora')}}
    {{ Form::time('hora',null, ['class'=>'form-control']) }}
  </div>
  <div class="form-group col-md-3 col-xs-6">
    {{Form::label('sequedadentrada','Sequedad Entrada')}} {{Form::number('sequedadentrada',null,['class'=>'form-control','step'=>'any'])}}
  </div>
  <div class="form-group col-md-3 col-xs-6">
    {{Form::label('sequedadsalida','Sequedad Salida')}} {{Form::number('sequedadsalida',null,['class'=>'form-control','step'=>'any'])}}
  </div>
  <div class="form-group col-md-3 col-xs-6">
    {{Form::label('tt1','Consigna')}} {{Form::number('consigna',null,['class'=>'form-control','step'=>'any'])}}
  </div>
  <div class="form-group col-md-3 col-xs-6">
    {{Form::label('tt2','TT1')}} {{Form::number('tt1',null,['class'=>'form-control','step'=>'any'])}}
  </div>
  <div class="form-group col-md-3 col-xs-6">
    {{Form::label('vr','TT2')}} {{Form::number('tt2',null,['class'=>'form-control','step'=>'any'])}}
  </div>
  <div class="form-group col-md-3 col-xs-6">
    {{Form::label('tt3','TT3')}} {{Form::number('tt3',null,['class'=>'form-control','step'=>'any'])}}
  </div>
  <div class="form-group  col-md-3 col-xs-6">
    {{Form::label('tt4','TT4')}} {{Form::number('tt4',null,['class'=>'form-control','step'=>'any'])}}
  </div>
  <div class="form-group  col-md-3 col-xs-6">
    {{Form::label('intensidadtambor','Intensidad del tambor')}} {{Form::number('intensidadtambor',null,['class'=>'form-control','step'=>'any'])}}
  </div>
  <div class="form-group col-md-3 col-xs-6">
    {{Form::label('herziosbomba','Herzios de la bomba')}} {{Form::number('herziosbomba',null,['class'=>'form-control','step'=>'any'])}}
  </div>
  <div class="form-group  col-md-3 col-xs-6">
    {{Form::label('vueltasbomba','Vueltas de la bomba de fango')}} {{Form::number('vueltasbomba',null,['class'=>'form-control','step'=>'any'])}}
  </div>
  <div class="form-group  col-md-3 col-xs-6">
    {{Form::label('nivelsilo','Nivel del silo de fango humedo')}} {{Form::number('nivelsilo',null,['class'=>'form-control'])}}
  </div>
  <div class="form-group  col-md-3 col-xs-6">
    {{Form::label('posicionvalvula','Posicion valvula VE2')}} {{Form::number('posicionvalvula',null,['class'=>'form-control','step'=>'any'])}}
  </div>
</div>



<div class="form-group">
  {{Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])}}
</div>