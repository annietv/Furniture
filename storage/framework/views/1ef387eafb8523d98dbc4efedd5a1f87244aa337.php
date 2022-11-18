

<?php $__env->startSection('title', 'congratulations'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('home.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h3 class="text-success">Congratulations Order has bean placed successfully</h3>
                <?php
    $payments=DB::table('payments')->get();
    ?>
                <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo $key->payment_terms; ?></p>
                <hr>
                <p><strong><?php echo e($key->bank); ?></strong></p>
                <p><strong><?php echo e($key->account_name); ?></strong></p>
                <p><strong><?php echo e($key->account_number); ?></strong></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <h5>For more informations or further verifications kindly contact us with details below:</h5>
                <?php
    $contact_details=DB::table('contact_details')->get();
    ?>
                <?php $__currentLoopData = $contact_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dey): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo $dey->office_address_one; ?></p>
                <p><?php echo $dey->phoneone; ?></p>
                <p><?php echo $dey->email; ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(Route('home.index')); ?>" class="btn btn-primary"> Home Page</a>
            </div>
        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('footer.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\furniture\resources\views/home/congrat.blade.php ENDPATH**/ ?>