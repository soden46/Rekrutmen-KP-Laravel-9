@extends('dashboard',[
'title' => 'Undangan Seleksi Wawancara',
'pageTitle' => 'Undangan Seleksi Wawancara'
])
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="/kirimemail">
                @csrf
                <div class="form-group">
                    <label>Alamat Email</label>
                    <input type="email" class="form-control @error('email')is-invalid @enderror"" id=" email" name="email">
                    @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class=" form-group">
                    <label>Pesan</label>
                    <marquee>Edit Informasi Yang Diperlikan dan Jangan Hapus text p </marquee>
                    <textarea class="form-control " id="pesan" name="pesan" rows="15">
                    <p>Assalamualikum</p>

                    Yth. Calon Crew Bento Kopi lokasi
                    Terimakasih sudah sudah mendaftar di Bento Group Indonesia. Kami mengudang saudara/i untuk mengikuti seleksi pada:

                    <p>📆 Selasa, 27 Des 2022</p>
                    🕒 16:00- Selesai
                    <p>📝 Seleksi Wawancara
                    <p>📍nama caffe
                    <p>link google map

                    Silahkan membawa CV dan Surat Lamaran berpakaian rapih. Datang sesuai jam yg sudah dijadwalkan.
                    Sekian undangan ini kami sampaikan terimakasih
                    </textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Kirim Email Undangan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection