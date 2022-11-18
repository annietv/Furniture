
<?php $__env->startSection('title', 'Add Products'); ?>
<?php $__env->startSection('subtitle', 'Add Products'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.sibebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.subTitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="wrapper">
    <div class="container-fluid">
        <div class="card-body bg-white rounded p-4">
            <form action="" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="col-12  py-3">
                    <label>Product Name</label>
                    <input type="text" name="product_name" class="form-control" value="<?php echo e($row->product_name); ?>">
                </div>
                <div class="col-12  py-3">
                    <label>Product Departments</label>
                    <select name="departments" class="form-control select2bs4">
                        <option value="">Select one</option>
                        <option value="Dining">Dining</option>

                    </select>
                </div>
                <div class="col-12  py-3">
                    <label>Product Quantity</label>
                    <input type="number" name="quantity" class="form-control" value="<?php echo e($row->quantity); ?>">
                </div>
                <div class="col-12  py-3">
                    <label>Initial Price</label>
                    <input type="number" name="initial_price" class="form-control" value="<?php echo e($row->initial_price); ?>">
                </div>
                <div class="col-12  py-3">
                    <label>Current Price</label>
                    <input type="number" name="current_price" class="form-control" value="<?php echo e($row->current_price); ?>">
                </div>
                <div class="col-12  py-3">
                    <label>Product Descriptions</label>
                    <textarea id="compose-textarea" cols="30" rows="10" class="form-control"
                        name="product_desc"><?php echo e($row->product_desc); ?></textarea>
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

    </div>

</div>
<div class="col-12  py-3">
    <button class="btn btn-success btn-sm" type="submit" name="product"> Post Product</button>
</div>
</form>
</div>
</div>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\furniture\resources\views/admin/products/editproduct.blade.php ENDPATH**/ ?>