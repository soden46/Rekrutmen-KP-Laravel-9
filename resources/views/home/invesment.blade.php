    <!DOCTYPE html>
@extends('layouts.home.master',[
'title' => 'Invesment | Bento Group Indonesia',
'pageTitle' => 'Invesment | Bento Group Indonesia',
])
@section('content')
        <div class="section-header d-flex justify-content-center">
            <h2 class="font_0 d-flex" style="line-height:0.9em; font-size:60px;"><span class="color_15"><span
                        style="font-family:lulo-clean-w01-one-bold,sans-serif;">Membangun</span></span><br>
                <span style="color:#556446;"><span
                        style="font-family:lulo-clean-w01-one-bold,sans-serif;">Bangsa</span></span><br>
                <span class="color_15"><span
                        style="font-family:lulo-clean-w01-one-bold,sans-serif;">dengan</span></span><br>
                <span style="color:#FAB43C;"><span
                        style="font-family:lulo-clean-w01-one-bold,sans-serif;">Karya</span></span></h2>
        </div>

        <!-- Protofolio -->
        <div class="portfolio">
            <div class="container">
                <div class="section-header">
                    <h2>Invesment</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".first" class="filter">Food & Beverage</li>
                            <li data-filter=".second">Properti</li>
                            <li data-filter=".third">Budidaya</li>
                            <li data-filter=".four">Kecantikan</li>
                            <li data-filter=".five">Digital Marketing</li>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container" style="position: relative; height: 122px;">
                    <div class="col-lg-2 col-md-3 col-sm-3 portfolio-item first"
                        style="position: absolute; left: 0px; top: 0px;">
                        <div class="portfolio-wrap">
                            <img src="assets/img/bentokopi.jpg" alt="Portfolio Image" >
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 portfolio-item first"
                        style="position: absolute; left: 0px; top: 122px;">
                        <div class="portfolio-wrap">
                            <img src="assets/img/invesmen/eplus.jpg" alt="Portfolio Image">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 portfolio-item first"
                        style="position: absolute; left: 0px; top: 122px;">
                        <div class="portfolio-wrap">
                            <img src="assets/img/invesmen/relasi.jpg" alt="Portfolio Image">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 portfolio-item first"
                        style="position: absolute; left: 0px; top: 122px;">
                        <div class="portfolio-wrap">
                            <img src="assets/img/invesmen/ruminate.jpg" alt="Portfolio Image">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 portfolio-item first"
                        style="position: absolute; left: 0px; top: 122px;">
                        <div class="portfolio-wrap">
                            <img src="assets/img/invesmen/carney.jpg" alt="Portfolio Image">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 portfolio-item first"
                        style="position: absolute; left: 0px; top: 122px;">
                        <div class="portfolio-wrap">
                            <img src="assets/img/invesmen/kopinuri.jpg" alt="Portfolio Image">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 portfolio-item first"
                        style="position: absolute; left: 0px; top: 122px;">
                        <div class="portfolio-wrap">
                            <img src="assets/img/invesmen/kopisini.jpg" alt="Portfolio Image">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 portfolio-item first"
                        style="position: absolute; left: 0px; top: 122px;">
                        <div class="portfolio-wrap">
                            <img src="assets/img/invesmen/manhattan.jpg" alt="Portfolio Image">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 portfolio-item first"
                        style="position: absolute; left: 0px; top: 122px;">
                        <div class="portfolio-wrap">
                            <img src="assets/img/invesmen/seisapi.jpg" alt="Portfolio Image">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 portfolio-item first"
                        style="position: absolute; left: 0px; top: 122px;">
                        <div class="portfolio-wrap">
                            <img src="assets/img/invesmen/sopongiro.jpg" alt="Portfolio Image">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 portfolio-item first"
                        style="position: absolute; left: 0px; top: 122px;">
                        <div class="portfolio-wrap">
                            <img src="assets/img/invesmen/nilu.jpg" alt="Portfolio Image">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 portfolio-item first"
                        style="position: absolute; left: 0px; top: 122px;">
                        <div class="portfolio-wrap">
                            <img src="assets/img/stako2.png" alt="Portfolio Image">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 portfolio-item second"
                        style="position: absolute; left: 320px; top: 122px;">
                        <div class="portfolio-wrap">
                            <img src="assets/img/invesmen/bento-paradise.jpg" alt="Portfolio Image">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 portfolio-item second"
                        style="position: absolute; left: 122px; top: 0px;">
                        <div class="portfolio-wrap">
                            <img src="assets/img/invesmen/bento-karya.jpg" alt="Portfolio Image">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 portfolio-item third"
                        style="position: absolute; left: 122px; top: 0px;">
                        <div class="portfolio-wrap">
                            <img src="assets/img/invesmen/vanema.jpg" alt="Portfolio Image">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 portfolio-item five"
                        style="position: absolute; left: 640px; top: 122px;">
                        <div class="portfolio-wrap">
                            <img src="assets/img/invesmen/peta-creative.jpg" alt="Portfolio Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="timeline">
            <div class="container">
                <div class="section-header">
                    <h2>Journey</h2>
                </div>
                <div class="timeline-start">
                    <div class="timeline-container left">
                        <div class="timeline-content">
                            <h2><span>2012</span>BERAWAL DARI
                                BENTO KOPI</h2>
                            <p>
                                Berdiri sejak awal tahun 2012 diawali dengan merintis Bento Kopi. Hingga saat ini, kami
                                berkembang menjadi group usaha yang menaungi beberapa brand meliputi Food & Beverage,
                                Properti, Budidaya, Kecantikan, dan Digital Marketing Agency.
                            </p>
                        </div>
                    </div>
                    <div class="timeline-container right">
                        <div class="timeline-content">
                            <h2><span>2019</span>TELAH BERJALAN
                                SELAMA 9 TAHUN</h2>
                            <p>
                                Selama 9 tahun perjalanan kami, Bento Group telah berkembang menjadi perusahaan yang
                                siap bersaing dalam skala Nasional.
                            </p>
                        </div>
                    </div>
                    <div class="timeline-container left">
                        <div class="timeline-content">
                            <h2><span>2020</span>MENUJU PERUSAHAAN
                                SKALA NASIONAL</h2>
                            <p>
                                Kepercayaan dari customer dan para investor yang bekerja sama dengan kami menjadi modal
                                utama Bento Group untuk memperkenalkan diri dari perusahaan UMKM Lokal menuju Nasional.
                            </p>
                        </div>
                    </div>
                    <div class="timeline-container right">
                        <div class="timeline-content">
                            <p>Bento Group fokus berkolaborasi dengan para investor untuk mengeksplorasi ide,
                                perencanaan, dan pengelolaan bisnis yang efektif dan menguntungkan, sehingga Bento Group
                                menjadi perusahaan:
                            </p>

                        </div>

                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-text">
                                    <h2>MITRA
                                        TERPERCAYA
                                        INVESTOR</h2>
                                    <p>Menjadi perusahaan yang menjadi pilihan terbaik untuk berinvestasi</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-text">
                                    <h2>INOVATIF
                                        DAN
                                        KOLABORATIF</h2>
                                    <p>Mengutamakan terobosan dan inovasi dalam ide dan pengelolaan bisnis</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-text">
                                    <h2>KONSISTEN
                                        DAN
                                        BERINTEGRITAS</h2>
                                    <p>Menyajikan pengalaman terbaik baik untuk customer maupun stakeholder</p>
                                </div>
                            </div>
                        </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 py-5">
              <div id="owl-demo" class="owl-carousel owl-theme">
                  <div class="item"><img width="240" src="/assets/img/bgi.png" alt="The Last of us"></div>
                  <div class="item"><img width="240" src="/assets/img/bento1.jpeg" alt="GTA V"></div>
                  <div class="item"><img src="assets/fullimage3.jpg" alt="Mirror Edge"></div>
 
                </div>  
            </div>
            <div class="col-md-8 py-5">
                
                <iframe width="100%" height="210" src="https://www.youtube.com/embed/LWbHXXcF3bo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
            </div>
        </div>
        <div class="section-header">
            <h3 class="font_0 " ><span class="color_15"><span
                        style="font-family:lulo-clean-w01-one-bold,sans-serif;">UNTUK MENJADI PERUSAHAAN</span></span></h3>
                <h3><span style="color:#556446;"><span
                        style="font-family:lulo-clean-w01-one-bold,sans-serif;">BERSKALA NASIONAL,</span></span></h3>
                <h3><span class="color_15"><span
                        style="font-family:lulo-clean-w01-one-bold,sans-serif;">BENTO GROUP MEMBUKA KESEMPATAN</span></span></h3>
                        <h3><span class="color_15"><span
                        style="font-family:lulo-clean-w01-one-bold,sans-serif;">BAGI ANDA UNTUK</span></span></h3>
                <h3><span style="color:#FAB43C;"><span
                        style="font-family:lulo-clean-w01-one-bold,sans-serif;">BERGABUNG</span></span></h3>
                        <h3><span class="color_15"><span
                        style="font-family:lulo-clean-w01-one-bold,sans-serif;">MENJADI BAGIAN DARI</span></span></h3>
                        <h3><span style="color:#FAB43C;"><span
                        style="font-family:lulo-clean-w01-one-bold,sans-serif;">KISAH SUKSES</span></span></h3>
                        <h3><span class="color_15"><span
                        style="font-family:lulo-clean-w01-one-bold,sans-serif;">BENTO GROUP.</span></span></h3>
        </div> 
        <div>
           <p><span style="font-family:lulo-clean-w01-one-bold,sans-serif;">Kami memahami sebuah perjalanan perlu diawali dengan kepercayaan. Untuk itu, apabila Anda menginginkan informasi lebih lanjut mengenai kemitraan Bento Group, Anda dapat menghubungi kami.</span></p> 
                   <a class="icons-default" href="https://wa.me/+6281390784466" target="_blank"><i class="social-icons social-icon fa fa-whatsapp fa-4x"
                    id="social-icons-whatsapp"></i></a>
                    <a class="icons-default" href="mailto:bentogroupinvestment@gmail.com?subject=Kemitraan Bento Group" target="_blank"><i class="social-icons social-icon fas fa-envelope fa-4x"
                    id="social-icons-mail"></i></a>
                    <p><span style="font-family:lulo-clean-w01-one-bold,sans-serif;">
Atau izinkan kami yang menghubungi Anda.</span></p> 
<a class="icons-default" href="mailto:bentogroupinvestment@gmail.com?subject=Kemitraan Bento Group" target="_blank"><i class="social-icons social-icon fas fa-phone fa-4x"
                    id="social-icons-phone"></i></a>
        </div>
        </div>
        </div>
    <!-- Template Javascript -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script>
            $(document).ready(function() {
 
            $("#owl-demo").owlCarousel({
            autoplay: true,
            autoplay:3000,
 
            navigation : false, // Show next and prev buttons
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true,
            items:1,
 
  });
 
});
        </script>
@endsection