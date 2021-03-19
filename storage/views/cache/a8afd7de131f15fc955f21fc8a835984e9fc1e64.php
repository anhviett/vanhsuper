<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="/superFood/admin/dashboard/">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                   aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fal fa-user-circle"></i></div>
                    Người dùng
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                     data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/superFood/admin/users/">Quản lý người dùng</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts3"
                   aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Tin tức
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne"
                     data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/superFood/admin/news/">Quản lý tin tức</a>
                    </nav>
                </div>
                <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne"
                     data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/superFood/admin/newsCategories/">Quản lý danh mục tin tức</a>
                    </nav>
                </div>
                <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne"
                     data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/superFood/admin/newsTags/">Quản lý Tag tin tức</a>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Admin</div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts4"
                   aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="far fa-user-tie"></i></div>
                    Phân quyền
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts4" aria-labelledby="headingOne"
                     data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/superFood/admin/roles/">Quản lý quyền</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Đăng nhập với:</div>
            <?php echo $_SESSION['user']['email'] ?>
        </div>
    </nav>
</div>
<?php /**PATH C:\xampp\htdocs\SuperFood\resources\views/admin/layouts/sideNav.blade.php ENDPATH**/ ?>