@extends('layout')

@section('title', 'Service')

@section('content')
<x-page-header title="Service" />

<!-- Service Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Layanan Kami</h4>
            <h1 class="display-4">Biji Segar dan Organik</h1>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="img/service-1.jpg" alt="">
                    </div>
                    <div class="col-sm-7">
                        <h4><i class="fa fa-truck service-icon"></i>Pengiriman Pesanan</h4>
                        <p class="m-0">Dapatkan minuman kopi favorit atau biji kopi pilihan Anda dengan layanan
                            pengiriman kami yang cepat dan terpercaya. Pesanan Anda akan tiba segar dan tepat waktu!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="img/service-2.jpg" alt="">
                    </div>
                    <div class="col-sm-7">
                        <h4><i class="fa fa-coffee service-icon"></i>Biji Kopi Segar</h4>
                        <p class="m-0">Kami menghadirkan biji kopi yang baru dipanen dan diproses, langsung dari
                            perkebunan terbaik. Kesegaran yang terjamin untuk Anda nikmati kapan saja.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="img/service-3.jpg" alt="">
                    </div>
                    <div class="col-sm-7">
                        <h4><i class="fa fa-award service-icon"></i>Kopi Kualitas Terbaik</h4>
                        <p class="m-0">Setiap cangkir yang kami sajikan diracik dengan cinta menggunakan bahan-bahan
                            premium, menghasilkan rasa kopi yang kaya dan memuaskan.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="img/service-4.jpg" alt="">
                    </div>
                    <div class="col-sm-7">
                        <h4><i class="fa fa-table service-icon"></i>Booking Meja Online</h4>
                        <p class="m-0">Ingin menikmati suasana kedai kopi kami? Pesan meja favorit Anda dengan mudah
                            melalui fitur booking online di website kami. Bebas antre, bebas ribet!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
@endsection