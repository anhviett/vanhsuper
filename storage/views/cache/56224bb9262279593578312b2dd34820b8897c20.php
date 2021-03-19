
<?php $__env->startSection('title'); ?><?php echo e('Create Products'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div id="layoutSidenav">
        <?php echo $__env->make('admin.layouts.sideNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý tin tức</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/superFood/admin/dashboard/">Dashboard</a></li>
                        <li class="breadcrumb-item active">Thêm tin tức</li>
                    </ol>
                </div>
                <div style="width: 40%; margin: auto">
                    <form action="/superFood/admin/product/store" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="images">Ảnh sản phẩm</label>
                                <input type="file" name="images" class="form-control" id="images">
                            </div>
                            <div class="form-group">
                                <label for="name_product">Tên sản phẩm</label>
                                <input type="text" name="name_product" class="form-control" id="name_product">
                            </div>

                            <div class="form-group">
                                <label for="description_product">Mô tả:</label>
                                <input type="text" name="description_product" class="form-control" id="description_product">
                            </div>
                            <div class="form-group">
                                <label for="price_product">Giá</label>
                                <textarea type="text" name="price_product" class="form-control"
                                          id="price_product"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="category_product">Danh mục:</label>
                                <select name="category_product" id="category_product" class="form-control">
                                    <option value="0">Chọn làm danh mục cha:</option>
                                    <?php echo $html; ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tag:</label>
                                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <label style="display: inline-block; width: 100%;"><input style="margin-right: 5px" name="tags[]" type="checkbox" value="<?php echo e($tag->id); ?>"><?php echo e($tag->name); ?></label>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <button class="btn btn-primary">Thêm</button>
                        </div>
                    </form>
                </div>
            </main>
            <?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XamPP\xam\htdocs\SuperFood\resources\views/admin/product/create.blade.php ENDPATH**/ ?>