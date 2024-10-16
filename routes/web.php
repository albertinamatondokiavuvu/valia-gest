<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/',[ContactController::class,'index'])->name('welcome');
Route::post('/contact',[ContactController::class, 'store'])->name('store');