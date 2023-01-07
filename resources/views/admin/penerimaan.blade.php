@extends('dashboard',[
'title' => 'Daftar Lamaran',
'pageTitle' => 'Daftar Lamaran'
])
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<a class="btn btn-md btn-success mb-3" href="{{ url('cetak') }}"><i class="fa fa-print"></i> Cetak PDF</a>
<a class="btn btn-md btn-success mb-3" href="{{route('emailundangan')}}"></i> Kirim Email</a>
<table class="table table-bordered">
    <tr>
        <th>Id Lamaran</th>
        <th>Id Pelamar</th>
        <th>Nama Pelamar</th>
        <th>Status</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>
    @foreach ($penerimaan as $terima)
    <tr>
        <td>{{ $terima->id_lamaran }}</td>
        <td>{{ $terima->id_pelamar }}</td>
        <td>{{ $terima->nama_pelamar }}</td>
        <td>{{ $terima->status_lamaran='Lamaran Disetujui' }}</td>
        <td>{{ $terima->email }}</td>
        <td>
        </td>
    </tr>
    @endforeach
</table>
<div class="row text-center">
    {!! $penerimaan->links() !!}
</div>

@endsection