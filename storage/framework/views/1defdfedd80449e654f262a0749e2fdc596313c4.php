
<?php $__env->startSection('title', 'Post About Us'); ?>
<?php $__env->startSection('subtitle', 'Post About Us'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.sibebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.subTitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__currentLoopData = $abouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                        <label> Page Title </label>
                        <input type="text" name="title" class="form-control" value="<?php echo e($row->title); ?>">
                    </div>
                    <div class="col-12 py-3">
                        <label> Description </label>
                        <textarea name="aboutdesc" cols="30" rows="10" id="compose-textarea" class="form-control "
                            style="height: 500px"><?php echo e($row->aboutdesc); ?></textarea>
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
                        <label> Add Picture</label>

                        <div id="kv-avatar-errors-1"
                            class="input-group mb-3 px-2 py-2 rounded-pill bg-light shadow-lg justify-content-center col-lg-">
                            <input id="upload" type="file" onchange="readURL(this);" class="form-control border-0"
                                name="proimage">
                            <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose
                                file</label>
                            <div class="input-group-append">
                                <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i
                                        class="fa fa-cloud-upload mr-2 text-muted"></i><small
                                        class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                            </div>
                        </div>

                        <!-- Uploaded image area-->
                        <p class="font-italic text-dark text-center">The image uploaded will be rendered inside the box
                            below.</p>
                        <div class="image-area mt-4"><img id="imageResult" src="#" alt=""
                                class="img-fluid rounded shadow-sm mx-auto d-block "></div>

                    </div>
            </div>
            <div class="col-lg-4">
                <div class="card-body">
                    <img src="<?php echo e(asset('images/about/'.$row->proimage)); ?>" alt="" width="100%">
                </div>
            </div>
        </div>

    </div>
    <div class="col-12 py-3">
        <button class="btn btn-warning btn-sm" type="submit" name="createabout"><span class="fa fa-plus-square"></span>
            Update Page</button>

    </div>

</div>
</form>



</div>

</div>






</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\furniture\resources\views/admin/page/about.blade.php ENDPATH**/ ?>