<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('about', [HomeController::class, 'about']);
Route::get('contact', [HomeController::class, 'contact']);
Route::post('contact', [HomeController::class, 'store']);
Route::get('contactList', [HomeController::class, 'contactList']);
Route::get('/contact/delete/{id}', [HomeController::class, 'delete']); // database id
Route::get('/contact/edit/{id}', [HomeController::class, 'edit']);
Route::post('/contact/update/{id}', [HomeController::class, 'update']);


