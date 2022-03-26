<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-notes-medical"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Olivak</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/registration/user'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Beranda</span></a>
    </li>

    <?php if (in_groups('Administrator')) :  ?>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Manajemen Pengguna
        </div>

        <!-- Nav Item - Daftar Pengguna -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin'); ?>">
                <i class="fas fa-users"></i>
                <span>Daftar Pengguna</span></a>
        </li>
    <?php endif; ?>

    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->

    <!-- Heading -->
    <!-- <div class="sidebar-heading">
        User Profile
    </div> -->

    <!-- Nav Item - My Profile -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-user-alt"></i>
            <span>My Profile</span></a>
    </li> -->

    <!-- Nav Item - Edit Profile -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-user-edit"></i>
            <span>Edit Profile</span></a>
    </li> -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Tentang -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/menu/about'); ?>">
            <i class="fas fa-info-circle"></i>
            <span>Tentang</span></a>
    </li>

    <!-- Nav Item - Cara Kerja -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/menu/method'); ?>">
            <i class="fas fa-cog"></i>
            <span>Cara Kerja</span></a>
    </li>

    <!-- Nav Item - Syarat Penggunaan -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/menu/syarat'); ?>">
            <i class="fas fa-clipboard"></i>
            <span>Syarat Penggunaan</span></a>
    </li>

    <!-- Nav Item - Kebijakan Privasi -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/menu/kebijakan'); ?>">
            <i class="fas fa-lock"></i>
            <span>Kebijakan Privasi</span></a>
    </li>



    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('logout'); ?>">
            <i class="fas fa-sign-out-alt"></i>
            <span>Keluar</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>