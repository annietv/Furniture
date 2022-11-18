
<?php $__env->startSection('title', 'Create new Models'); ?>
<?php $__env->startSection('subtitle', 'Create New Models'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.sibebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.subTitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="wrapper">




    <div class="container-fluid">




        <div class="card">
            <div class="card-body">

                <a href="<?php echo e(('../page/slider')); ?>"><button class="btn btn-primary">Add New</button></a>
                <hr class="border-primary">

                <div class=" table-responsive m-t-40 py-3">
                    <table id="example1" class="table  table-striped td-responsive norow">
                        <thead>
                            <tr>

                                <th>title</th>
                                <th>Contents</th>

                                <th>Picture</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php $__currentLoopData = $site_sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tbody>



                            <tr>
                                <td><?php echo e($row->title); ?></td>
                                <td><?php echo e($row->contents); ?></td>
                                <td><img src=" <?php echo e(asset('images/slider/'.$row->proimage)); ?>" alt="" width="100px">
                                </td>
                                <td>

                                    <a href="<?php echo e(url('admin/views/editslider/'.$row->id)); ?>"><button type="button"
                                            class="btn btn-xs btn-primary"><i class="fa fa-wrench"></i></button></a>
                                    <a href="<?php echo e(url('admin/views/deleteslider/'.$row->id)); ?>"><button type="button"
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
        <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\furniture\resources\views/admin/views/viewslider.blade.php ENDPATH**/ ?>