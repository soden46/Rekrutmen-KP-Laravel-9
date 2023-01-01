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
        <th>Lokasi Caffe</th>
        <th>Foto</th>
        <th>CV</th>
        <th>Surat Lamaran</th>
        <th>Aksi</th>
    </tr>
    @foreach ($lamaran as $lamar)
    <tr>
        <td>{{ $lamar->id }}</td>
        <td>{{ $lamar->nama }}</td>
        <td>{{ $lamar->email }}</td>
        <td>{{ $lamar->nama_caffe }}</td>
        <td>{{ $lamar->lokasi_caffe }}</td>
        <td>{{ $lamar->foto }}</td>
        <td>{{ $lamar->cv }}</td>
        <td>{{ $lamar->surat_lamaran }}</td>
        <td>
            <form action="{{ route('admin.destroy',$lamar->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('admin.terima',$lamar->id) }}">Terima</a>

                <a class="btn btn-primary" href="{{ route('admin.tolak',$lamar->id) }}">Tolak</a>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<div class="row text-center">
    {!! $lamaran->links() !!}
</div>

@endsection