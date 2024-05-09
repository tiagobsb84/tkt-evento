<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);

//Routa para deshboard e garantir que esteja logado o usuário.
Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');

Route::get('/contact', function() {
    return view('contact');
});
