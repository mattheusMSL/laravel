<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;

Route::resource('produtos', ProdutoController::class);

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/protudo/{slug}', [SiteController::class, 'details'])->name('site.details');
Route::get('/catorgia/{id}', [SiteController::class, 'categoria'])->name('site.categoria');