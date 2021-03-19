<?php if(!checkPer($_SESSION['user']['id'],'product_view')): ?>
    <?php (header('Location: /superFood/admin/dashboard')); ?>
<?php endif; ?>

<?php $__env->startSection('title'); ?><?php echo e('Products'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div id="layoutSidenav">
        <?php echo $__env->make('admin.layouts.sideNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý sản phẩm</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/superFood/admin/dashboard/">Dashboard</a></li>
                        <li class="breadcrumb-item active">Quản lý tin tức</li>
                    </ol>

                    <a href="/superFood/admin/product/create" class="btn btn-primary addBtn">Thêm danh mục

                    </a>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Bảng danh mục
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Hình ảnh</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Mô tả</th>
                                        <th>Giá</th>
                                        <th>Danh mục</th>
                                        <th>Tin tức</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="text-center"><img src="/superFood/uploads/<?php echo e($product->images); ?>" alt="" width="100" height="100"></td>
                                            <td><?php echo e($product->name); ?></td>
                                            <td><?php echo e($product->description); ?></td>
                                            <td><?php echo e($product->price); ?></td>
                                            <td>
                                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($product->category_id == $category->id): ?>
                                                        <?php echo e($category->name); ?>

                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </td>
                                            <td>
                                                <?php $__currentLoopData = $productTags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productTag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($product->id == $productTag->product_id): ?>
                                                        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($tag->id == $productTag->tag_id): ?>
                                                                <?php echo e($tag->name . ','); ?>

                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </td>

                                            <td>

                                                <a class="btn btn-primary" href="/superFood/admin/product/edit/<?php echo e($product->id); ?>">Sửa</a>

                                                    <a class="btn btn-danger" href="/superFood/admin/product/delete/<?php echo e($product->id); ?>">Xóa</a>

                                            </td>

                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XamPP\xam\htdocs\SuperFood\resources\views/admin/product/index.blade.php ENDPATH**/ ?>