@extends('layouts.home.master',[
'title' => 'FAQs | Bento Group Indonesia',
'pageTitle' => 'FAQs | Bento Group Indonesia',
])
@section('content') 
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
@endsection