@extends('dashboard',[
'title' => 'Buat Postingan Baru',
'pageTitle' => 'Buat Postingan Baru'
])
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif
<div class="col-lg-8">
  <form method="post" action="{{url('/admin/news/store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="judul_artikel">Judul</label>
      <input type="text" class="form-control @error('judul_artikel') is-invalid @enderror" id="judul_artikel" name="judul_artikel" value="{{old('judul_artikel')}}">
      @error('judul_artikel')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="form-group">
      <label for="penempatan">Penempatan</label>
      <input type="text" class="form-control @error('penempatan') is-invalid @enderror" id="penempatan" name="penempatan" value="{{old('penempatan')}}">
      @error('penempatan')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="form-group">
      <label for="slug">Slug</label>
      <input type="text" class="form-control " id="slug" name="slug" readonly>
    </div>
    <div class="form-group">
      <label for="kategori" name="kategori" id="kategori">Pilih Kategori</label>
      <select class="form-control" id="kategori" name="kategori">
        <option>Berita</option>
        <option>Lowongan Kerja</option>
      </select>
    </div>
    <div class="form-group">
      <label for="foto">Foto</label>
      <input type="file" class="form-control " id="foto" name="foto">
    </div>
    <div class="form-group">
      <input id="isi" type="hidden" name="isi">
      @error('isi')
      <p class="text-danger">{{$message}}</p>
      @enderror
      <trix-editor input="isi"></trix-editor>
    </div>
    <button type="submit" class="btn btn-primary">Posting Berita</button>
  </form>
</div>

<script>
  const judul_artikel = document.querySelector('#judul_artikel');
  const slug = document.querySelector('#slug');

  judul_artikel.addEventListener('change', function() {
    fetch('/admin/news/CheckSlug?judul_artikel=' + judul_artikel.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  });
</script>
@endsection