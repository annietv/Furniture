
<?php $__env->startSection('title', 'Admin Dashboard'); ?>
<?php $__env->startSection('subtitle', 'Admin Dashboard'); ?>
<?php $__env->startSection('content'); ?>
<?php if(auth()->guard()->guest()): ?>
<?php echo $__env->make('admin.sibebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.subTitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>0</h3>

                    <p>New Orders</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>0<sup style="font-size: 20px">%</sup></h3>

                    <p>Contact</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>0</h3>

                    <p>Slider</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>0</h3>

                    <p>Unique Visitors</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>

    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>0</h3>

                    <p>Products</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>0<sup style="font-size: 20px"></sup></h3>

                    <p>Admin</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>0</h3>

                    <p>Departments</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>0</h3>

                    <p>Wishlist</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <div class="card">
        <div class="card-body">

            <h3 class="text-center">New Orders</h3>
            <hr class=" border-primary">

            <div class=" table-responsive m-t-40 py-3">
                <table id="example1" class="table  table-striped td-responsive norow">
                    <thead>
                        <tr>

                            <th>Full Name</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                            <th>Product Name</th>
                            <th>Amount</th>
                            <th>Color</th>
                            <th>Product Desc</th>
                            <th>Comments</th>
                            <th>Picture</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php
    $payouts=DB::table('payouts')->limit(3)->orderBy('id','desc')->get();
    ?>
                    <?php $__currentLoopData = $payouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tbody>



                        <tr>
                            <td><?php echo e($row->fullname); ?></td>
                            <td><?php echo e($row->email); ?></td>
                            <td><?php echo e($row->phone); ?></td>
                            <td><?php echo e($row->product_name); ?></td>
                            <td><?php echo e($row->current_price); ?></td>
                            <td><?php echo e($row->color); ?></td>
                            <td><?php echo e($row->product_desc); ?></td>
                            <td><?php echo e($row->comments); ?></td>
                            <td><img src=" <?php echo e(asset('images/products/'.$row->proimage)); ?>" alt="" width="100px">

                            <td>


                                <a href="<?php echo e(url('admin/order/deleteorder/'.$row->id)); ?>"><button type="button"
                                        class="btn btn-xs btn-danger"
                                        onclick="return confirm('Are you sure to delete this record?')"><i
                                            class="fa fa-trash"></i></button></a>


                            </td>
                        </tr>

                    </tbody>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
    </div>

</div>










<?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\furniture\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>