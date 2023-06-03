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
<a class="btn btn-md btn-success mb-3" href="{{ url('cetak') }}"><i class="fa fa-print"></i> Cetak PDF</a>
<a class="btn btn-md btn-success mb-3 emailundangan" href="{{route('emailundangan')}}"><i class="fa fa-envelope" aria-hidden="true"></i> Kirim Email</a>
<table class="table table-bordered">
    <tr>
        <th>Nama Pelamar</th>
        <th>Email</th>
        <th>Foto</th>
        <th>CV</th>
        <th>Surat Lamaran</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    @foreach ($penerimaan as $terima)
    <tr>
        <td>{{ $terima->nama_pelamar }}</td>
        <td>{{ $terima->email }}</td>
        <td><a href="{{asset('storage/'.$terima->foto)}}">Lihat Foto</td>
        <td><a href="{{asset('storage/'.$terima->cv)}}">Lihat CV</td>
        <td><a href="{{asset('storage/'.$terima->surat_lamaran)}}">Lihat Surat Lamaran</td>
        <td>{{ $terima->status_lamaran='Lamaran Disetujui' }}</td>

        <td>
            <div class="btn-group">
                <form method="POST" action="{{ route('admin.angkat',$terima->id_lamaran) }}">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-sm">Jadikan Karyawan</button>

                </form>
                <form method="POST" action="{{ route('admin.hapus',$terima->id_lamaran) }}">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
</table>
<div class="row text-center">
    {!! $penerimaan->links() !!}
</div>
@endsection