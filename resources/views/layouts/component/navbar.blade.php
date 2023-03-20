<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

       
    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="btn btn-white btn-sm">{{Auth::guard('admin')->user()->nama_petugas}}</span>
          
        </a>
        
    </li>

</ul>