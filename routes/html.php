<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HtmlTutorialController;

// Route::view('/tutorials/html/overview','')->name('html.overview');

Route::controller(HtmlTutorialController::class)->group(function () {
    Route::get('/tutorials/html/overview', 'index')->name('html.overview');
    Route::get('/tutorials/html/editors', 'editors')->name('html.editors');
    Route::get('/tutorials/html/element', 'element')->name('html.element');
    Route::get('/tutorials/html/page-structure', 'structure')->name('html.structure');
});



Route::get('/welcome', function () {
    return view('welcome');
});
