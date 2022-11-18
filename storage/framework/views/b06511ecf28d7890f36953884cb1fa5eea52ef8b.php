<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#002366;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <!-- <img src="bs-page/image/favicon.png" alt="Bluespalsh Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8"> -->
        <span class="brand-text font-weight-light">evfurnitures</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">

                <a href="#" class="d-block"></a>
            </div>
        </div> -->

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="<?php echo e(Route('admin.dashboard')); ?>" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Users
                            <i class="fas fa-angle-left right"></i>
                            <!-- <span class="badge badge-info right">6</span> -->
                        </p>
                    </a>
                    <ul class="nav nav-treeview">


                        <!-- <li class="nav-item">
                            <a href="users/client.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Customers</p>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a href="bs-page/list-product.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Admin</p>
                            </a>
                        </li>



                    </ul>
                </li>


                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Qr-Code Builder
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="qr-builder/scann.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Settings</p>
                            </a>
                        </li>

                    </ul>
                </li> -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Products
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo e(Route('product')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(Route('viewproduct')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Products</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Departments
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo e(Route('department')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Departments</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(Route('viewdepartment')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Departments</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">

                    <a href="<?php echo e(Route('neworder')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            Orders
                            <span class="badge badge-pill badge-danger ml-2right"></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Affiliates
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Affliates</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Affiliates</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Front Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="<?php echo e(Route('viewslider')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Slider</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="<?php echo e(Route('socialMedia')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Social Media Handles</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo e(Route('viewteams')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Our Team</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(Route('media')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Section</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(Route('about')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>About</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(Route('statement')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Statement</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo e(Route('terms')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Join Us Content</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Site Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="<?php echo e(Route('general')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>General Settings</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(Route('seo')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>SEO</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="bs-page/favicon.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Favicon</p>
                            </a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a href="bs-page/currency.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Currency Settings</p>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a href="<?php echo e(Route('payment')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Payment Settings</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(Route('emails')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Email Settings</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="api/maintenance.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Maintenance Mode </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="api/closeacct.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Deactivate Website</p>
                            </a>
                        </li> -->

                    </ul>
                </li>
                <!-- <li class="nav-header">EXAMPLES</li> -->
                <li class="nav-item">

                    <a href="<?php echo e(Route('viewcontact')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            Contact
                            <span class="badge badge-pill badge-danger ml-2right"></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">

                    <a href="<?php echo e(Route('contactdetails')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            Contact Details
                            <span class="badge badge-pill badge-danger ml-2right"></span>
                        </p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="bs-page/slider.php" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Slider
                        </p>
                    </a>
                </li> -->
                <li class="nav-item">

                    <a href="bs-page/feedback.php" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Feedback <span class="badge badge-pill badge-danger ml-2"></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Widget
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="bs-page/categories.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>WhatsApp</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="bs-page/list-categories.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Departments</p>
                            </a>
                        </li> -->

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Advertistment
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="bs-page/Announcement.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pop-up Advertistment</p>
                            </a>
                        </li>

                    </ul>
                </li>

                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside><?php /**PATH C:\xampp\htdocs\furniture\resources\views/admin/sibebar.blade.php ENDPATH**/ ?>