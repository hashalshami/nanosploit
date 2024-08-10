<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/tutorials/html/overview', function () {
    return view('tutorials.html.basic.overview');
})->name('html.overview');



Route::get('/welcome', function () {
    return view('welcome');
});
