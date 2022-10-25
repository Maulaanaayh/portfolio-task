<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/dashbord">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">XII RPL 2<sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/admin/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            

            <!-- Nav Item - Master Siswa -->
            <li class="nav-item <?php echo e(($title == 'Master Siswa') ? 'active' : ''); ?>">
                <a class="nav-link" href="/admin/master-siswa">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Master Siswa</span></a>
            </li>

            <!-- Nav Item - Master Project -->
            <li class="nav-item <?php echo e(($title == 'Master Project') ? 'active' : ''); ?>  ">
                <a class="nav-link" href="/admin/master-project">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Master Project</span></a>
            </li>

            <!-- Nav Item - Master Contact -->
            <li class="nav-item <?php echo e(($title == 'Master Kontak') ? 'active' : ''); ?>">
                <a class="nav-link" href="/admin/master-kontak">
                    <i class="fas fa-fw fa-address-card"></i>
                    <span>Master Kontak</span></a>
            </li>

            

            <!-- Divider -->
            {{-- <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar --><?php /**PATH D:\tugas\12RPL2\Pemrograman Web\Laravel\tugas2\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>