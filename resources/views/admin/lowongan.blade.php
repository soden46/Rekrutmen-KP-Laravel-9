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
        <th style="width: 25px">Judul Lowongan</th>
        <th style="width: 25px">Penempatan</th>
        <th style="width: 25px">Alamat Caffe</th>
        <th style="width: 25px">Status Lowongan</th>
        <th style="width: 35px">Dibuat Pada</th>
        <th style="width: 3px">Aksi</th>
    </tr>
    @foreach ($lowongan as $lowong)
    <tr>
        <td style="width: 25px">{{ $lowong->judul }}</td>
        <td style="width: 25px">{{ $lowong->penempatan }}</td>
        <td style="width: 25px">{{ $lowong->alamat_caffe }}</td>
        <td style="width: 25px">{{ $lowong->status_lowongan }}</td>
        <td style="width: 25px">{{ $lowong->created_at }}</td>
        <td>
            <div class="btn-group">
                <form method="POST" action="{{ route('admin.tutup',$lowong->id_berita) }}">
                    @csrf
                    @method('post')
                    <button type="submit" class="btn btn-danger btn-sm mr-1">Tutup</button>

                </form>
                <form method="POST" action="{{ route('admin.buka',$lowong->id_berita) }}">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-sm">Buka</button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
</table>
<div class="row text-center">
    {!! $lowongan->links() !!}
</div>

@endsection