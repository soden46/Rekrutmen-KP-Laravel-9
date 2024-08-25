@extends('layouts.home.master', [
    'title' => 'HOME | Bento Group Indonesia',
    'pageTitle' => 'HOME | Bento Group Indonesia',
])
@section('content')
    <!-- Header Start -->
    <div class="container-fluid hero-header py-2 mb-2">
        <div class="container py-4">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-2 animated slideInDown">Yayasan Produk Halal INDONESIA</h1>
                    <p class="animated slideInDown">Daftar Sertifikasi halal mandiri lebih cepat dan mudah.</p>
                    <a href="" class="btn btn-primary py-3 px-4 mt-3 animated slideInDown">Daftar Disini</a>
                </div>
                <div class="col-lg-6 animated slideInUp">
                    <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;"
                        src="{{ asset('assets/img/hero-1.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Header End -->

    <!-- Didukung Oleh Start -->
    <div class="container-xxl bg-light py-5 my-5" style="margin-top: 0px;">
        <div class="container py-2">
            <div class="row g-5 align-items-center">
                <div class="col-lg-2 col-md-12">
                    <p class="fs-4 text-secondary mb-0"><b>Didukung Oleh:</b></p>
                </div>
                <div class="col-lg-10 col-md-12">
                    <div class="row g-5">
                        <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid mb-4" src="img/logo-partner1.png" alt="Partner 1">
                            {{-- <p class="fs-5 text-primary mb-0">Partner 1</p> --}}
                        </div>
                        <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid mb-4" src="img/logo-partner2.png" alt="Partner 2">
                            {{-- <p class="fs-5 text-primary mb-0">Partner 2</p> --}}
                        </div>
                        <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.5s">
                            <img class="img-fluid mb-4" src="img/logo-partner3.png" alt="Partner 3">
                            {{-- <p class="fs-5 text-primary mb-0">Partner 3</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Didukung Oleh End -->

    <!-- Tentang Start -->
    <div class="faqs">
        <div class="container">
            <div class="content">
                <img src="{{ asset('assets/img/hero-1.png') }}" alt="Barista" class="faq-img">
                <div class="text-content">
                    <h1>Deskripsi</h1>
                    <p>Barista adalah Bagian yang memiliki tanggung jawab untuk membuat dan menyajikan minuman
                        sesuai pesanan dan standar yang sudah ditetapkan.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Tentang End -->

    <!-- Tugas Start -->
    <div class="faqs">
        <div class="container">
            <div class="content">
                <div class="text-content">
                    <h1>Deskripsi</h1>
                    <p>Barista adalah Bagian yang memiliki tanggung jawab untuk membuat dan menyajikan minuman
                        sesuai pesanan dan standar yang sudah ditetapkan.</p>
                </div>
                <img src="{{ asset('assets/img/hero-1.png') }}" alt="Barista" class="faq-img">
            </div>
        </div>
    </div>
    <!-- Tugas End -->

    <!-- Proses Sertifikasi Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-4">Proses Sertifikasi</h1>
                <p class="text-primary fs-5 mb-5">Alur Proses Sertifikasi</p>
            </div>
            <!-- Gambar dengan animasi fadeInUp -->
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <img src="{{ asset('assets/img/proses-sertifikasi.png') }}" alt="Proses Sertifikasi" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- Proses Sertifikasi End -->
@endsection
