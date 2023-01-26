@extends('dashboard',[
'title' => 'Daftar Caffe',
'pageTitle' => 'Daftar Caffe'
])
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<a class="btn btn-md btn-success mb-3" href="{{ url('caffepdf') }}"><i class="fa fa-print"></i> Cetak PDF</a>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama Caffe</th>
        <th>Alamat Caffe</th>
    </tr>
    @foreach ($caffe as $kafe)
    <tr>

        <td>{{ $kafe->id_caffe }}</td>
        <td>{{ $kafe->nama_caffe }}</td>
        <td>{{ $kafe->alamat_caffe }}</td>
        <td>{{$jumlah}}</td>
    </tr>
    @endforeach
</table>
<td>Jumlah: {{$jumlah}}</td>


@endsection