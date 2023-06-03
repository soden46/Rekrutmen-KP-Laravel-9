@extends('dashboard',[
'title' => 'Laporan Data Caffe',
'pageTitle' => 'Data Caffe'
])
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<a class="btn btn-md btn-success mb-3" href="{{ url('cetakcaffe') }}"><i class="fa fa-print"></i> Cetak PDF</a>
<table class="table table-bordered">
    <tr class="font-12">
        <th style="width: 90px">Id Caffe</th>
        <th style="width: 90px">Nama Caffe</th>
        <th style="width: 200px">Alamat Caffe</th>
        <th style="width: 200px">Provinsi</th>
        <th style="width: 200px">Jumlah Pegawai</th>
    </tr>
    @foreach ($laporancaffe as $laporancafe)
    <tr>
        <td style="width: 25px">{{ $laporancafe->id_caffe }}</td>
        <td style="width: 25px">{{ $laporancafe->nama_caffe }}</td>
        <td style="width: 25px">{{ $laporancafe->alamat_caffe }}</td>
        <td style="width: 25px">{{ $laporancafe->provinsi }}</td>
        <td style="width: 25px">{{ $laporancafe->jumlah_pegawai }}</td>
    </tr>

    @endforeach
</table>
<div class="row text-center">
    {!! $laporancaffe->links() !!}
</div>

@endsection