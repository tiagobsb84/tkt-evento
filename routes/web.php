<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EventController::class, 'index']);

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/products', function() {
    return view('products');
});

Route::get('/products}', function($id){
    return view('product', ['id' => $id]);
});