

<?php $__env->startSection('title', 'Contact us'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('home.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('home.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<section class="section ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-title">CONTACT US</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <form action="" method="post">
                    <?php echo csrf_field(); ?>
                    <input type=" text" class="form-control mb-3" id="name" name="fullname" placeholder="Your Name">
                    <input type="email" class="form-control mb-3" id="mail" name="email" placeholder="Your Email">
                    <input type="text" class="form-control mb-3" id="subject" name="subject" placeholder="Subject">
                    <textarea name="contents" id="message" class="form-control mb-3"
                        placeholder="Your Message"></textarea>
                    <button type="submit" value="send" class="btn btn-primary">SEND MESSAGE</button>
                </form>
            </div>
            <div class="col-lg-5">
                <p class="mb-5">Welcome, we are here to serve you better. Write us a message and we will respond within
                    a short period.
                    Alternatively, contact us through our Phone numbers and Email or walk into any of our office address
                    below:</p>
                <a href="tel:+8802057843248" class="text-color h5 d-block">+880 20 5784 3248</a>
                <a href="mailto:yourmail@email.com" class="mb-5 text-color h5 d-block">yourmail@email.com</a>
                <p>71 Shelton Street<br>London WC2H 9JQ England</p>
            </div>
        </div>
    </div>
</section>
<?php echo $__env->make('footer.footcontent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('footer.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('home.slidercontent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\furniture\resources\views/home/contact.blade.php ENDPATH**/ ?>