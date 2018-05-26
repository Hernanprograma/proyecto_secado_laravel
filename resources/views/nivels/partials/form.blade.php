
<div class="form-group">
  {{Form::label('fecha','Fecha')}} {{ Form::date('fecha', $nivel->fecha, ['class'=>'form-control']) }}
</div>
<div class="form-group">
  {{Form::label('hora','Hora')}} {{ Form::time('hora',$nivel->hora, ['class'=>'form-control']) }}
</div>
<div class="form-group">
  {{Form::label('nivel_seco_a','Nivel de fango seco A')}} {{Form::number('nivel_seco_a',$nivel->nivel_seco_a,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('nivel_seco_b','Nivel de fango seco B')}} {{Form::number('nivel_seco_b',$nivel->nivel_seco_b,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('silo_nuevo','Silo Nuevo de fango(Centrifugas)')}} {{Form::number('silo_nuevo',$nivel->silo_nuevo,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('silo_almacen','Silo Almacenamiento(Camiones)')}} {{Form::number('silo_almacen',$nivel->silo_almacen,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('digestor','Digestor')}} {{Form::number('digestor',$nivel->digestor,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('tolva_recepcion','Tolva Recepcion(Camiones)')}}{{ Form::select('tolva_recepcion', ['Vacia'=>'Vacia','Llena'=>'Llena','Por la mitad'=>'Por la mitad','Dos tercios'=>'Dos tercios'], $nivel->tolva_recepcion, ['class'=>'form-control']) }}
</div>

<div class="form-group">
  {{Form::label('gas','Gas')}} {{Form::number ('gas',$nivel->gas,['class'=>'form-control','step'=>'any'])}}
</div>
<div class="form-group">
  {{Form::label('linea_a','Estado linea A')}}{{ Form::select('linea_a', ['En Marcha'=>'En Marcha','Parada'=>'parada'], $nivel->linea_a, ['class'=>'form-control']) }}
</div>
<div class="form-group">
  {{Form::label('linea_b','Estado linea B')}}{{ Form::select('linea_b', ['En Marcha'=>'En Marcha','Parada'=>'parada'], $nivel->linea_b, ['class'=>'form-control']) }}
</div>
<div class="form-group">
  {{Form::label('centrifuga_a','Estado Centrifuga A')}}{{ Form::select('centrifuga_a', ['En Marcha'=>'En Marcha','Parada'=>'parada'], $nivel->centrifuga_a, ['class'=>'form-control']) }}
</div>
<div class="form-group">
  {{Form::label('centrifuga_b','Estado Centrifuga B')}}{{ Form::select('centrifuga_b', ['En Marcha'=>'En Marcha','Parada'=>'parada'], $nivel->centrifuga_b, ['class'=>'form-control']) }}
</div>
<div class="form-group">
  {{Form::label('centrifuga_c','Estado Centrifuga C')}}{{ Form::select('centrifuga_c', ['En Marcha'=>'En Marcha','Parada'=>'parada'], $nivel->centrifuga_c, ['class'=>'form-control']) }}
</div>


{{-- Boton Submit --}}
<div class="form-group">
  {{Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])}}
</div>
