

<?php $__env->startSection('title', 'About Us'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('home.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('home.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<div class="container-fluid">
    <div class="row mt-4 p-3">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-3 col-sm-6 mb-5 col-6 mb-lg-0">
            <div class=" rounded-0 hover-shadow">
                <img class="card-img-top rounded-0" src="<?php echo e(asset('images/products/'.$row->proimage)); ?>" alt="teacher">
                <div class="card-body">
                    <a href="<?php echo e(url('home/morelisting/'.$row->id)); ?>">
                        <p class="card-title text-center "><?php echo e($row->product_name); ?></p>
                        <p class="text-center"><span class="fa fa-star text-warning"></span><span
                                class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                        </p>
                        <h4 class="text-center"><?php echo e(number_format($row->current_price, 2)); ?></h4>
                    </a>

                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php echo $__env->make('footer.footcontent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('footer.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('home.slidercontent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\furniture\resources\views/home/moredepart.blade.php ENDPATH**/ ?>