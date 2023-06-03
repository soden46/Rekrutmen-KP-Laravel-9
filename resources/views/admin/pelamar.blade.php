@extends('dashboard',[
'title' => 'Data Pelamar',
'pageTitle' => 'Data Pelamar'
])
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<a class="btn btn-md btn-success mb-3" href="{{ url('cetakpelamar') }}"><i class="fa fa-print"></i> Cetak PDF</a>
<table class="table table-bordered">
    <tr class="font-12">
        <th style="width: 150px">Nama Pelamar</th>
        <th style="width: 150px">Email</th>
        <th style="width: 100px">Foto</th>
        <th style="width: 100px">CV</th>
        <th style="width: 150px">Surat Lamaran</th>
        <th style="width: 25px">Tanggal Registrasi</th>
    </tr>
    @foreach ($pelamar as $lamar)
    <tr>
        <td style="width: 90px">{{ $lamar->nama_pelamar }}</td>
        <td style="width: 200px">{{ $lamar->email }}</td>
        <td><a href="{{asset('storage/'.$lamar->foto)}}">Lihat Foto</td>
        <td><a href="{{asset('storage/'.$lamar->cv)}}">Lihat CV</td>
        <td><a href="{{asset('storage/'.$lamar->surat_lamaran)}}">Lihat Surat Lamaran</td>
        <td style="width: 200px">{{ $lamar->created_at }}</td>
    </tr>
    @endforeach
</table>
<div class="row text-center">
    {!! $pelamar->links() !!}
</div>

@endsection