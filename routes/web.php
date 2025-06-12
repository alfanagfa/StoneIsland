<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coll', function () {
    return view('coll');
});

Route::get('/men', function () {
    return view('men');
});

Route::get('/fleecewear', function () {
    return view('fleecewear');
});

Route::get('/shopnow', function () {
    return view('shopnow');
});

Route::get('/POLOS', function () {
    return view('POLOS');
});
