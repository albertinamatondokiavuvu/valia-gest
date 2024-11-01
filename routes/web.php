<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;

Route::get('/',[ContactController::class,'index'])->name('welcome');
Route::post('/contact',[ContactController::class, 'store'])->name('store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('news', NewsController::class);

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');
Route::get('list/{news}', [App\Http\Controllers\NewsController::class, 'list'])->name('list.news');