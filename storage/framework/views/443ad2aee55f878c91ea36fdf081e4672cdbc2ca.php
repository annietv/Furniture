
<?php $__env->startSection('title', 'Company Statements'); ?>
<?php $__env->startSection('subtitle', 'Company Statements'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.sibebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.subTitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__currentLoopData = $statements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row card py-5 justify-content-center">
            <div class="col-lg-8">
                <div class="col-12">

                </div>
                <div class="alert-success"></div>
                <form action="" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="col-12 py-3">
                        <label> Mission </label>
                        <textarea name="mission" cols="30" rows="10" id="compose-textarea" class="form-control "
                            style="height: 500px"><?php echo e($row->mission); ?></textarea>
                    </div>
                    <div class="col-12 py-3">
                        <label> Vision </label>
                        <textarea name="vision" cols="30" rows="10" id="compose-textareas" class="form-control "
                            style="height: 100px"><?php echo e($row->vision); ?></textarea>
                    </div>
                    <div class="col-12 py-3">
                        <label> Core Value </label>
                        <textarea name="coreValue" cols="30" rows="10" id="compose-textareass" class="form-control "
                            style="height: 100px"><?php echo e($row->coreValue); ?></textarea>
                    </div>
                    <div class="col-12 py-3">
                        <label> Status: </label>
                        <select name="status" class="form-control select2bs4 " style="width: 100%;">
                            <option value="" select selected>~~~~Select an option~~~~</option>
                            <option value="1" <?php if($row->status == 1): ?> selected <?php endif; ?>>Active</option>
                            <option value="0" <?php if($row->status == 0): ?> selected <?php endif; ?>>inactive</option>
                        </select>
                    </div>

                    <div class="col-12 py-3">
                        <button class="btn btn-primary btn-sm" type="submit" name="createstatement"><span
                                class="fa fa-plus-square"></span> Update Post</button>
                    </div>

            </div>
            </form>



        </div>
    </div>
</div>





</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\furniture\resources\views/admin/page/statement.blade.php ENDPATH**/ ?>