@extends('dashboard',[
'title' => 'Form Pengajuan Lamaran',
'pageTitle' => 'Form Pengajuan Lamaran',
])
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="h-50 d-inline-block" style="max-width: 75%">
    <marquee>Silahkan Isi Biodat Anda Terlebih Dahulu Pada Menu Biodata Sebelum Mengajukan Lamaran </marquee>
    <form action="/lamarpekerjaan " method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-floating">
            <input type="text" name="id_pelamar" class="form-control" id="floatingInput" value="{{$pelamar}}" hidden>
        </div>
        <div class="form-floating">
            <input type="text" name="id_berita" class="form-control" id="id_berita" value="{{$id_berita}}" hidden>
        </div>
        <div class="form-floating">
            <label for="floatingInput">Lowongan</label>
            <input type="text" name="lowongan" class="form-control" id="lowongan" value="{{$berita}}" readonly>
        </div>
        <div class="form-floating">
            <label for="floatingInput">Nama</label>
            <input type="text" name="nama_pelamar" class="form-control @error('nama_pelamar')is-invalid @enderror" id="floatingInput" placeholder="Nama Lengkap" required value="{{old('nama_pelamar')}}">
            @error('nama_pelamar')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-floating">
            <label for="floatingInput">Email</label>
            <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="floatingInput" placeholder="bentokopi@gmail.com" required value="{{old('email')}}">
            @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-floating">
            <label for="floatingInput">Alamat Caffe</label>
            <input type="text" name="alamat_caffe" class="form-control @error('alamat_caffe')is-invalid @enderror" id="floatingInput" placeholder="jl.gejayan..." required value="{{old('alamat_caffe')}}">
            @error('alamat_caffe')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-floating">
            <label for="foto" class="form-label">Foto Diri</label>
            <input class="form-control @error('foto')is-invalid @enderror" type="file" id="foto" name="foto">
            @error('foto')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-floating">
            <label for="cv" class="form-label">CV</label>
            <input class="form-control @error('cv')is-invalid @enderror" type="file" id="cv" name="cv">
            @error('cv')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-floating">
            <label for="surat_lamaran" class="form-label">Surat Lamaran</label>
            <input class="form-control @error('surat_lamaran')is-invalid @enderror" type="file" id="surat_lamaran" name="surat_lamaran">
            @error('surat_lamaran')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <button class="btn btn-primary mt-12" type="submit">Simpan</button>
    </form>
</div>

@endsection