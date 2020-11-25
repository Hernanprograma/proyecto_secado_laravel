<div class="row">
  <div class="form-group col-md-4 col-xs-6">
    <?php echo e(Form::label('fecha','Fecha')); ?>

    <?php echo e(Form::date('fecha', \Illuminate\Support\Carbon::now(), ['class'=>'form-control'])); ?>

  </div>

  <div class="form-group col-md-4 col-xs-6">
    <?php echo e(Form::label('hora','Hora')); ?>

    <?php echo e(Form::time('hora',\Illuminate\Support\Carbon::now()->format('H:i'), ['class'=>'form-control'])); ?>

  </div>

  <div class="form-group col-md-4 col-xs-6">
    <?php echo e(Form::label('Marcas')); ?>

    <?php echo e(Form::select('marcas', $marcas->pluck('name','id'),$selected , array('class'=>'form-control','required'=>'required'))); ?>

  </div>

  <div class="form-group col-md-12 col-xs-12">
    <?php echo e(Form::label('incidencias','Incidencias')); ?> <?php echo e(Form::textarea('incidencias',null,['class'=>'form-control'])); ?>

  </div>
</div>
<div class="form-group">
  <?php echo e(Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])); ?>

</div>