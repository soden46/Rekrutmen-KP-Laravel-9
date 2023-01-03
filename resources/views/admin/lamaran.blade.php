@extends('admin.index')

@section('content')
<div class="row mt-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            <h2>Daftar Lamaran</h2>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Nama Caffe</th>
        <th>Alamat Caffe</th>
        <th>Foto</th>
        <th>CV</th>
        <th>Surat Lamaran</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    @foreach ($lamaran as $lamar)
    <tr>
        <td>{{ $lamar->id }}</td>
        <td>{{ $lamar->nama }}</td>
        <td>{{ $lamar->email }}</td>
        <td>{{ $lamar->nama_caffe }}</td>
        <td>{{ $lamar->alamat_caffe }}</td>
        <td><a href="{{asset('storage/'.$lamar->foto)}}">Lihat Foto</td>
        <td><a href="{{asset('storage/'.$lamar->cv)}}">Lihat CV</td>
        <td><a href="{{asset('storage/'.$lamar->surat_lamaran)}}">Lihat Surat Lamaran</td>
        <td>{{ $lamar->status }}</td>
        <td>
            <div class="btn-group">
                <form method="POST" action="{{ route('admin.terima',$lamar->id) }}">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-sm">Terima</button>

                </form>
                <form method="post" action="{{ route('admin.terima',$lamar->id) }}">
                    @csrf
                    <button type="submit" class="btn btn-secondary btn-sm">Tolak</button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
</table>
<div class="row text-center">
    {!! $lamaran->links() !!}
</div>

@endsection