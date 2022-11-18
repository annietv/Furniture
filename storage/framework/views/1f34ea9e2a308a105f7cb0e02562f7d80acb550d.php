
<?php $__env->startSection('title', 'Email Configuration'); ?>
<?php $__env->startSection('subtitle', 'Email Configuration'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.sibebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.subTitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__currentLoopData = $mailsets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row card py-5 justify-content-center">
            <div class="col-lg-8">
                <div class="col-12">

                </div>
                <div class="alert-success"></div>
                <form action="" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="col-12 py-3">
                        <label> SMTP Secutity Type </label>
                        <input type="text" name="smtp" class="form-control" value="<?php echo e($row->smtp); ?>">
                    </div>
                    <div class="col-12 py-3">
                        <label> Email Host</label>
                        <input type="text" name="host" class="form-control" value="<?php echo e($row->host); ?>">
                    </div>
                    <div class="col-12 py-3">
                        <label> Port</label>
                        <input type="text" name="port" class="form-control" value="<?php echo e($row->port); ?>">
                    </div>
                    <div class="col-12 py-3">
                        <label> Username </label>
                        <input type="email" name="username" class="form-control" value="<?php echo e($row->username); ?>">
                        <small> e.g yourmail@gmail.com</small>
                    </div>
                    <div class="col-12 py-3">
                        <label> Password </label>
                        <input type="password" name="psw" class="form-control" value="<?php echo e($row->psw); ?>">
                        <small> your mail password</small>
                    </div>

                    <div class="col-12 py-3">
                        <button class="btn btn-primary btn-sm" type="submit" name="models"><span
                                class="fa fa-plus-square"></span>
                            Set Mail</button>
                    </div>

            </div>
            </form>



        </div>
    </div>






</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\furniture\resources\views/admin/page/mail.blade.php ENDPATH**/ ?>