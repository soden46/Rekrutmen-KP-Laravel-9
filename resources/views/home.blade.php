<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rekrutmen Bento Kopi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Law Firm Website Template" name="keywords">
    <meta content="Law Firm Website Template" name="description">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Nav Bar Start -->
    <div class="nav-bar">
        <div class="container-fluid">

            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto">
                        <div class="logo">
                            <a href="i/">
                                <img src="assets/img/bgi.png" alt="Logo" width="" height="46">
                            </a>
                        </div>
                        <a href="/recruitment" class="nav-item nav-link active">Recruitment</a>
                        <a href="/newsgroup" class="nav-item nav-link">Berita</a>
                        <a href="service.html" class="nav-item nav-link">FAQ</a>
                        <a href="team.html" class="nav-item nav-link">Hubungi Kami</a>

                    </div>
                    <div class="ml-auto">
                        <a class="btn" href="/login">Masuk</a>
                        <a class="btn" href="{{route('register')}}">Daftar</a>
                    </div>

            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->

    <!-- Carousel Start -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('assets/img/bento1.jpeg')}}" alt="Carousel Image">
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
                <img src="{{asset('assets/img/menoewa.jpg')}}" alt="Carousel Image">
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

    <!-- About Start -->
    <!-- <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="section-header">
                    <h2>Learn About Us</h2>
                </div>
                <div class="about-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                    </p>
                </div>
            </div>
        </div>
    </div> -->
    <!-- About End -->


    <!-- FAQs Start -->
    <div class="faqs">
        <div class="container">
            <div class="section-header">
                <h2>DAFTAR POSISI PEKERJAAN BENTO KOPI</h2>
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
                    <h2>Dokumen Yang Harus Dilengkapi</h2>
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
                            <img src="assets/img/bentokopi.jpg" alt="bento kopi">
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
                            <img src="assets/img/kopinuri.jpg" alt="kopi nuri">
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
                            <img src="assets/img/menoewapng.png" alt="menoewa kopi">
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
                            <img src="assets/img/nuansajpg.jpg" alt="nuansa kopi">
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
                            <img src="assets/img/kopisini.jpg" alt="kopisini">
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


    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="footer-about">
                        <h2>About Us</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu lectus a leo tristique dictum nec non quam. Suspendisse convallis, tortor eu placerat rhoncus, lorem quam iaculis felis, sed eleifend lacus neque id eros. Integer convallis volutpat neque
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-8">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Services Areas</h2>
                                <a href="">Civil Law</a>
                                <a href="">Family Law</a>
                                <a href="">Business Law</a>
                                <a href="">Education Law</a>
                                <a href="">Immigration Law</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Useful Pages</h2>
                                <a href="">About Us</a>
                                <a href="">Practices</a>
                                <a href="">Attorneys</a>
                                <a href="">Case Studies</a>
                                <a href="">FAQs</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-contact">
                                <h2>Get In Touch</h2>
                                <p><i class="fa fa-map-marker-alt"></i><a href="https://goo.gl/maps/6edT9xCVWra5Q4bb7">Sentrum Space. Jl. S. Hartono Jl. Kaliurang Timur No.KM 10, Gondangan, Sardonoharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta</a></p>
                                <p><i class="fa fa-phone-alt"></i>+628</p>
                                <p><i class="fa fa-envelope"></i>info@bentokopi.com</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15814.442879205526!2d110.4018482!3d-7.7248477!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb93133ac1166d07c!2sSentrum%20Space!5e0!3m2!1sid!2sid!4v1671466824319!5m2!1sid!2sid" width="800" height="200" style="border:0;" allowfullscreen="false" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>
        <div class="container footer-menu">
            <div class="f-menu">
                <a href="">Terms of use</a>
                <a href="">Privacy policy</a>
                <a href="">Cookies</a>
                <a href="">Help</a>
                <a href="">FQAs</a>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/lib/isotope/isotope.pkgd.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>