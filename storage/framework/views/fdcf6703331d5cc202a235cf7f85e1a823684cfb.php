<?php if(Session::has('error')): ?>
<div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h5><i class="icon fa fa-ban"></i> <?php echo e(__('Alert!')); ?></h5>
  <?php echo e(__(Session::get('error'))); ?>

</div>
<?php endif; ?>

<?php if(Session::has('info')): ?>
<div class="alert alert-info alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h5><i class="icon fa fa-info"></i> <?php echo e(__('Alert!')); ?></h5>
  <?php echo e(__(Session::get('info'))); ?>

</div>
<?php endif; ?>

<?php if(Session::has('warning')): ?>
<div class="alert alert-warning alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h5><i class="icon fa fa-exclamation-triangle"></i> <?php echo e(__('Alert!')); ?></h5>
  <?php echo e(__(Session::get('warning'))); ?>

</div>
<?php endif; ?>

<?php if(Session::has('success')): ?>
<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h5><i class="icon fa fa-check"></i> <?php echo e(__('Success!')); ?></h5>
  <?php echo e(__(Session::get('success'))); ?>

</div>
<?php endif; ?>

<div>
  <?php if($errors->any()): ?>
      <div class="alert alert-danger">
          <ul>
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
      </div>
  <?php endif; ?>
</div><?php /**PATH /opt/lampp/htdocs/covid19-tms/resources/views/backend/includes/alerts.blade.php ENDPATH**/ ?>