<div class="form-group">
  <?php echo e(Form::label('linea','Linea')); ?><?php echo e(Form::select('linea', ['A'=>'A','B'=>'B'], 'A', ['class'=>'form-control'])); ?>

</div>

<div class="form-group">
  <?php echo e(Form::label('fecha','Fecha')); ?>

<?php echo e(Form::date('fecha', \Illuminate\Support\Carbon::now(), ['class'=>'form-control'])); ?>

</div>

<div class="form-group">
<?php echo e(Form::label('hora','Hora')); ?>

<?php echo e(Form::time('hora',\Illuminate\Support\Carbon::now()->format('H:i'), ['class'=>'form-control'])); ?>

</div>

<div class="form-group">
  <?php echo e(Form::label('sequedadentrada','Sequedad Entrada')); ?> <?php echo e(Form::number('sequedadentrada',null,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('sequedadsalida','Sequedad Salida')); ?> <?php echo e(Form::number('sequedadsalida',null,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('tt1','Consigna')); ?> <?php echo e(Form::number('consigna',null,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('tt2','TT1')); ?> <?php echo e(Form::number('tt1',null,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('vr','TT2')); ?> <?php echo e(Form::number('tt2',null,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('tt3','TT3')); ?> <?php echo e(Form::number('tt3',null,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('tt4','TT4')); ?> <?php echo e(Form::number('tt4',null,['class'=>'form-control','step'=>'any'])); ?>

</div>

<div class="form-group">
  <?php echo e(Form::label('intensidadtambor','Intensidad del tambor')); ?> <?php echo e(Form::number('intensidadtambor',null,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('herziosbomba','Herzios de la bomba')); ?> <?php echo e(Form::number('herziosbomba',null,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('vueltasbomba','Vueltas de la bomba de fango')); ?> <?php echo e(Form::number('vueltasbomba',null,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('nivelsilo','Nivel del silo de fango humedo')); ?> <?php echo e(Form::text('nivelsilo',null,['class'=>'form-control'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('posicionvalvula','Posicion valvula VE2')); ?> <?php echo e(Form::number('posicionvalvula',null,['class'=>'form-control','step'=>'any'])); ?>

</div>



<div class="form-group">
  <?php echo e(Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])); ?>

</div>
