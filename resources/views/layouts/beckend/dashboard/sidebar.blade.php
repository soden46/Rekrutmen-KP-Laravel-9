@can('admin')
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <div class="sidebar-brand-icon d-flex align-items-center justify-content-center">
        <img src="{{asset('assets/img/Logobgiputih.png')}}" alt="Logo" width="" height="80"></img>
    </div>
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class=" sidebar-brand-text mx-3">
            <p>{{(Auth::user()->nama)}}</p>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <div class="sidebar-heading">
        Data Master:
    </div>
    <!-- Nav Item - Utilities Collapse Menu-->
    <li class="nav-item">
        <a class="nav-link" href="{{url('admin/hrd')}}">
            <i class="fas fa-fw fa-users"></i>
            <span>HRD</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa fa-building-o"></i>
            <span>Data Caffe</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('tambahcaffe')}}">Tambah Caffe</a>
                <h6 class="collapse-header">Pilih Group Caffe:</h6>
                <a class="collapse-item" href="{{url('bento')}}">Bento Kopi</a>
                <a class="collapse-item" href="{{url('nuri')}}">Kopi Nuri</a>
                <a class="collapse-item" href="{{url('stako')}}">Stako Kopi</a>
                <a class="collapse-item" href="{{url('kopisini')}}">Kopisini</a>
                <a class="collapse-item" href="{{url('menoewa')}}">Menoewa kopi</a>
                <a class="collapse-item" href="{{url('nuansa')}}">NUansa Kopi</a>
                <a class="collapse-item" href="{{url('njati')}}">Njati Kopi</a>
                <a class="collapse-item" href="{{url('kaktus')}}">Kaktus Coffe</a>
                <a class="collapse-item" href="{{url('easy')}}">Easy Breezy</a>
                <a class="collapse-item" href="{{url('river')}}">River Garden</a>
                <a class="collapse-item" href="{{url('pendopo')}}">Pendopo Malioboro</a>
            </div>
        </div>
    </li>
    <!-- Nav Item -->
    <li class="nav-item">
        <a class="nav-link" href="{{url('/rekrutment')}}">
            <i class="fas fa-fw fa-users"></i>
            <span>Pelamar</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('admin/news/create')}}">
            <i class="fa fa-handshake-o"></i>
            <span>Berita</span>
        </a>
    </li>
    <div class="sidebar-heading">
        Laporan:
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{url('/caffe')}}">
            <i class="fa fa-building-o"></i>
            <span>Data Caffe</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('/datapelamar')}}">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Pelamar</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('/penerimaan')}}">
            <i class="fa fa-book"></i>
            <span>Data Hasil Penerimaan</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('/lowongan')}}">
            <i class="fa fa-newspaper-o"></i>
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
        <img src="{{asset('assets/img/Logobgiputih.png')}}" alt="Logo" width="" height="80"></img>
    </div>
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-text mx-3">{{ Auth::user()->nama }}</div>
    </a>
    <hr class="sidebar-divider my-0">
    <!-- Nav Item -->
    <li class="nav-item">
        <a class="nav-link" href="/biodata">
            <i class="fa fa-light fa-user-pen"></i>
            <span>Biodata</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/pelamar/lowongan">
            <i class="fa fa-light fa-newspaper"></i>
            <span>Lowongan</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/status">
            <i class="fa fa-info-circle"></i>
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