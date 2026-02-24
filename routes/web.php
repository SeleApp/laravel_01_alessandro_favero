<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contacts', function () {
    return view('page1');
})->name('contacts');

Route::get('/about-us', function () {
    return view('page2');
})->name('about');

// Redirect legacy URLs verso le nuove pagine
Route::redirect('/pagina-1', '/contacts')->name('page1');
Route::redirect('/pagina-2', '/about-us')->name('page2');
