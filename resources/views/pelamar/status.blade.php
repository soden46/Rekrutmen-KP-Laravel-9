@extends('dashboard',[
'title' => 'Status Lamaran',
'pageTitle' => 'Status Lamaran',
])
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="table-responsive">
    <table class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Lowongan</th>
            <th>Alamat Caffe</th>
            <th>Foto</th>
            <th>CV</th>
            <th>Surat Lamaran</th>
            <th>Status</th>
        </tr>
        @foreach ($lamaran as $lamar)
        <tr>
            <td>{{ $lamar->id }}</td>
            <td>{{ $lamar->nama_pelamar }}</td>
            <td>{{ $lamar->email }}</td>
            <td>{{ $lamar->lowongan }}</td>
            <td>{{ $lamar->alamat_caffe }}</td>
            <td><a href="{{asset('storage/'.$lamar->foto)}}">Lihat Foto</td>
            <td><a href="{{asset('storage/'.$lamar->cv)}}">Lihat CV</td>
            <td><a href="{{asset('storage/'.$lamar->surat_lamaran)}}">Lihat Surat Lamaran</td>
            <td>{{ $lamar->status_lamaran }}</td>
        </tr>
        @endforeach
    </table>
</div>


@endsection