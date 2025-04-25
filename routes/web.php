<?php

use Illuminate\Support\Facades\Route;

// Web rute za Balkan Oglasi

Route::get('/', function () {
    return view('frontend.home');
});
