

<?php $__env->startSection('title', 'Our Team'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('home.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('home.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<section class="section">
    <div class="container-fluid">
        <h2 class="text-center">Meet With The Team</h2>
        <div class="row">

            <?php $__currentLoopData = $ourteams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class=" col-lg-4">
                <div class="card-body  rounded-0 hover-shadow img-hover-zoom--point-zoom">
                    <img class="card-img-top rounded-0" src=" <?php echo e(asset('images/team/'.$row->image)); ?>" alt=""
                        width="100%">
                    <h3 class=" text-center"><?php echo e($row->fullname); ?></h3>
                    <h5 class="text-center"><?php echo e($row->positions); ?></h5>
                    <p class="text-center">
                        <a href="<?php echo e(url('home/moreteam/'.$row->id)); ?>" class=" btn btn-primary btn-sm"> View
                            More</a>
                    </p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<?php echo $__env->make('footer.footcontent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('footer.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('home.slidercontent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\furniture\resources\views/home/team.blade.php ENDPATH**/ ?>