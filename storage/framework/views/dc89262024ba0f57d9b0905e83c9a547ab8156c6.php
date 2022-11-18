
<?php $__env->startSection('title', 'Social Media Handles'); ?>
<?php $__env->startSection('subtitle', 'Social Media Handles'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.sibebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.subTitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__currentLoopData = $socialMedia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                        <label> Facebook </label>
                        <input type="text" class="form-control" name="facebook" value="<?php echo e($row->facebook); ?>">
                    </div>
                    <div class="col-12 py-2">
                        <label> Instagram </label>
                        <input type="text" class="form-control" name="instagram" value="<?php echo e($row->instagram); ?>">
                    </div>
                    <div class="col-12 py-2">
                        <label> Linkedin </label>
                        <input type="text" class="form-control" name="linkedin" value="<?php echo e($row->linkedin); ?>">
                    </div>
                    <div class="col-12 py-2">
                        <label> Twitter </label>
                        <input type="text" class="form-control" name="twitter" value="<?php echo e($row->twitter); ?>">
                    </div>
                    <div class="col-12 py-2">
                        <label> Google+ </label>
                        <input type="text" class="form-control" name="google" value="<?php echo e($row->google); ?>">
                    </div>
                    <div class="col-12 py-2">
                        <button class="btn btn-success" type="submit" name="setfooters"><span class="fa fa-save">
                                Save</span></button>

                    </div>
                </form>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\furniture\resources\views/admin/page/socialMedia.blade.php ENDPATH**/ ?>