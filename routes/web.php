<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	$data = json_decode(file_get_contents(storage_path('data/data.json')), true);
	return view('pages.home', ['data' => $data]);
})->name('home');

Route::get('/about', function () {
	return view('pages.about');
})->name('about');

Route::get('/service', function () {
	return view('pages.service');
})->name('service');

Route::get('/menu', function () {
	$data = json_decode(file_get_contents(storage_path('data/data.json')), true);
	return view('pages.menu', ['data' => $data]);
})->name('menu');

Route::get('/reservation', function () {
	return view('pages.reservation');
})->name('reservation');

Route::get('/testimonial', function () {
	$data = json_decode(file_get_contents(storage_path('data/data.json')), true);
	return view('pages.testimonial', ['data' => $data]);
})->name('testimonial');

Route::get('/contact', function () {
	return view('pages.contact');
})->name('contact');