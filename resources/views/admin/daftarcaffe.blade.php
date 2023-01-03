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

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama Caffe</th>
        <th>Alamat Caffe</th>
        <th>Aksi</th>
    </tr>
    @foreach ($caffe as $kafe)
    <tr>
        <td>{{ $kafe->id_caffe }}</td>
        <td>{{ $kafe->nama-Caffe }}</td>
        <td>{{ $kafe->alamat_caffe }}</td>
        <td>
            <div class="btn-group">
                <form method="POST" action="{{ route('admin.terima',$kafe->id_caffe) }}">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-sm">Terima</button>

                </form>
                <form method="post" action="{{ route('admin.terima',$kafe->id_caffe) }}">
                    @csrf
                    <button type="submit" class="btn btn-secondary btn-sm">Tolak</button>
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