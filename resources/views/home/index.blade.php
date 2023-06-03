@extends('layouts.home.master',[
'title' => 'HOME | Bento Group Indonesia',
'pageTitle' => 'HOME | Bento Group Indonesia',
])
@section('content')
<!-- Carousel Start -->
<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
        <li data-target="#carousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('assets/img/merr.jpg')}}" alt="Carousel Image">
            <div class="carousel-caption">
                <h1 class="animated fadeInLeft">Bento Group Indonesia</h1>
            </div>
        </div>

        <div class="carousel-item ">
            <img src="{{asset('assets/img/bkgodean.jpg')}}" alt="Carousel Image">
            <div class="carousel-caption">
                <h1 class="animated fadeInLeft">Bento Kopi</h1>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{asset('assets/img/NUansa2.jpg')}}" alt="Carousel Image">
            <div class="carousel-caption">
                <h1 class="animated fadeInLeft">NUansa Kopi</h1>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{asset('assets/img/Menoewa.jpg')}}" alt="Carousel Image">
            <div class="carousel-caption">
                <h1 class="animated fadeInLeft">Menoewa Kopi</h1>
            </div>
        </div>
    </div>

    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Carousel End -->

<!-- FAQs Start -->
<div class="faqs">
    <div class="container">
        <div class="section-header">
            <h2>Daftar Posisi Pekerjaan</h2>
        </div>
        <div id="accordion">
            <div class="card">
                <div class="card-header">
                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                        <span>1</span> Barista
                    </a>
                </div>
                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                    <div class="card-body">
                        <p><b>Deskripsi</b></p>
                        <p>Barista adalah Bagian yang memiliki tanggung jawab untuk membuat dan menyajikan minuman sesuai pesanan dan standar yang sudah ditetapkan.</p>
                        <p><b>Tugas Barista</b></p>
                        <p>Berpenampilan baik, Pengetahuan dibagian kitchen, Sehat jasmani dan rohani, Kemampuan umum, Berusia maksimal 25 tahun.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                        <span>2</span> Cook
                    </a>
                </div>
                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        <p><b>Deskripsi</b></p>
                        <p>Cook adalah Bagian yang memiliki tanggung jawab untuk membuat dan menyajikan minuman sesuai pesanan dan standar yang sudah ditetapkan.</p>
                        <p><b>Tugas Cook</b></p>
                        <p>Berpenampilan baik, Pengetahuan dibagian kitchen, Sehat jasmani dan rohani, Kemampuan umum, Berusia maksimal 25 tahun.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#collapseThree">
                        <span>3</span> Kebersihan
                    </a>
                </div>
                <div id="collapseThree" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        <p><b>Deskripsi</b></p>
                        <p>Kebersihan/public area adalah bagian yang memiliki tanggung jawab terhadap kebersihan dan kerapian cafe.</p>
                        <p><b>Tugas Kebersihan</b></p>
                        <p>Bertanggung Jawab terhadap kebersihan cafe, Menjaga dan memelihara taman dan tanaman di cafe, Mengontrol kebersihan cafe setiap saat.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#collapseFour">
                        <span>4</span> Kasir
                    </a>
                </div>
                <div id="collapseFour" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        <p><b>Deskripsi</b></p>
                        <p>Kasir adalah Bagian yang bertugas untuk melayani pelanggan dan menginput transaksi pesanan.</p>
                        <p><b>Tugas Kasir</b></p>
                        <p>Melayani tamu atau pelanggan kafe yang datang dengan 5s, Melakukan pencatatan semua transaksi, Memberikan informasi mengenai produk kepada konsumen.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQs End -->

<!-- Newsletter Start -->
<div class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="section-header">
                <h2>
                    <h3>Dokumen Yang Harus Dilengkapi</h3>
                </h2>
            </div>
            <div class="about-text">
                <p><b>Sebelum melakukan pendaftaran silahkan menyiapkan dokumen administrasi sebagai berikut :</b></p>
                <p>1. Pas Foto ukuran 4 x 6 (berwarna) (Photo colored);</p>
                <p>2. Scan KTP Asli (ID Card);</p>
                <p>3. Scan Ijazah / Surat Keterangan Lulus (SKL) (Graduation Certificate);</p>
                <p>4. Scan Transkrip nilai (Transcript);</p>
                <p>5. Scan Kartu Keluarga (Family Card);</p>
                <p>6. CV (Curriculum Vitae);</p>
                <p>7. Scan Surat Keterangan Berbadan Sehat dari Rumah Sakit/Puskesmas/Klinik (pemeriksaan per September 2022) (Certificate of Health);</p>
                <p>8. Scan Surat Referensi Pengalaman Bekerja Asli (apabila ada) (Reference Letter);</p>
                <p>9. Scan Sertifikat Kompetensi/Pelatihan (apabila ada) (Competence Certificate).</p>
                <p>Keterangan :</p>
                <p>Harap menggabungkan dokumen sesuai dengan urutan. Dokumen yang diunggah tidak sesuai urutan akan berpengaruh pada proses seleksi administrasi.</p>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter End -->

<!-- Testimonial Start -->
<div class="testimonial">
    <div class="container">
        <div class="section-header">
            <h2>Daftar Caffe</h2>
        </div>
        <div class="owl-carousel testimonials-carousel">
            <div class="testimonial-item">
                <i class="fa fa-quote-right"></i>
                <div class="row align-items-center">
                    <div class="col-3">
                        <img src="assets/img/bentokopi.jpg" alt="">
                    </div>
                    <div class="col-9">
                        <h2>Bento Kopi</h2>
                        <!-- <p>Profession</p> -->
                    </div>
                    <!-- <div class="col-12">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                            </p>
                        </div> -->
                </div>
            </div>
            <div class="testimonial-item">
                <i class="fa fa-quote-right"></i>
                <div class="row align-items-center">
                    <div class="col-3">
                        <img src="assets/img/kopinuri.jpg" alt="">
                    </div>
                    <div class="col-9">
                        <h2>Kopi Nuri</h2>
                        <!-- <p>Profession</p> -->
                    </div>
                    <!-- <div class="col-12">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                            </p>
                        </div> -->
                </div>
            </div>
            <div class="testimonial-item">
                <i class="fa fa-quote-right"></i>
                <div class="row align-items-center">
                    <div class="col-3">
                        <img src="assets/img/menoewapng.png" alt="">
                    </div>
                    <div class="col-9">
                        <h2>Monoewa kopi</h2>
                        <!-- <p>Profession</p> -->
                    </div>
                    <!-- <div class="col-12">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                            </p>
                        </div> -->
                </div>
            </div>
            <div class="testimonial-item">
                <i class="fa fa-quote-right"></i>
                <div class="row align-items-center">
                    <div class="col-3">
                        <img src="assets/img/nuansajpg.jpg" alt="">
                    </div>
                    <div class="col-9">
                        <h2>NUansa</h2>
                        <!-- <p>Profession</p> -->
                    </div>
                    <!-- <div class="col-12">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                            </p>
                        </div> -->
                </div>
            </div>
            <div class="testimonial-item">
                <i class="fa fa-quote-right"></i>
                <div class="row align-items-center">
                    <div class="col-3">
                        <img src="assets/img/kopisini.jpg" alt="">
                    </div>
                    <div class="col-9">
                        <h2>Kopi Sini</h2>
                        <!-- <p>Profession</p> -->
                    </div>
                    <!-- <div class="col-12">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                            </p>
                        </div> -->
                </div>
            </div>
            <div class="testimonial-item">
                <i class="fa fa-quote-right"></i>
                <div class="row align-items-center">
                    <div class="col-3">
                        <img src="assets/img/easy.png" alt="">
                    </div>
                    <div class="col-9">
                        <h2>Easy Breezy</h2>
                    </div>

                </div>
            </div>
            <div class="testimonial-item">
                <i class="fa fa-quote-right"></i>
                <div class="row align-items-center">
                    <div class="col-3">
                        <img src="assets/img/njati.png" alt="">
                    </div>
                    <div class="col-9">
                        <h2>nJati Kopi</h2>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <i class="fa fa-quote-right"></i>
                <div class="row align-items-center">
                    <div class="col-3">
                        <img src="assets/img/stako2.png" alt="">
                    </div>
                    <div class="col-9">
                        <h2>stako</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Testimonial End -->
@endsection