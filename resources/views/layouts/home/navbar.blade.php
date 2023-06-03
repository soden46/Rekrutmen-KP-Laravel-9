<div class="nav-bar">
    <div class="container-fluid">

        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon" style="color:gold"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <div class="logo">
                        <a href="/">
                            <img src="{{asset('assets/img/bgi.png')}}" alt="Logo" width="" height="46">
                        </a>
                    </div>
                    <a href="{{url('recruitment')}}" class="nav-item nav-link">Recruitment</a>
                    <a href="{{url('daftarberita')}}" class="nav-item nav-link">Berita</a>
                    <a href="{{url('invesmen')}}" class="nav-item nav-link">Invesment</a>
                    <a href="{{url('faq')}}" class="nav-item nav-link">FAQ</a>
                    <a href="{{url('contact')}}" class="nav-item nav-link">Hubungi Kami</a>
                    
                </div>
                <div class="navbar-nav mr-1 d-inline-block">
                    <a class="nav-item nav-link" href="{{route('login')}}">Masuk</a>
                </div>
                <div class="navbar-nav mr-1 d-inline-block">
                <a class="nav-item nav-link" href="{{route('register')}}">Daftar</a>
                </div>
            </div>
        </nav>
    </div>
</div>