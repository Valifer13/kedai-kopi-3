@extends('layout')

@section('title', 'Testimonial')

@section('content')
<x-page-header title="Testimonial" />

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