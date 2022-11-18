<!-- navbar -->
<div class="navigation w-100">
    <div class="container-fluid p-1">
        <nav class="navbar navbar-expand-md navbar-dark p-0">
            <a class="navbar-brand" href="<?php echo e(Route('home.index')); ?>"><img src="<?php echo e(asset('images/u.png')); ?>" alt=""
                    width="400px"></a>
            <button class=" navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo e(Route('home.index')); ?>">Home</a>
                    </li>
                    <!-- <li class="nav-item ">
                        <a class="nav-link" href="#">Department</a>
                    </li> -->
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo e(Route('mainteam')); ?>">Our Team</a>
                    </li>
                    <li class="nav-item dropdown view">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Department
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
    $departments=DB::table('departments')->get();
    ?>
                            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="dropdown-item"
                                href="<?php echo e(url('home/moredepart/'.$key->depart_name)); ?>"><?php echo e($key->depart_name); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <!-- <a class="dropdown-item" href="#">Media</a>
                            <a class="dropdown-item" href="#">FAQ</a> -->
                            <!-- <a class="dropdown-item" href="notice-single.html">Notice Details</a>
                <a class="dropdown-item" href="research.html">Research</a>
                <a class="dropdown-item" href="scholarship.html">Scholarship</a>
                <a class="dropdown-item" href="course-single.html">Course Details</a>
                <a class="dropdown-item" href="event-single.html">Event Details</a>
                <a class="dropdown-item" href="blog-single.html">Blog Details</a> -->
                        </div>
                    </li>
                    <li class="nav-item dropdown view">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Who we are
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(Route('Mainabout')); ?>">About us</a>
                            <a class="dropdown-item" href="<?php echo e(Route('contact_form')); ?>">Contact us</a>
                            <!-- <a class="dropdown-item" href="notice.html">Notice</a>
                <a class="dropdown-item" href="notice-single.html">Notice Details</a>
                <a class="dropdown-item" href="research.html">Research</a>
                <a class="dropdown-item" href="scholarship.html">Scholarship</a>
                <a class="dropdown-item" href="course-single.html">Course Details</a>
                <a class="dropdown-item" href="event-single.html">Event Details</a>
                <a class="dropdown-item" href="blog-single.html">Blog Details</a> -->
                        </div>
                    </li>

                    <li class="nav-item active">
                        <?php
    $contact_details=DB::table('contact_details')->get();
    ?>
                        <?php $__currentLoopData = $contact_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="nav-link btn btn-primary btn-sm rounded btn-flat p-2"
                            href="callto:<?php echo e($row->phoneone); ?>"> <i class="fa fa-phone"></i> Call Us</a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
</header>
<!-- /header --><?php /**PATH C:\xampp\htdocs\furniture\resources\views/home/navbar.blade.php ENDPATH**/ ?>