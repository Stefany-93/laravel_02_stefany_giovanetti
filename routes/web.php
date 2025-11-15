<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\BlogController;

Route::get('/', [PublicController::class, 'welcome'])->name('homepage');

Route::get('/articoli', [BlogController::class, 'articoli'])->name('blog');
Route::get('/articoli/dettaglio/{id}', [BlogController::class, 'dettaglio'])->name('article.detail');
