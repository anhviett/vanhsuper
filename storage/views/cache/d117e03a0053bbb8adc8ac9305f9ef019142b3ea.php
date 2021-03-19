
<?php $__env->startSection('title'); ?><?php echo e('Edit News Tag'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div id="layoutSidenav">
        <?php echo $__env->make('admin.layouts.sideNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý Tags sản phẩm</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/superFood/admin/dashboard/">Dashboard</a></li>


                            <li class="breadcrumb-item active">Sửa Tag</li>

                    </ol>
                </div>
                <div style="width: 40%; margin: auto">
                    <form action="/superFood/admin/productTags/update/<?php echo e($tag->id); ?>" method="POST">
                        <div class="form-group">
                            <label for="productTagNameUpdate">Tên:</label>
                            <input value="<?php echo e($tag->name); ?>" type="text" name="productTagNameUpdate" class="form-control" id="productTagNameUpdate">
                        </div>
                        <button class="btn btn-primary">Sửa</button>
                    </form>
                </div>
            </main>
            <?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XamPP\xam\htdocs\SuperFood\resources\views/admin/product_tags/edit.blade.php ENDPATH**/ ?>