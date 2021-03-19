
<?php $__env->startSection('title'); ?><?php echo e('Edit News Category'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div id="layoutSidenav">
        <?php echo $__env->make('admin.layouts.sideNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý danh mục tin tức</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/superFood/admin/dashboard/">Dashboard</a></li>
                        <li class="breadcrumb-item active">Sửa danh mục</li>
                    </ol>
                </div>
                <div style="width: 40%; margin: auto">
                    <form action="/superFood/admin/newsCategories/update/<?php echo e($category->id); ?>" method="POST">
                        <div class="form-group">
                            <label for="newsCategoryNameUpdate">Tên:</label>
                            <input value="<?php echo e($category->name); ?>" type="text" name="newsCategoryNameUpdate" class="form-control" id="newsCategoryNameUpdate">
                        </div>
                        <button class="btn btn-primary">Sửa</button>
                    </form>
                </div>
            </main>
            <?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XamPP\xam\htdocs\SuperFood\resources\views/admin/news_categories/edit.blade.php ENDPATH**/ ?>