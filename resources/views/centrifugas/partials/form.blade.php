<div class="form-group">
  {{Form::label('fecha','Fecha')}}
{{ Form::date('fecha', null, ['class'=>'form-control']) }}
</div>

<div class="form-group">
{{Form::label('hora','Hora')}}
{{ Form::time('hora',null, ['class'=>'form-control']) }}
</div>


<div class="form-group">
  {{Form::label('centrifuga','Centrifuga')}}{{ Form::select('centrifuga', ['A'=>'A','B'=>'B','C'=>'C'], null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
  {{Form::label('entrada','A deshidratar')}} {{Form::number('entrada',null,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('salida','Sequedad Salida')}} {{Form::number('salida',null,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('consigna','Consigna')}} {{Form::number('consigna',null,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('va','VA')}} {{Form::number('va',null,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('vr','VR')}} {{Form::number('vr',null,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('par','Par')}} {{Form::number('par',null,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('t_entrada','Temperatura Entrada')}} {{Form::number('t_entrada',null,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('t_salida','Temperatura Salida')}} {{Form::number('t_salida',null,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('vibracion','Vibración')}} {{Form::number('vibracion',null,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('caudal_ent','Caudal fango entrada a Cent')}} {{Form::number('caudal_ent',null,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('marcapoli','Marca de poli')}} {{Form::text('marcapoli',null,['class'=>'form-control'])}}
</div>
<div class="form-group">
  {{Form::label('caudal_poli','Caudal de poli a centrifuga')}} {{Form::number('caudal_poli',null,['class'=>'form-control','step'=>'any'])}}
</div>

<div class="form-group">
  {{Form::label('aspecto','Aspecto del escurrido')}} {{Form::text('aspecto',null,['class'=>'form-control'])}}
</div>

<div class="form-group">
  {{Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])}}
</div>
