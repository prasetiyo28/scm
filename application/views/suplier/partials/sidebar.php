<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Suplier</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="index.html">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">




  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url() ?>suplier/cabang">
      <i class="fas fa-fw fa-handshake"></i>
      <span>Data Cabang</span>
    </a>
  </li>



  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url() ?>suplier/order">
      <i class="fas fa-fw fa-building"></i>
      <span>Order Masuk</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url() ?>suplier/transaksi">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Data Transaksi</span>
    </a>
  </li>

  
  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-cog"></i>
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