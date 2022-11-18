<footer>
    <!-- newsletter -->
    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-md-9 ml-auto  py-5 newsletter-block">
                    <h3 class="text-white">Subscribe Now</h3>
                    <form action="#">
                        <div class="input-wrapper">
                            <input type="email" class="form-control border-0" id="newsletter" name="newsletter"
                                placeholder="Enter Your Email...">
                            <button type="submit" value="send" class="btn btn-primary">Join</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- footer content -->
    <div class="footer bg-footer section border-bottom mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
                    <!-- logo -->
                    <!-- <a class="logo-footer" href="index.html"><img class="img-fluid mb-4" src="images/logo.png"
                            alt="logo"></a> -->

                    <ul class="list-unstyled">
                        <?php
    $contact_details=DB::table('contact_details')->get();
    ?>
                        <?php $__currentLoopData = $contact_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="mb-2"><?php echo $row->office_address_one; ?></li>
                        <li class="mb-2"><?php echo e($row->phoneone); ?></li>
                        <li class="mb-2"></li>
                        <li class="mb-2"><?php echo e($row->email); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <!-- company -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                    <h4 class="text-white mb-5">COMPANY</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a class="text-color" href="<?php echo e(Route('Mainabout')); ?>">About Us</a>
                        </li>

                        <li class="mb-3"><a class="text-color" href="<?php echo e(Route('contact_form')); ?>">Contact</a>
                        </li>
                        <li class="mb-3"><a class="text-color" href="<?php echo e(Route('mainteam')); ?>">Our Team</a></li>
                    </ul>
                </div>
                <!-- links -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                    <h4 class="text-white mb-5">DEPARTMENTS</h4>
                    <ul class="list-unstyled">
                        <?php
    $departments=DB::table('departments')->get();
    ?>
                        <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="mb-3"><a class="text-color"
                                href="<?php echo e(url('home/moredepart/'.$key->depart_name)); ?>"><?php echo e($key->depart_name); ?></a></li>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <!-- support -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                    <h4 class="text-white mb-5">SUPPORT</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a class="text-color" href="#">Login</a></li>
                        <li class="mb-3"><a class="text-color" href="#">FAQ</a></li>
                        <li class="mb-3"><a class="text-color" href="#">Language</a></li>
                        <li class="mb-3"><a class="text-color" href="#">Release Status</a></li>
                    </ul>
                </div>
                <!-- support -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                    <h4 class="text-white mb-5">RECOMMEND</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a class="text-color" href="#"></a></li>
                        <li class="mb-3"><a class="text-color" href="#"></a></li>
                        <li class="mb-3"><a class="text-color" href="#"></a></li>
                        <li class="mb-3"><a class="text-color" href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright -->
    <div class="copyright py-4 bg-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 text-sm-left text-center">
                    <p class="mb-0">Copyright
                        <script>
                        var CurrentYear = new Date().getFullYear()
                        document.write(CurrentYear)
                        </script>
                        © <a href="https://www.blusplash.com.ng" class="text-color">Bluesplash IT Solutions</a>
                    </p>
                </div>
                <div class=" col-sm-5 text-sm-right text-center">
                    <?php
    $social_media=DB::table('social_media')->get();
    ?>
                    <?php $__currentLoopData = $social_media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <ul class=" list-inline">
                        <li class="list-inline-item"><a class="d-inline-block p-2" href="<?php echo e($row->facebook); ?>"><i
                                    class="ti-facebook text-primary"></i></a></li>
                        <li class="list-inline-item"><a class="d-inline-block p-2" href="<?php echo e($row->twitter); ?>"><i
                                    class="ti-twitter-alt text-primary"></i></a>
                        </li>
                        <li class="list-inline-item"><a class="d-inline-block p-2" href="<?php echo e($row->linkedin); ?>"><i
                                    class="ti-linkedin text-primary"></i></a></li>
                        <li class="list-inline-item"><a class="d-inline-block p-2" href="<?php echo e($row->instagram); ?>"><i
                                    class="ti-instagram text-primary"></i></a>
                        </li>
                    </ul>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</footer><?php /**PATH C:\xampp\htdocs\furniture\resources\views/footer/footcontent.blade.php ENDPATH**/ ?>