@extends('layout')

@section('title', 'Menu')

@section('content')
<x-page-header title="Menu" />

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
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu/coffee/{{ $subset[0]['image'] }}"
                            alt="">
                        <h5 class="menu-price">{{ $subset[0]['price'] }}</h5>
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>{{ $subset[0]['name'] }}</h4>
                        <p class="m-0">{{ $subset[0]['description'] }}</p>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu/coffee/{{ $subset[1]['image'] }}"
                            alt="">
                        <h5 class="menu-price">{{ $subset[1]['price'] }}</h5>
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>{{ $subset[1]['name'] }}</h4>
                        <p class="m-0">{{ $subset[1]['description'] }}</p>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu/coffee/{{ $subset[2]['image'] }}"
                            alt="">
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
                        <img class="w-100 rounded-circle mb-3 mb-sm-0"
                            src="img/menu/non-coffee/{{ $subset[0]['image'] }}" alt="">
                        <h5 class="menu-price">{{ $subset[0]['price'] }}</h5>
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>{{ $subset[0]['name'] }}</h4>
                        <p class="m-0">{{ $subset[0]['description'] }}</p>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0"
                            src="img/menu/non-coffee/{{ $subset[1]['image'] }}" alt="">
                        <h5 class="menu-price">{{ $subset[1]['price'] }}</h5>
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>{{ $subset[1]['name'] }}</h4>
                        <p class="m-0">{{ $subset[1]['description'] }}</p>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0"
                            src="img/menu/non-coffee/{{ $subset[2]['image'] }}" alt="">
                        <h5 class="menu-price">{{ $subset[2]['price'] }}</h5>
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>{{ $subset[2]['name'] }}</h4>
                        <p class="m-0">{{ $subset[2]['description'] }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h1 class="mb-5">Light Dish</h1>
                @php
                $subset = array_slice($data['light_dish'], 0, 3);
                @endphp
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu/light-dish/{{ $subset[0]['image'] }}"
                            alt="">
                        <h5 class="menu-price">{{ $subset[0]['price'] }}</h5>
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>{{ $subset[0]['name'] }}</h4>
                        <p class="m-0">{{ $subset[0]['description'] }}</p>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu/light-dish/{{ $subset[1]['image'] }}"
                            alt="">
                        <h5 class="menu-price">{{ $subset[1]['price'] }}</h5>
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>{{ $subset[1]['name'] }}</h4>
                        <p class="m-0">{{ $subset[1]['description'] }}</p>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu/light-dish/{{ $subset[2]['image'] }}"
                            alt="">
                        <h5 class="menu-price">{{ $subset[2]['price'] }}</h5>
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>{{ $subset[2]['name'] }}</h4>
                        <p class="m-0">{{ $subset[2]['description'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h1 class="mb-5">Dessert</h1>
                @php
                $subset = array_slice($data['dessert'], 0, 3);
                @endphp
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0"
                            src="img/menu/dessert/{{ $subset[0]['image'] }}" alt="">
                        <h5 class="menu-price">{{ $subset[0]['price'] }}</h5>
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>{{ $subset[0]['name'] }}</h4>
                        <p class="m-0">{{ $subset[0]['description'] }}</p>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0"
                            src="img/menu/dessert/{{ $subset[1]['image'] }}" alt="">
                        <h5 class="menu-price">{{ $subset[1]['price'] }}</h5>
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>{{ $subset[1]['name'] }}</h4>
                        <p class="m-0">{{ $subset[1]['description'] }}</p>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0"
                            src="img/menu/dessert/{{ $subset[2]['image'] }}" alt="">
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
@endsection