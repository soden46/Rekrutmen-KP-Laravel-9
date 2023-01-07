@can('admin')
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <i class="fab fa-laravel"></i>
        </div>
        <div class=" sidebar-brand-text mx-3">
            <p>Halo</p>
            <p>{{(Auth::user()->nama)}}</p>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Master data</span>
        </a>
    </li>

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
            <span>Data Absensi</span>
        </a>
    </li>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="/rekrutmen" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <span>Rekrutmen</span>
        </a>
    </li>
    <div class="sidebar-heading">
        Laporan
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="/datacaffe" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <span>Data Caffe</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="/datapelamar" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <span>Data Pelamar</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="/penerimaan" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <span>Data Hasil Penerimaan</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="/lowongan" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <span>Lowongan Pekerjaan</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="/logout">
            <span>Logout</span></a>
    </li>
</ul>
@endcan
@can('pelamar')
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <i class="fab fa-laravel"></i>
        </div>
        <div class="sidebar-brand-text mx-3">halo, {{ Auth::user()->nama }}</div>
    </a>

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