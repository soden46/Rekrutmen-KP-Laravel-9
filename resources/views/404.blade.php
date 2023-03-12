@extends('layouts.home.master',[
'title' => '404 | Bento Group Indonesia',
'pageTitle' => '404 | Bento Group Indonesia',
])
@section('content')
<div class="container">
      <div class="row text-center">
        <div class="col-lg-6 offset-lg-3 col-sm-6 offset-sm-3 col-12 p-3 error-main">
          <div class="row">
            <div class="col-lg-8 col-12 col-sm-10 offset-lg-2 offset-sm-1">
              <h1 class="m-0">404</h1>
              <img src="{{asset('assets/img/bgi.png')}}" alt="Logo" width="" height="46">
                            </a>
              <h6>Halaman Tidak Ditemukan - Bento Group Indonesia</h6>
              <p>Halaman Yang Anda Tuju<span class="text-info">Tidak Ditemukan</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection    