<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Hai, Saya Feri Ardiansyah siap belajar Laravel 11";
});

Route::get('/profil', function () {
    return view('profil');
});
