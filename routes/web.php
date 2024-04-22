<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/products', function() {
    return view('products');
});

Route::get('/products}', function($id){
    return view('product', ['id' => $id]);
});