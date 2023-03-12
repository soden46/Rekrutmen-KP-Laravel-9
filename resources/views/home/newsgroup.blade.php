@extends('layouts.home.master',[
'title' => 'Daftar Berita | Bento Group Indonesia',
'pageTitle' => 'Daftar Berita | Bento Group Indonesia',
])
@section('content')
<!-- Service Start -->
@if($news->count())
<div class="card mb-3 mt-3">
    <img class="card-img-top " loading="lazy" width="1200" height="200" src="{{$news[0]->foto}}" alt="Card image cap">
    <div class="card-body text-center">
        <h3 class="card-title"><a href="https://bentogroupindonesia.com/berita/{{$news[0]->judul}}">{{$news[0]->judul}}</a></h3>
        <p>
            <small class="text-muted">
                Kategori: {{$news[0]->kategori}} {{$news[0]->created_at->diffForHumans()}}
            </small>
        </p>
        <p class="card-text">{{$news[0]->kutipan}}</p>
        <a href="https://bentogroupindonesia.com/berita/{{$news[0]->judul}}" class="text-decoration-none btn btn-primary">Lihat</a>
    </div>
</div>
@else
<p class="text-center fs-4">Tidak Ada Postingan...</p>
@endif
<div class="container mb-4">
    <div class="row">
        @foreach($news->skip(1) as $berita)
        <div class="col-mt-4 col-md-4 col-mb-4">
            <div class="card">
                <img class="card-img-top" loading="lazy" width="200" height="150" src="{{asset('assets/img/bgi.png')}}" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">{{$berita->judul}}</h5>
                    <p>
                        <small class="text-muted">
                            Kategori: {{$news[0]->kategori}} {{$news[0]->created_at->diffForHumans()}}
                        </small>
                    </p>
                    <p class="card-text">{{$berita->kutipan}}</p>
                    <a href="https://bentogroupindonesia.com/berita/{{$berita->judul}}" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- Service End -->
@endsection