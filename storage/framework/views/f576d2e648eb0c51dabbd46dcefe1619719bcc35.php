<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Create Listing</div>

            <div class="panel-body">
              <?php echo Form::open(['action' => 'ListingsController@store','method' => 'POST']); ?>

                <?php echo e(Form::bsText('name','',['placeholder' => 'Company Name'])); ?>

                <?php echo e(Form::bsText('website','',['placeholder' => 'Company Website'])); ?>

                <?php echo e(Form::bsText('email','',['placeholder' => 'Contact Email'])); ?>

                <?php echo e(Form::bsText('phone','',['placeholder' => 'Contact Phone'])); ?>

                <?php echo e(Form::bsText('address','',['placeholder' => 'Business Address'])); ?>

                <?php echo e(Form::bsTextArea('bio','',['placeholder' => 'About This Business'])); ?>

                <?php echo e(Form::bsSubmit('submit')); ?>

              <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\larabiz\resources\views/createlisting.blade.php ENDPATH**/ ?>