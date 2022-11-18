

<?php $__env->startSection('title', 'Our Team'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('home.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('home.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__currentLoopData = $ourteams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<section class="section">
    <div class=" container-fluid">
        <div class="row mt-4 p-3">
            <div class="col-lg-6">
                <div class="card-body">
                    <img src="<?php echo e(asset('images/team/'.$row->image)); ?>" alt="" width="100%">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card-body">
                    <h2><?php echo e($row->fullname); ?></h2>
                    <p class="text-justify"><?php echo $row->contents; ?></p>
                </div>
            </div>
        </div>

    </div>
</section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make('footer.footcontent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('footer.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('home.slidercontent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\furniture\resources\views/home/moreteam.blade.php ENDPATH**/ ?>