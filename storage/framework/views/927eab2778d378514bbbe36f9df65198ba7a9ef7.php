

<?php $__env->startSection('title', 'About Us'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('home.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('home.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__currentLoopData = $abouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="container-fluid">
    <div class="row mt-4 p-3">
        <div class="col-lg-6">
            <div class="card-body">
                <img src="<?php echo e(asset('images/about/'.$row->proimage)); ?>" alt="" width="100%">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card-body">
                <h2><?php echo e($row->title); ?></h2>
                <p class="text-justify"><?php echo $row->aboutdesc; ?></p>
            </div>
        </div>
    </div>
    <?php
    $statements=DB::table('statements')->get();
    ?>
    <?php $__currentLoopData = $statements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row bg-light mt-4 p-3">
        <div class="col-lg-4">
            <div class="card-body">
                <h3>Mission</h3>
                <p><?php echo $key->mission; ?></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-body">
                <h3>Vision</h3>
                <p><?php echo e($key->vision); ?></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-body">
                <h3>Core Value</h3>
                <p><?php echo e($key->coreValue); ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make('footer.footcontent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('footer.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('home.slidercontent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\furniture\resources\views/home/about.blade.php ENDPATH**/ ?>