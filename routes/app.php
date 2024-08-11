<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HtmlTutorialController;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::controller(HtmlTutorialController::class)->group(function () {
    Route::get('/tutorials/html/overview', 'index')->name('html.overview');
});



Route::get('/welcome', function () {
    return view('welcome');
});
