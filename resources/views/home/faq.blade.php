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
                                <a href="/">
                                    <img src="assets/img/logobgi.png" alt="Logo" width="" height="46">
                                </a>
                            </div>
                            <a href="recruitment" class="nav-item nav-link active">Recruitment</a>
                            <a href="event" class="nav-item nav-link">Bento Event</a>
                            <a href="faq" class="nav-item nav-link">FAQ</a>
                            <a href="contact" class="nav-item nav-link">Hubungi Kami</a>
                        </div>
                        <div class="ml-auto">
                            <a class="btn" href="{{route('login')}}">Masuk</a>
                            <a class="btn" href="{{route('register')}}">Daftar</a>
                        </div>

                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->
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
                                    <p><i class="fa fa-phone-alt"></i>+638</p>
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