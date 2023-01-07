@can('admin')
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <div class="sidebar-brand-icon d-flex align-items-center justify-content-center">
        <img src="assets/img/logobgiputih.png" alt="Logo" width="" height="80"></img>
    </div>
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class=" sidebar-brand-text mx-3">
            <p>{{(Auth::user()->nama)}}</p>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Karyawan</span>
        </a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <span>Data Absensi</span>
        </a>
    </li>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="/rekrutmen" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa fa-handshake-o" aria-hidden="true"></i>
            <span>Rekrutmen</span>
        </a>
    </li>
    <div class="sidebar-heading">
        Laporan:
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="/datacaffe" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa fa-building-o" aria-hidden="true"></i>
            <span>Data Caffe</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="/datapelamar" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Pelamar</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="/penerimaan" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa fa-book" aria-hidden="true"></i>
            <span>Data Hasil Penerimaan</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="/lowongan" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa fa-newspaper-o" aria-hidden="true"></i>
            <span>Lowongan Pekerjaan</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="/logout">
            <i class="fa fa-sign-out"></i>
            <span>Logout</span></a>
    </li>
</ul>
@endcan
@can('pelamar')
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <div class="sidebar-brand-icon d-flex align-items-center justify-content-center">
        <img src="assets/img/logobgiputih.png" alt="Logo" width="" height="80"></img>
    </div>
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-text mx-3">{{ Auth::user()->nama }}</div>
    </a>
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="/lamaran" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <span>Lamar Pekerjaan</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="/status" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <span>Status Lamaran</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Sidebar Toggler (Sidebar) -->
    <li class="nav-item">
        <a class="nav-link" href="/logout">
            <i class="fa fa-sign-out"></i>
            <span>Logout</span></a>
    </li>
</ul>
</ul>
@endcan