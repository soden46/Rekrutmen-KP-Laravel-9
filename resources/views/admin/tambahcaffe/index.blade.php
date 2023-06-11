@extends('dashboard',[
'title' => 'Form Tambah Caffe',
'pageTitle' => 'Form Tambah Caffe',
])
@section('content')
<div class="h-50 d-inline-block" style="max-width: 75%">
    @include('component.alert-dismissible')
    <form action="/storecaffe " method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-floating">
            <label for="floatingInput">Group Caffe</label>
            <input type="text" name="group" class="form-control @error('group')is-invalid @enderror" id="floatingInput" placeholder="Bento Kopi" required value="{{old('group')}}">
            @error('group')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-floating">
            <label for="floatingInput">Nama Caffe</label>
            <input type="text" name="nama" class="form-control @error('nama')is-invalid @enderror" id="floatingInput" placeholder="Bento Kopi UMY" required value="{{old('nama')}}">
            @error('nama')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-floating">
            <label for="floatingInput">Alamat Caffe</label>
            <input type="text" name="alamat_caffe" class="form-control @error('alamat_caffe')is-invalid @enderror" id="floatingInput" placeholder="Alamat Lengkap: Jl. Gatak No.99, Brajan, Tamantirto, Kec. Kasihan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55184" required value="{{old('alamat_caffe')}}">
            @error('alamat_caffe')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-floating">
            <label for="floatingInput">Provinsi</label>
            <input type="text" name="provinsi" class="form-control @error('provinsi')is-invalid @enderror" id="floatingInput" placeholder="Contoh: Jawa Tengah" required value="{{old('provinsi')}}">
            @error('provinsi')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-floating">
            <label for="floatingInput">Jumlah Pegawai</label>
            <input type="integer" name="jumlah_pegawai" class="form-control @error('jumlah_pegawai')is-invalid @enderror" id="floatingInput" placeholder="Masukan Angka" required value="{{old('jumlah_pegawai')}}">
            @error('alamat_caffe')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <button class="btn btn-primary mt-12" type="submit">Simpan</button>
    </form>
</div>

@endsection