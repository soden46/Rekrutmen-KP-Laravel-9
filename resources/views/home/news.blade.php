@extends('layouts.home.master',[
'title' => 'Berita | Bento Group Indonesia',
'pageTitle' => 'Berita | Bento Group Indonesia',
])
@section('content')
                <div class="container mb-3 mt-3">
                             @foreach($news as $berita)
                            <h1 class="d-flex justify-content-center">{{$berita->judul}}</h1>
                            @endforeach
                    <div class="row">
                        <div class="col-12">
                            <div class="meta">
                            @foreach($news as $berita)
                            <small class="d-flex justify-content-center">
                            <i class="fa fa-list-alt"> {{$berita->kategori}}</i>
                            <i class="fa fa-calendar-alt"> {{$berita->created_at}}</i>
                            </small>
                            @endforeach
                            <p></p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <img loading="lazy" width="200" height="200" src="{{asset('assets/img/bento.jpeg')}}" alt="Card image cap">
                        </div>
                            <p>
                                @foreach($news as $berita)
                                {!!$berita->isi!!}
                                @endforeach
                            </p>
                        </div>
                    </div>
                </div>
@endsection