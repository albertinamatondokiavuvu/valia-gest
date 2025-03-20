<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\EquipasController;
use App\Http\Controllers\ContactController;

Route::get('/',[ContactController::class,'index'])->name('welcome');
Route::post('/contact',[ContactController::class, 'store'])->name('store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Rotas para News
Route::resource('news', NewsController::class)
    ->parameters(['news' => 'news:slug']); 

// Rotas para Equipas
Route::resource('equipas', EquipasController::class)
    ->parameters(['equipas' => 'equipa:slug']);

Route::get('/list/{news:slug}', [App\Http\Controllers\NewsController::class, 'list'])->name('list.news');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');