<?php $__env->startSection('content'); ?>
 
<p>
    <div class="panel-heading"> <?php echo e(Auth::user()->name); ?>'s   Dashboard </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card panel-default">
               
               
              
                <div class="panel-body">
                  <span class="float-left"> <h4>Your Listings</h4></span><span class="float-right"><a href="/larabiz/public/listings/create" class="btn btn-success btn-xs">Add Listing</a></span>
                    
                    <?php if(count($listings)): ?>
                      <table class="table table-striped">
                        <tr>
                          <th>Company</th>
                          <th></th>
                          <th></th>
                        </tr>
                        <?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <td><?php echo e($listing->name); ?></td>
                            <td><a class="float-right btn btn-default" href="/listings/<?php echo e($listing->id); ?>/edit">Edit</a></td>
                            <td>
                              <?php echo Form::open(['action' => ['ListingsController@destroy', $listing->id],'method' => 'POST', 'class' => 'float-left', 'onsubmit' => 'return confirm("Are you sure?")']); ?>

                                <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                                <?php echo e(Form::bsSubmit('Delete', ['class' => 'btn btn-danger'])); ?>

                              <?php echo Form::close(); ?>

                            </td>
                          </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\larabiz\resources\views/dashboard.blade.php ENDPATH**/ ?>