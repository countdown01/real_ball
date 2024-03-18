<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/relationship', function () {
    return view('relationship');
})->name('relationship');

Route::get('/ipserver', function () {
    return view('ipserver');
})->name('ipserver');

Route::get('/conctus', function () {
    return view('conctus');
})->name('conctus');

Route::get('/login', function () {
    return view('loginAndRegister');
})->name('login');
