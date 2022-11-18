
<?php $__env->startSection('title', 'Contact Details'); ?>
<?php $__env->startSection('subtitle', 'Contact Details'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.sibebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.subTitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__currentLoopData = $contact_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="wrapper">


    <div class="container">
        <div class="row">
            <div class="col-lg-10 card">
                <h4 class="text-success"></h4>

                <form action="" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="col-12 py-2">

                        <!-- <input type="hidden" class="form-control" name="userId" value=""> -->

                    </div>
                    <div class="col-12 py-2">
                        <label> Email Address</label>
                        <input type="text" class="form-control" name="email" value="<?php echo e($row->email); ?>">
                    </div>
                    <div class="col-12 py-2">
                        <label> Phone Number Line 1</label>
                        <input type="text" class="form-control" name="phoneone" value="<?php echo e($row->phoneone); ?>">
                    </div>
                    <div class="col-12 py-2">
                        <label> Phone Number Line 2 </label>
                        <input type="text" class="form-control" name="phonetwo" value="<?php echo e($row->phonetwo); ?>">
                    </div>
                    <div class="col-12 py-2">
                        <label> Office Address 1 </label>
                        <textarea name="office_address_one" id="compose-textarea" cols="30" rows="10"
                            class="form-control"><?php echo e($row->office_address_one); ?></textarea>
                    </div>
                    <div class="col-12 py-2">
                        <label> Office Address 2 </label>
                        <textarea name="office_address_two" id="compose-textarea2" cols="30" rows="10"
                            class="form-control"><?php echo e($row->office_address_two); ?></textarea>
                    </div>

                    <div class="col-12 py-2">
                        <button class="btn btn-success" type="submit" name="setfooters"><span class="fa fa-save">
                            </span> Save</button>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\furniture\resources\views/admin/page/contactdetails.blade.php ENDPATH**/ ?>