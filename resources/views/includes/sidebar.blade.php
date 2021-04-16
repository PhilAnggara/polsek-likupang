<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-pol sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
    <div class="sidebar-brand-icon">
      <img class="polsek" src="{{ url('frontend/images/logo.png') }}" alt="">
    </div>
    <div class="sidebar-brand-text mx-3 logo">Polsek Likupang</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ Request::path() === '/' ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-home"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Data Aset
  </div>

  <!-- Nav Item - Kendaraan -->
  <li class="nav-item {{ request()->path() == 'kendaraan' ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('kendaraan.index') }}">
      <i class="fas fa-fw fa-car-side"></i>
      <span>Kendaraan</span></a>
  </li>

  <!-- Nav Item - Senjata -->
  <li class="nav-item {{ Request::is('senjata') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('senjata.index') }}">
      <i class="far fa-dot-circle"></i>
      <span>Senjata</span></a>
  </li>

  <!-- Nav Item - Kantor -->
  <li class="nav-item {{ Request::is('kantor') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('kantor.index') }}">
      <i class="fas fa-fw fa-tv"></i>
      <span>Kantor</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- Akhir Sidebar -->