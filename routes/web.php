<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = 'Tiago';

    return view('welcome', ['nome'=>$nome]);
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/products', function() {
    return view('products');
});