
<?php $__env->startSection('title', 'Create new Feature Banner Contents'); ?>
<?php $__env->startSection('subtitle', 'Create new Feature Banner Contents'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.sibebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.subTitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row card py-5 justify-content-center">
            <div class="col-lg-8">
                <div class="col-12">

                </div>
                <div class="alert-success"></div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="col-12 py-3">
                        <label> Title </label>
                        <input type="text" name="scholorhip" class="form-control" value="Scholorship News">
                    </div>
                    <div class="col-12 py-3">
                        <label> Contents </label>
                        <textarea name="schollorContent" cols="30" rows="10" id="compose-textarea" class="form-control "
                            style="height: 500px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</textarea>
                    </div>
                    <div class="col-12 py-3">
                        <label> Title </label>
                        <input type="text" name="notice" class="form-control" value="Our Notice Board">
                    </div>
                    <div class="col-12 py-3">
                        <label> Contents </label>
                        <textarea name="noticeContent" cols="30" rows="10" id="compose-textarea" class="form-control "
                            style="height: 500px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</textarea>
                    </div>
                    <label> Title </label>
                    <input type="text" name="achievements" class="form-control" value="Our Achievements">
            </div>
            <div class="col-12 py-3">
                <label> Contents </label>
                <textarea name="archiveContent" cols="30" rows="10" id="compose-textarea" class="form-control "
                    style="height: 500px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</textarea>
            </div>
            <label> Title </label>
            <input type="text" name="admission" class="form-control" value="Admission Now">
        </div>
        <div class="col-12 py-3">
            <label> Contents </label>
            <textarea name="admissionContent" cols="30" rows="10" id="compose-textarea" class="form-control "
                style="height: 500px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</textarea>
        </div>

        <div class="col-12 py-3">
            <label> Status: </label>
            <select name="status" class="form-control select2bs4 " style="width: 100%;">
                <option value="" select selected>~~~~Select an option~~~~</option>
                <option value="1">Active</option>
                <option value="0">inactive</option>
            </select>
        </div>

        <div class="col-12 py-3">
            <button class="btn btn-primary btn-sm" type="submit" name="featurehome"><span
                    class="fa fa-plus-square"></span>
                Add Post</button>
        </div>

    </div>
    </form>



</div>
</div>






</div>
<?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\furniture\resources\views/admin/page/featurebanner.blade.php ENDPATH**/ ?>