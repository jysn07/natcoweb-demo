<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::get('/aboutUs', function () {
    return view('aboutUs');
})->name('aboutUs');

Route::get('/ourFacilities', function () {
    return view('ourFacilities');
})->name('ourFacilities');

Route::get('/natcoProducts', function () {
    return view('natcoProducts');
})->name('natcoProducts');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');