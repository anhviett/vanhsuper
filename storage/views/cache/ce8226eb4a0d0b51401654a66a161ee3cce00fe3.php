
<?php $__env->startSection('title'); ?><?php echo e('Add Role'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div id="layoutSidenav">
        <?php echo $__env->make('admin.layouts.sideNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="layoutSidenav_content" style="background: #f2f3f8">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Thêm quyền</h1>
                    <ol class="breadcrumb mb-4" style="background: white">
                        <li class="breadcrumb-item"><a href="../main-view/dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Thêm quyền</li>
                    </ol>
                    <form action="/superFood/admin/roles/update/<?php echo e($role->id); ?>" method="POST">
                        <div class="role__content row">
                            <div class="col-md-4">
                                <div class="role__left">
                                    <div class="form-group">
                                        <label for="roleNameUpdate">Tên quyền:</label>
                                        <input value="<?php echo e($role->name); ?>" type="text" name="roleNameUpdate"
                                               class="form-control" id="roleNameUpdate">
                                    </div>
                                    <button type="submit"
                                            class="btn btn-primary addBtn">Lưu
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="role__right">
                                    <?php echo e($code = ''); ?>

                                    <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php $module_name = @explode('_', $permission->code)[0] ?>
                                        <?php if($module_name != $code): ?>
                                            <?php $code = $module_name ?>
                                            <?php if($module_name === "post"): ?>
                                                <?php $module_name = "Bài viết" ?>
                                            <?php elseif($module_name === "product"): ?>
                                                <?php $module_name = "Sản phẩm" ?>
                                            <?php elseif($module_name === "role"): ?>
                                                <?php $module_name = "Quyền" ?>
                                            <?php elseif($module_name === "user"): ?>
                                                <?php $module_name = "Người dùng" ?>
                                            <?php endif; ?>
                                            <label class='perChecked' style="margin-top: 30px">
                                                <input
                                                        style='margin-right: 5px;'
                                                        name='inputPers'
                                                        type='checkbox' checked
                                                        value="<?php echo e($permission->id); ?>"><?php echo e($module_name); ?>

                                            </label>
                                        <?php endif; ?>
                                        <label style="display: inline-block; width: 100%; margin-left: 20px">
                                            <input style="margin-right: 5px;" name="pers[]"
                                                   type="checkbox"
                                                   <?php $pers_checked = []; ?>
                                                   <?php $__currentLoopData = $role_permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role_permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                   <?php $pers_checked[] = $role_permission->permission_id; ?>
                                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   <?php if(in_array($permission->id, $pers_checked)): ?>
                                                   checked
                                                   <?php endif; ?>
                                                   value="<?php echo e($permission->id); ?>"><?php echo e($permission->name); ?>

                                        </label>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </main>
            <?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SuperFood\resources\views/admin/roles/edit.blade.php ENDPATH**/ ?>