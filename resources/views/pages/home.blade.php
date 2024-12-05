@extends('layout')

@section('title', 'Home')

@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h2 class="text-primary font-weight-medium m-0" style="font-family: 'Dancing Script', cursive;">Kami
                        Telah Menyajikan</h2>
                    <h1 class="display-1 text-white m-0">KOPI</h1>
                    <h2 class="text-white m-0">Semenjak 2008</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h2 class="text-primary font-weight-medium m-0" style="font-family: 'Dancing Script', cursive;">Kami
                        Menyajikan Kopi</h2>
                    <h1 class="display-1 text-white m-0">NOMOR <span style="color: #FFD700;">#1</span></h1>
                    <h2 class="text-white m-0">di Dunia</h2>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
<!-- Carousel End -->

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
                        <p class="m-0">Dapatkan minuman kopi favorit atau biji kopi pilihan Anda dengan layanan pengiriman kami yang cepat dan terpercaya. Pesanan Anda akan tiba segar dan tepat waktu!</p>
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
                        <p class="m-0">Kami menghadirkan biji kopi yang baru dipanen dan diproses, langsung dari perkebunan terbaik. Kesegaran yang terjamin untuk Anda nikmati kapan saja.</p>
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
                        <p class="m-0">Setiap cangkir yang kami sajikan diracik dengan cinta menggunakan bahan-bahan premium, menghasilkan rasa kopi yang kaya dan memuaskan.</p>
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
                        <p class="m-0">Ingin menikmati suasana kedai kopi kami? Pesan meja favorit Anda dengan mudah melalui fitur booking online di website kami. Bebas antre, bebas ribet!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Offer Start -->
<div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom">
    <div class="container py-5">
        <h1 class="display-3 text-primary mt-3">Diskon 50%</h1>
        <h1 class="text-white mb-3">Penawaran Khusus Hari Minggu</h1>
        <h4 class="text-white font-weight-normal mb-4 pb-3">Hanya untuk hari Minggu mulai 1 Januari hingga 30 Januari 2045</h4>
        <form class="form-inline justify-content-center mb-4">
            <div class="input-group">
                <input type="text" class="form-control p-4" placeholder="Email Anda" style="height: 60px;">
                <div class="input-group-append">
                    <button class="btn btn-primary font-weight-bold px-4" type="submit">Daftar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Offer End -->


<!-- Menu Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menu & Harga</h4>
            <h1 class="display-4">Harga yang Kompetitif</h1>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h1 class="mb-5">Coffee</h1>
                @php
                    $subset = array_slice($data['coffee'], 0, 3);
                @endphp
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu/coffee/{{ $subset[0]['image'] }}" alt="">
                        <h5 class="menu-price">{{ $subset[0]['price'] }}</h5>
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>{{ $subset[0]['name'] }}</h4>
                        <p class="m-0">{{ $subset[0]['description'] }}</p>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu/coffee/{{ $subset[1]['image'] }}" alt="">
                        <h5 class="menu-price">{{ $subset[1]['price'] }}</h5>
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>{{ $subset[1]['name'] }}</h4>
                        <p class="m-0">{{ $subset[1]['description'] }}</p>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu/coffee/{{ $subset[2]['image'] }}" alt="">
                        <h5 class="menu-price">{{ $subset[2]['price'] }}</h5>
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>{{ $subset[2]['name'] }}</h4>
                        <p class="m-0">{{ $subset[2]['description'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h1 class="mb-5">Non-Coffee</h1>
                @php
                    $subset = array_slice($data['non_coffee'], 0, 3);
                @endphp
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu/non-coffee/{{ $subset[0]['image'] }}" alt="">
                        <h5 class="menu-price">{{ $subset[0]['price'] }}</h5>
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>{{ $subset[0]['name'] }}</h4>
                        <p class="m-0">{{ $subset[0]['description'] }}</p>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu/non-coffee/{{ $subset[1]['image'] }}" alt="">
                        <h5 class="menu-price">{{ $subset[1]['price'] }}</h5>
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>{{ $subset[1]['name'] }}</h4>
                        <p class="m-0">{{ $subset[1]['description'] }}</p>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu/non-coffee/{{ $subset[2]['image'] }}" alt="">
                        <h5 class="menu-price">{{ $subset[2]['price'] }}</h5>
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>{{ $subset[2]['name'] }}</h4>
                        <p class="m-0">{{ $subset[2]['description'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Menu End -->


<!-- Reservation Start -->
<div class="container-fluid my-5">
    <div class="container">
        <div class="reservation position-relative overlay-top overlay-bottom">
            <div class="row align-items-center">
                <div class="col-lg-6 my-5 my-lg-0">
                    <div class="p-5">
                        <div class="mb-4">
                            <h1 class="display-3 text-primary">Diskon 30%</h1>
                            <h1 class="text-white">Untuk Reservasi Online</h1>
                        </div>
                        <p class="text-white">Dapatkan diskon untuk reservasi secara online dan nikmati secangkir kopimu dengan teman atau keluargamu!</p>
                        <ul class="list-inline text-white m-0">
                            <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Kopi Berkualitas</li>
                            <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Suasana Nyaman</li>
                            <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Pelayanan Terbaik</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-center p-5" style="background: rgba(51, 33, 29, .8);">
                        <h1 class="text-white mb-4 mt-5">Pesan Meja Anda</h1>
                        <form class="mb-5">
                            <div class="form-group">
                                <input type="text" class="form-control bg-transparent border-primary p-4"
                                    placeholder="Nama Anda" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control bg-transparent border-primary p-4"
                                    placeholder="Email Anda" required="required" />
                            </div>
                            <div class="form-group">
                                <div class="date" id="date" data-target-input="nearest">
                                    <input type="text"
                                        class="form-control bg-transparent border-primary p-4 datetimepicker-input"
                                        placeholder="Tanggal" data-target="#date" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="time" id="time" data-target-input="nearest">
                                    <input type="text"
                                        class="form-control bg-transparent border-primary p-4 datetimepicker-input"
                                        placeholder="Waktu" data-target="#time" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="form-group">
                                <select class="custom-select bg-transparent border-primary px-4" style="height: 49px;">
                                    <option selected>Jumlah Orang</option>
                                    <option value="1">1 Orang</option>
                                    <option value="2">2 Orang</option>
                                    <option value="3">3 Orang</option>
                                    <option value="3">4 Orang</option>
                                </select>
                            </div>

                            <div>
                                <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Pesan Sekarang</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Reservation End -->


<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h4>
            <h1 class="display-4">Klien Kami Mengatakan</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
        @php
            $i = 0;
        @endphp
        @foreach ($data['testimonials'] as $item)
            @php
                $i++;
            @endphp
            <div class="testimonial-item">
                <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid" src="img/testimonial-{{ $i }}.jpg" alt="">
                    <div class="ml-3">
                        <h4>{{ $item['name'] }}</h4>
                        <i>Klien</i>
                    </div>
                </div>
                <p class="m-0">{{ $item['message'] }}</p>
            </div>
        @endforeach
        </div>
    </div>
</div>
<!-- Testimonial End -->
@endsection