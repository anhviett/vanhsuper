
<?php $__env->startSection('title'); ?><?php echo e('Add Users'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div id="layoutSidenav">
        <?php echo $__env->make('admin.layouts.sideNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý người dùng</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/superFood/admin/dashboard/">Dashboard</a></li>
                        <li class="breadcrumb-item active">Thêm người dùng</li>
                    </ol>
                </div>
                <div style="width: 40%; margin: auto">
                    <form action="/superFood/admin/users/store" method="POST" enctype="multipart/form-data">
                        <div class="form-group position-relative text-center">
                            <img class="imagesForm" width="100" src="
                                    <?php if($_SESSION['user']['images']): ?>
                            <?php echo e($_SESSION['user']['images']); ?>

                            <?php else: ?>
                            <?php echo e($_ENV['BASE_URL'].'/backend/assets/images/userImages/defaultImage.png'); ?>

                            <?php endif; ?>
                                    ?>"/>
                            <label class="formLabel" for="fileToAddUser"><i class="fas fa-pen"></i><input
                                        style="display: none" type="file" id="fileToAddUser"
                                        name="fileToUpload"></label>
                        </div>
                        <div class="form-group">
                            <label for="userFirstNameAdd">Tên:</label>
                            <input type="text" name="userFirstNameAdd" class="form-control" id="userFirstNameAdd">
                        </div>
                        <div class="form-group">
                            <label for="userLastNameAdd">Họ:</label>
                            <input type="text" name="userLastNameAdd" class="form-control" id="userLastNameAdd">
                        </div>
                        <div class="form-group">
                            <label for="userEmailAdd">Email:</label>
                            <input type="text" name="userEmailAdd" class="form-control" id="userEmailAdd">
                        </div>
                        <div class="form-group">
                            <label for="userPasswordAdd">Mật khẩu:</label>
                            <input type="password" name="userPasswordAdd" class="form-control" id="userPasswordAdd">
                        </div>
                        <div class="form-group">
                            <label for="userRepasswordAdd">Nhập lại mật khẩu:</label>
                            <input type="password" name="userRepasswordAdd" class="form-control" id="userRepasswordAdd">
                        </div>
                        <div class="form-group">
                            <label for="userRoleAdd">Nhóm quyền:</label>
                            <select name="role_id" class="form-control" id="userRoleAdd">
                                <option value=""></option>
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XamPP\xam\htdocs\SuperFood\resources\views/admin/users/add.blade.php ENDPATH**/ ?>