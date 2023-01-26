@extends('dashboard',[
'title' => 'Data Lowongan Pekerjaan',
'pageTitle' => 'Data Lowongan Pekerjaan'
])
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<a class="btn btn-md btn-success mb-3" href="{{ url('cetaklowongan') }}"><i class="fa fa-print"></i> Cetak PDF</a>
<table class="table table-bordered">
    <tr class="font-12">
        <th style="width: 25px">Id Lowongan</th>
        <th style="width: 25px">Nama Jabatan</th>
        <th style="width: 25px">Nama Caffe</th>
        <th style="width: 25px">Alamat Caffe</th>
    </tr>
    @foreach ($lowongan as $lowong)
    <tr>
        <td style="width: 25px">{{ $lowong->id_lowongan }}</td>
        <td style="width: 25px">{{ $lowong->nama_jabatan }}</td>
        <td style="width: 25px">{{ $lowong->nama_caffe }}</td>
        <td style="width: 25px">{{ $lowong->alamat_caffe }}</td>
    </tr>
    @endforeach
</table>
<div class="row text-center">
    {!! $lowongan->links() !!}
</div>

@endsection