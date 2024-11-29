 <!-- Page Wrapper -->
 <div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-store"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Fafashion</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Admin - Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/data-barang') ?>">
            <i class="fas fa-fw fa-database"></i>
            <span>Data Barang</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/cart') ?>">
            <i class="fa-solid fa-cart-shopping"></i>
            <span>Cart Data</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/orders') ?>">
            <i class="fas fa-fw fa-file-invoice"></i>
            <span>Orders</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/transaksi') ?>">
            <i class="fa-solid fa-money-bill"></i>
            <span>Transaksi</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    

</ul>
<!-- End of Sidebar -->
