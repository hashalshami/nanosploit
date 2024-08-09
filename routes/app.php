<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');



Route::get('/welcome', function () {
    return view('welcome');
});
