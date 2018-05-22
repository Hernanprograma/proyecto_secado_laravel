<div class="form-group">
  <?php echo e(Form::label('fecha','Fecha')); ?>

<?php echo e(Form::date('fecha', \Illuminate\Support\Carbon::now(), ['class'=>'form-control'])); ?>

</div>

<div class="form-group">
<?php echo e(Form::label('hora','Hora')); ?>

<?php echo e(Form::time('hora',\Illuminate\Support\Carbon::now()->format('H:i'), ['class'=>'form-control'])); ?>

</div>


<div class="form-group">
  <?php echo e(Form::label('centrifuga','Centrifuga')); ?><?php echo e(Form::select('centrifuga', ['A'=>'A','B'=>'B','C'=>'C'], 'A', ['class'=>'form-control'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('entrada','A deshidratar')); ?> <?php echo e(Form::number('entrada',null,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('salida','Sequedad Salida')); ?> <?php echo e(Form::number('salida',null,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('consigna','Consigna')); ?> <?php echo e(Form::number('consigna',null,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('va','VA')); ?> <?php echo e(Form::number('va',null,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('vr','VR')); ?> <?php echo e(Form::number('vr',null,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('par','Par')); ?> <?php echo e(Form::number('par',null,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('t_entrada','Temperatura Entrada')); ?> <?php echo e(Form::number('t_entrada',null,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('t_salida','Temperatura Salida')); ?> <?php echo e(Form::number('t_salida',null,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('vibracion','Vibración')); ?> <?php echo e(Form::number('vibracion',null,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('caudal_ent','Caudal fango entrada a Cent')); ?> <?php echo e(Form::number('caudal_ent',null,['class'=>'form-control','step'=>'any'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('marcapoli','Marca de poli')); ?> <?php echo e(Form::text('marcapoli',null,['class'=>'form-control'])); ?>

</div>
<div class="form-group">
  <?php echo e(Form::label('caudal_poli','Caudal de poli a centrifuga')); ?> <?php echo e(Form::number('caudal_poli',null,['class'=>'form-control','step'=>'any'])); ?>

</div>

<div class="form-group">
  <?php echo e(Form::label('aspecto','Aspecto del escurrido')); ?> <?php echo e(Form::text('aspecto',null,['class'=>'form-control'])); ?>

</div>

<div class="form-group">
  <?php echo e(Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])); ?>

</div>
