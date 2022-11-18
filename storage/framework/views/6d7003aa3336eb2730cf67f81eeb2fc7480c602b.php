
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>;
<?php $__env->startSection('title', 'About Us'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('home.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('home.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<!-- Main content -->
<section class="content container-fluid">

    <!-- Default box -->
    <div class="card card-solid">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3 class="d-inline-block d-sm-none"><?php echo e($row->product_name); ?></h3>
                    <div class="col-12">
                        <img src="<?php echo e(asset('images/products/'.$row->proimage)); ?>" class="product-image"
                            alt="Product Image" width="100%">
                    </div>

                </div>
                <div class="col-12 col-sm-6">
                    <h3 class="my-3"><?php echo e($row->product_name); ?></h3>
                    <p><?php echo $row->product_desc; ?></p>

                    <hr>
                    <h4> Colors</h4>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-light text-center active">
                            <input type="radio" name="color_option" id="color_option_a1" autocomplete="off" checked>
                            Green
                            <br>
                            <i class="fas fa-circle fa-2x text-success"></i>
                        </label>
                        <label class="btn btn-light text-center">
                            <input type="radio" name="color_option" id="color_option_a2" autocomplete="off">
                            Blue
                            <br>
                            <i class="fas fa-circle fa-2x text-primary"></i>
                        </label>
                        <label class="btn btn-light text-center">
                            <input type="radio" name="color_option" id="color_option_a3" autocomplete="off">
                            Purple
                            <br>
                            <i class="fas fa-circle fa-2x text-info"></i>
                        </label>
                        <label class="btn btn-light text-center">
                            <input type="radio" name="color_option" id="color_option_a4" autocomplete="off">
                            Red
                            <br>
                            <i class="fas fa-circle fa-2x text-red"></i>
                        </label>
                        <label class="btn btn-light text-center">
                            <input type="radio" name="color_option" id="color_option_a5" autocomplete="off">
                            Orange
                            <br>
                            <i class="fas fa-circle fa-2x text-orange"></i>
                        </label>
                    </div>

                    <!-- <h4 class="mt-3">Size <small>Please select one</small></h4>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-light text-center">
                            <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
                            <span class="text-xl">S</span>
                            <br>
                            Small
                        </label>
                        <label class="btn btn-light text-center">
                            <input type="radio" name="color_option" id="color_option_b2" autocomplete="off">
                            <span class="text-xl">M</span>
                            <br>
                            Medium
                        </label>
                        <label class="btn btn-light text-center">
                            <input type="radio" name="color_option" id="color_option_b3" autocomplete="off">
                            <span class="text-xl">L</span>
                            <br>
                            Large
                        </label>
                        <label class="btn btn-light text-center">
                            <input type="radio" name="color_option" id="color_option_b4" autocomplete="off">
                            <span class="text-xl">XL</span>
                            <br>
                            Xtra-Large
                        </label>
                    </div> -->

                    <div class="bg-gray py-2 px-3 mt-4">
                        <h2 class="mb-0">
                            <?php echo e(number_format($row->current_price, 2)); ?>

                        </h2>
                        <h4 class="mt-0">
                            <small>Ex Tax: 0.00 </small>
                        </h4>
                    </div>

                    <div class="mt-4">
                        <a href="<?php echo e(url('home/cashout/'.$row->id)); ?>" class=" btn btn-primary btn-lg btn-flat">
                            <i class="fas fa-cart-plus fa-lg mr-2"></i>
                            Confirm Order
                        </a>

                        <div class="btn btn-default btn-lg btn-flat">
                            <i class="fas fa-heart fa-lg mr-2"></i>
                            Add to Wishlist
                        </div>
                    </div>

                    <div class="mt-4 product-share">
                        <a href="#" class="text-gray">
                            <i class="fab fa-facebook-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                            <i class="fab fa-twitter-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                            <i class="fas fa-envelope-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                            <i class="fas fa-rss-square fa-2x"></i>
                        </a>
                    </div>

                </div>
            </div>
            <div class="row mt-4">
                <nav class="w-100">
                    <div class="nav nav-tabs" id="product-tab" role="tablist">
                        <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc"
                            role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                        <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab"
                            href="#product-comments" role="tab" aria-controls="product-comments"
                            aria-selected="false">Comments</a>
                        <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating"
                            role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>
                    </div>
                </nav>
                <div class="tab-content p-3" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="product-desc" role="tabpanel"
                        aria-labelledby="product-desc-tab">
                        <p><?php echo $row->product_desc; ?></p>
                    </div>
                    <div class="tab-pane fade" id="product-comments" role="tabpanel"
                        aria-labelledby="product-comments-tab">
                        <form action="" method="post">
                            <div class="col-12 py-3">
                                <label>Full Name</label>
                                <input type="text" name="fullname" class="form-control">
                            </div>
                            <div class="col-12 py-3">
                                <label>Comment</label>
                                <textarea name="comments" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="col-12 py-3">
                                <button class="btn btn-primary" type="submit" name="comenting"> Share</button>
                            </div>
                        </form>
                    </div>
                    <div class=" tab-pane fade" id="product-rating" role="tabpanel"
                        aria-labelledby="product-rating-tab">

                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
<script>
$(document).ready(function() {
    $('.product-image-thumb').on('click', function() {
        var $image_element = $(this).find('img')
        $('.product-image').prop('src', $image_element.attr('src'))
        $('.product-image-thumb.active').removeClass('active')
        $(this).addClass('active')
    })
})
</script>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make('footer.footcontent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('footer.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('home.slidercontent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\furniture\resources\views/home/morelisting.blade.php ENDPATH**/ ?>