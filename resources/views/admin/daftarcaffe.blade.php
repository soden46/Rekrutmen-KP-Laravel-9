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
<a class="btn btn-md btn-success mb-3" href="{{ url('cetakcaffe') }}"><i class="fa fa-print"></i> Cetak PDF</a>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama Caffe</th>
        <th>Provinsi</th>
        <th>Alamat Caffe</th>
        <th>Jumlah Pegawai</th>
        <th>Aksi</th>
    </tr>
    @foreach ($caffe as $kafe)
    <tr>

        <td>{{ $kafe->id_caffe }}</td>
        <td>{{ $kafe->nama_caffe }}</td>
        <td>{{ $kafe->provinsi }}</td>
        <td>{{ $kafe->alamat_caffe }}</td>
        <td>{{ $kafe->jumlah_pegawai }}</td>
        <td>
            <div class="btn-group" style="width:135px">
                <form action="{{ route('admin.destroy',$kafe->id_caffe) }}" method="Post">
                    <a class="btn btn-primary" href="{{ route('admin.edit',$kafe->id_caffe) }}">Edit</a>
                     @csrf
                     @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
    <tr>
        <th colspan="4">Total Pegawai: {{$jumlahp}}</th>
    </tr>
    <tr>
        <th colspan="4">Total Caffe: {{$jumlahc}}</th>
        <hr>
    </tr>
</table>
<div class="row text-center">
    <div>
        {!! $caffe->links() !!}
    </div>
</div>


@endsection