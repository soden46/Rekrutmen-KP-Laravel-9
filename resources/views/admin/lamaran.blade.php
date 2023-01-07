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
<table class="table table-bordered">
    <tr>
        <th>Id Lamaran</th>
        <th>Id Pelamar</th>
        <th>Foto</th>
        <th>Surat Lamaran</th>
        <th>CV</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    @foreach ($lamaran as $lamar)
    <tr>
        <td>{{ $lamar->id_lamaran }}</td>
        <td>{{ $lamar->id_pelamar }}</td>
        <td><a href="{{asset('storage/'.$lamar->foto)}}">Lihat Foto</td>
        <td><a href="{{asset('storage/'.$lamar->cv)}}">Lihat CV</td>
        <td><a href="{{asset('storage/'.$lamar->surat_lamaran)}}">Lihat Surat Lamaran</td>
        <td>{{ $lamar->status_lamaran }}</td>
        <td>
            <div class="btn-group">
                <form method="POST" action="{{ route('admin.terima',$lamar->id_lamaran) }}">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-sm">Terima</button>

                </form>
                <form method="POST" action="{{ route('admin.tolak',$lamar->id_lamaran) }}">
                    @csrf
                    <button type="submit" class="btn btn-secondary btn-sm">Tolak</button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
</table>
<div class="row text-center">
    {!! $lamaran->links() !!}
</div>

@endsection