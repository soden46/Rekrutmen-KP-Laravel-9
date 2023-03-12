@extends('dashboard',[
'title' => 'Menoewa Kopi',
'pageTitle' => 'Monoewa Kopi'
])
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<p>Cari Nama Caffe :</p>
	<form action="/menoewa/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Caffe .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>
<table class="table table-bordered">
    <tr>
       <th style="width:135px">Group Caffe</th>
        <th>Nama Caffe</th>
        <th style="width:135px">Provinsi</th>
        <th style="width:250px">Alamat Caffe</th>
        <th>Jumlah Pegawai</th>
        <th>Aksi</th>
    </tr>
    @foreach ($caffe as $kafe)
    <tr>
         <td>{{ $kafe->group_caffe }}</td>
        <td>{{ $kafe->nama_caffe }}</td>
        <td>{{ $kafe->provinsi }}</td>
        <td>{{ $kafe->alamat_caffe }}</td>
        <td>{{ $kafe->jumlah_pegawai }}</td>
        <td>
            <div class="btn-group" style="width:135px">
                <form action="admin/destroy/{{$kafe->id_caffe}}" method="Post">
                    <a class="btn btn-primary" href="admin/edit/{{$kafe->id_caffe}}">Edit</a>
                     @csrf
                     @method('post')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
</table>
<div class="row text-center">
    {!! $caffe->links() !!}
</div>

@endsection