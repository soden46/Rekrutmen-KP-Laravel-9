<div class="nav-bar">
    <div class="container-fluid">

        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand"></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon" style="color:rgb(0, 187, 255)"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <div class="logo d-flex align-items-center">
                        <a href="/" class="d-flex align-items-center">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" height="46">
                            <p class="logo-text mb-0 ml-2 text-white"><b>LPH-YPHI</b></p>
                        </a>
                    </div>
                    <a href="{{ url('recruitment') }}" class="nav-item nav-link">Home</a>
                    <a href="{{ url('daftarberita') }}" class="nav-item nav-link">Profile</a>
                    <a href="{{ url('invesmen') }}" class="nav-item nav-link">Struktur Organisasi</a>
                    <a href="{{ url('faq') }}" class="nav-item nav-link">Auditor Halal</a>
                    <a href="{{ url('contact') }}" class="nav-item nav-link">Proses Sertifikasi</a>
                    <a href="{{ url('contact') }}" class="nav-item nav-link">Kontak</a>
                    <a href="{{ url('contact') }}" class="nav-item nav-link">SIHALAL</a>
                </div>
            </div>


            {{-- <div class="navbar-nav mr-1 d-inline-block">
                    <a class="nav-item nav-link" href="{{ route('login') }}">Masuk</a>
                </div>
                <div class="navbar-nav mr-1 d-inline-block">
                    <a class="nav-item nav-link" href="{{ route('register') }}">Daftar</a>
                </div> --}}
    </div>
    </nav>
</div>
</div>
