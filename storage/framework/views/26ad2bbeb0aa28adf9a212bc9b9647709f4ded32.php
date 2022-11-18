

<?php $__env->startSection('title', 'Secure Cashout'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('home.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('home.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<section class="section">
    <div class=" container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <h3><?php echo e($row->product_name); ?></h3>
                <p><?php echo $row->product_desc; ?></p>
                <img src="<?php echo e(asset('images/products/'.$row->proimage)); ?>" alt="" width="100%">
            </div>
            <div class="col-lg-8">
                <form action="<?php echo e(Route('process_cash')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="col-12 py-3">
                        <label>Full Name</label>
                        <input type="text" name="fullname" class="form-control" value="">
                    </div>
                    <div class="col-12 py-3">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" value="">
                    </div>
                    <div class="col-12 py-3">
                        <label>Phone Number</label>
                        <input type="text" name="phone" class="form-control" value="">
                    </div>
                    <div class="col-12 py-3">
                        <label>Product</label>
                        <input type="text" name="product_name" class="form-control" value="<?php echo e($row->product_name); ?>">
                    </div>
                    <div class="col-12 py-3">
                        <label>Amount</label>
                        <input type="text" name="current_price" class="form-control" value="<?php echo e($row->current_price); ?>">
                    </div>
                    <div class="col-12 py-3">
                        <label>Product Descriptions</label>
                        <textarea name="product_desc" id="" cols="30" rows="10"
                            class="form-control"><?php echo $row->product_desc; ?></textarea>
                    </div>
                    <div class=" col-12 py-3">
                        <label>Color Description</label>
                        <input type="text" name="color" class="form-control" value="">
                    </div>

                    <input type="hidden" name="proimage" class="form-control" value="<?php echo e($row->proimage); ?>">

                    <div class="col-12 py-3">
                        <label>Comments</label>
                        <textarea name="comments" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="col-12 py-3">
                        <button class="btn btn-primary" type="submit" name="secure"> Make Payment</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make('footer.footcontent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('footer.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('home.slidercontent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\furniture\resources\views/home/cashout.blade.php ENDPATH**/ ?>