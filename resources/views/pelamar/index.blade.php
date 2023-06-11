@extends('dashboard',[
'title' => 'Dashboard Pelamar',
'pageTitle' => 'Dashboard Pelamar'
])
@section('content')
<div class="row">
  <div class="card text-white bg-info col-sm-4">
    <div class="card-body">
      <h5 class="card-title">Jumlah Lowongan</h5>
      <h2 class="card-text">
        <i class="fa fa-clipboard-list"> {{$lowongan}}</i>
      </h2><br>
      <a href="/pelamar/lowongan" class="btn btn-primary">Lihat Lowongan</a>
    </div>
  </div>
  <div class="card text-white bg-warning col-sm-4">
    <div class="card-body">
      <h5 class="card-title">Isi Biodata</h5>
      <p class="card-text">
        Isi biodata anda dengan cara mengeklik menu biodata sebelum mengajukan lamaran melaluli halaman lowongan
      <p>
    </div>
  </div>
  <div class="card text-white bg-info col-sm-4">
    <div class="card-body">
      <h5 class="card-title">Cara Mengajukan Lamaran</h5>
      <p class="card-text">
        1. Klik menu lowongan<br>
        2. Klik Lihat Lowongan Pada tombol list lowongan<br>
        3. Klik tombol lamar pada halaman detail
      </p>
    </div>
  </div>
</div>
@endsection