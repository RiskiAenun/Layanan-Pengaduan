  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div>
            <img src="{{ asset('images/logo.png') }}" width="200" >
        </div>
        
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Dashboard -->
    
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('pengaduan.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Pengaduan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('petugas.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Petugas</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('masyarakat.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Masyarakat</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('laporan.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Laporan</span></a>
    </li>

   

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>

<!-- End of Sidebar -->

