@extends('dashboard',[
'title' => 'Data Hasil Penerimaan',
'pageTitle' => 'Data Hasil Penerimaan'
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
        <th style="width: 25px">Id Lamaran</th>
        <th style="width: 25px">Id Pelamar</th>
        <th style="width: 25px">Foto</th>
        <th style="width: 25px">CV</th>
        <th style="width: 90px">Surat Lamaran</th>
        <th style="width: 200px">Nama Pelamar</th>
        <th style="width: 200px">Email</th>
    </tr>
    @foreach ($pelamar as $lamar)
    <tr>
        <td style="width: 25px">{{ $lamar->id_lamaran }}</td>
        <td style="width: 25px">{{ $lamar->id_pelamar }}</td>
        <td><a href="{{asset('storage/'.$lamar->foto)}}">Lihat Foto</td>
        <td><a href="{{asset('storage/'.$lamar->cv)}}">Lihat CV</td>
        <td><a href="{{asset('storage/'.$lamar->surat_lamaran)}}">Lihat Surat Lamaran</td>
        <td style="width: 90px">{{ $lamar->nama_pelamar }}</td>
        <td style="width: 200px">{{ $lamar->email }}</td>
    </tr>
    @endforeach
</table>
<div class="row text-center">
    {!! $pelamar->links() !!}
</div>

@endsection