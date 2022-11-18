<!-- teachers -->

<hr>
<section class="section bg-light">
    <div class="container-fluid">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-12">
                <h2 class="section-title text-dark text-center">Top Rating</h2>
            </div>
            <!-- teacher -->
            <?php
    $products=DB::table('products')->get();
    ?>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-sm-6 mb-5 col-6 mb-lg-0">
                <div class=" rounded-0 hover-shadow img-hover-zoom--point-zoom ">
                    <img class="card-img-top rounded-0" src="<?php echo e(asset('images/products/'.$key->proimage)); ?>"
                        alt="teacher">
                    <div class="card-body">
                        <a href="<?php echo e(url('home/morelisting/'.$key->id)); ?>">
                            <p class="card-title text-center"><?php echo e($key->product_name); ?></p>

                            <p class="text-center"><span class="fa fa-star text-warning"></span><span
                                    class="fa fa-star text-warning"></span>
                                <span class="fa fa-star text-warning"></span>
                                <span class="fa fa-star text-warning"></span>
                                <span class="fa fa-star text-warning"></span>
                            </p>
                            <h4 class=" text-center"> <s><strong>N<?php echo e(number_format($key->initial_price, 2)); ?></strong></s>
                                <strong><span
                                        style="text-decoration-line: line-through; text-decoration-style: double;button;">N</span><?php echo e(number_format($key->current_price, 2)); ?></strong>
                            </h4>
                        </a><br>

                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</section><?php /**PATH C:\xampp\htdocs\furniture\resources\views/home/listing.blade.php ENDPATH**/ ?>