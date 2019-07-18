<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <!-- <i class="fas fa-laugh-wink"></i> --><h1>Q</h1>
    </div>
    <div class="sidebar-brand-text mx-3">Kasir</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="<?php echo base_url() ?>kasir">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    

    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url() ?>Kasir/Transaksi">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Transaksi</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>Kasir/paket">
          <i class="fas fa-fw fa-table"></i>
          <span>Paket</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>Kasir/penjualan">
          <i class="fas fa-fw fa-table"></i>
          <span>penjualan</span>
        </a>
      </li>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>