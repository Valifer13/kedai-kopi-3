@extends('layout')

@section('title', 'About')

@section('content')
<x-page-header title="About" />

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Tentang Kami</h4>
            <h1 class="display-4">Menyajikan Sejak 2008</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 py-0 py-lg-5">
                <h1 class="mb-3">Cerita Kami</h1>
                <h6 class="mb-3">Perjalanan kami dimulai di tahun 2008 dengan misi sederhana: menghadirkan pengalaman
                    kopi yang berbeda. Berawal dari rasa penasaran akan berbagai jenis kopi di dunia, kami mulai
                    mengumpulkan biji kopi dari berbagai daerah, baik dari Indonesia maupun mancanegara, untuk
                    memperkenalkan cita rasa yang beragam kepada para pecinta kopi.</h6>
                <p class="mb-3">Kami ingin menciptakan ruang di mana kopi bisa dinikmati bukan hanya sebagai minuman,
                    tapi sebagai pengalaman. Di Kedai Kopi, setiap sajian dibuat dengan cinta oleh barista kami yang
                    berdedikasi, dan setiap cangkir yang Anda nikmati adalah hasil dari proses pemilihan dan penyeduhan
                    yang teliti. Dari awal yang sederhana hingga menjadi tempat favorit untuk berbagi cerita, kami
                    bangga bisa terus menemani Anda menikmati kopi dari seluruh dunia dalam suasana yang hangat dan
                    akrab.</p>
                <a href="" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Pelajari Lebih Lanjut</a>
            </div>
            <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/coffee.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4 py-0 py-lg-5">
                <h1 class="mb-3">Visi Kami</h1>
                <p>Menjadi tempat favorit bagi masyarakat untuk menikmati kopi berkualitas, suasana nyaman, dan
                    pelayanan terbaik.</p>
                <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Kopi berkualitas</h5>
                <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Suasana Nyaman</h5>
                <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Pelayanan Terbaik</h5>
                <a href="" class="btn btn-primary font-weight-bold py-2 px-4 mt-2">Pelajari lebih lanjut</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
@endsection