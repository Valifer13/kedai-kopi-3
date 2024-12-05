@extends('layout')

@section('title', 'contact')

@section('content')
<x-page-header title="contact" />

<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contact Us</h4>
            <h1 class="display-4">Jangan Ragu untuk Menghubungi</h1>
        </div>
        <div class="row px-3 pb-2">
            <div class="col-sm-4 text-center mb-3">
                <i class="fa fa-2x fa-map-marker-alt mb-3 text-primary"></i>
                <h4 class="font-weight-bold">Alamat</h4>
                <p>Jl. Ratna No 68 G, Tonja, Denpasar Utara, Denpasar - Bali . 80239</p>
            </div>
            <div class="col-sm-4 text-center mb-3">
                <i class="fa fa-2x fa-phone-alt mb-3 text-primary"></i>
                <h4 class="font-weight-bold">Nomor</h4>
                <p>(+62) 831 1958 7745</p>
            </div>
            <div class="col-sm-4 text-center mb-3">
                <i class="far fa-2x fa-envelope mb-3 text-primary"></i>
                <h4 class="font-weight-bold">Email</h4>
                <p>info@redsystem.id</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 pb-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.1128213726633!2d115.2484386268654!3d-8.680820188423663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23fae714de88b%3A0x7216cd57648a4f83!2sRED%20SYSTEM%20BALI%20WEBSITE%20DEVELOPER!5e0!3m2!1sid!2sid!4v1733376970393!5m2!1sid!2sid"
                    width="100%" height="443" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6 pb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control bg-transparent p-4" id="name" placeholder="Nama Anda"
                                required="required" data-validation-required-message="Mohon masukan nama Anda" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control bg-transparent p-4" id="email"
                                placeholder="Email Anda" required="required"
                                data-validation-required-message="Mohon masukan email Anda" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control bg-transparent p-4" id="subject" placeholder="Subjek"
                                required="required" data-validation-required-message="Mohon masukan subjek" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control bg-transparent py-3 px-4" rows="5" id="message"
                                placeholder="Pesan" required="required"
                                data-validation-required-message="Mohon masukan pesan Anda"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit"
                                id="sendMessageButton">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection