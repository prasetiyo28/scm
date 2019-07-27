<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <!-- <i class="fas fa-laugh-wink"></i> --><h1>Q</h1>
    </div>
    <div class="sidebar-brand-text mx-3">Cabang</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="<?php echo base_url() ?>cabang">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    


    <!-- Nav Item - Charts -->
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url() ?>cabang/stock">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Pengadaan Stok</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>cabang/pengeluaran">
          <i class="fas fa-fw fa-table"></i>
          <span>Pengeluaran</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>cabang/penjualan">
          <i class="fas fa-fw fa-table"></i>
          <span>Penjualan</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>cabang/paket">
          <i class="fas fa-fw fa-table"></i>
          <span>Paket</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>cabang/settings">
          <i class="fas fa-fw fa-settins"></i>
          <span>Settings</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>