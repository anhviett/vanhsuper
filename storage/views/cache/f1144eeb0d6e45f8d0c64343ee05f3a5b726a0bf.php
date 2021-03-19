
<?php $__env->startSection('title'); ?><?php echo e('Add News Category'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div id="layoutSidenav">
        <?php echo $__env->make('admin.layouts.sideNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý danh mục tin tức</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/superFood/admin/dashboard/">Dashboard</a></li>
                        <li class="breadcrumb-item active">Thêm danh mục</li>
                    </ol>
                </div>
                <div style="width: 40%; margin: auto">
                <form action="/superFood/admin/newsCategories/store" method="POST">
                        <div class="form-group">
                            <label for="newsCategoryNameAdd">Tên:</label>
                            <input type="text" name="newsCategoryNameAdd" class="form-control" id="newsCategoryNameAdd">
                        </div>
                        <div class="form-group">
                            <select name="newsCategoryCategoryAdd" id="newsCategoryCategoryAdd" class="form-control">
                                <option value="0"><b>Chọn là danh mục cha:</b></option>
                                <?php echo $html; ?>

                            </select>
                        </div>
                    <button class="btn btn-primary">Thêm</button>
                </form>
                </div>
            </main>
            <?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SuperFood\resources\views/admin/news_categories/add.blade.php ENDPATH**/ ?>