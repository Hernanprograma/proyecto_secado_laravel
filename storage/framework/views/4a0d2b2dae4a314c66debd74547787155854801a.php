<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          Editar Muestra de centrífuga
        </div>
        <div class="panel-body">
          <?php echo Form::model($centrifuga, ['route'=> ['centrifugas.update',$centrifuga], 'method'=>'PUT']); ?>


          <?php echo $__env->make('centrifugas.partials.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

           <?php echo Form::close(); ?>


        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>