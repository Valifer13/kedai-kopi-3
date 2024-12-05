@extends('layout')

@section('title', 'Reservation')

@section('content')
<x-page-header title="Reservation" />

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
                        <p class="text-white">Dapatkan diskon untuk reservasi secara online dan nikmati secangkir kopimu
                            dengan teman atau keluargamu!</p>
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
                                <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Pesan
                                    Sekarang</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Reservation End -->
@endsection