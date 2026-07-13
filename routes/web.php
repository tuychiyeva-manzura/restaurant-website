<?php

use Illuminate\Support\Facades\Route;

// Bosh sahifa
Route::get('/', function () {
    return view('home');
})->name('home');

// Home sahifasi (bir xil route nomi bo'lmasligi uchun)
Route::get('/home', function () {
    return view('home');
})->name('home.index');

// Biz haqimizda
Route::get('/about', function () {
    return view('about');
})->name('about');

// Menyu
Route::get('/menu', function () {
    return view('menu');
})->name('menu');

// Aloqa
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Bron qilish
Route::get('/reservation', function () {
    return view('reservation');
})->name('reservation');