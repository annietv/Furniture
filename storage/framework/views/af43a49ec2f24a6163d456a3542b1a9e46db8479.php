
<?php $__env->startSection('title', 'Payment Settings'); ?>
<?php $__env->startSection('subtitle', 'Payment Settings'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.sibebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.subTitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row card py-5 justify-content-center">
            <div class="col-lg-8">
                <div class="col-12">

                </div>


                <div class="alert-success"></div>
                <form action="" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class=" col-12 py-3">
                        <label> Bank Name </label>
                        <input type="text" name="bank" class="form-control" value="<?php echo e($row->bank); ?>">
                    </div>
                    <div class=" col-12 py-3">
                        <label> Account Name </label>
                        <input type="text" name="account_name" class="form-control" value="<?php echo e($row->account_name); ?>">
                    </div>
                    <div class=" col-12 py-3">
                        <label> Account Number </label>
                        <input type="text" name="account_number" class="form-control" value="<?php echo e($row->account_number); ?>">
                    </div>
                    <div class="col-12 py-3">
                        <label> Payment Terms </label>
                        <textarea name="payment_terms" cols="30" rows="10" id="compose-textarea" class="form-control "
                            style="height: 500px"><?php echo e($row->payment_terms); ?></textarea>
                    </div>
                    <div class="col-12 py-3">
                        <label> Status: </label>
                        <select name="status" class="form-control select2bs4 " style="width: 100%;">
                            <option value="" select selected>~~~~Select an option~~~~</option>
                            <option value="1" <?php if($row->status ==1): ?> selected <?php endif; ?>>Active</option>
                            <option value="0" <?php if($row->status ==0): ?> selected <?php endif; ?>>inactive</option>
                        </select>
                    </div>

                    <div class="col-12 py-3">
                        <button class="btn btn-warning btn-sm" type="submit" name="createabout"><span
                                class="fa fa-plus-square"></span>
                            Update Payments</button>

                    </div>

            </div>
            </form>



        </div>
    </div>
</div>
</div>

</div>






</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\furniture\resources\views/admin/payment/payment.blade.php ENDPATH**/ ?>