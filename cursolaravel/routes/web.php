<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::resource('produtos', ProdutoController::class);
// Route::name('produto.')->group(function (){
//     Route::get('/', [ProdutoController::class], 'index')->name('index');

//     Route::get('/produto/{id?}', [ProdutoController::class, 'show'])->name('show');
    
//     Route::get('/iphone', [ProdutoController::class, 'iphone'])->name('iphone');
// });


// Route::get('/produtos', function () {
//     return view('produto', [
//      'productName' => 'iphone 16 pro',
//      'price' => '6000,00', 
//      'productImg' => 'public/products/iphone-16-pro'
//     ]);
// });

// Route::match(['get', 'post'], '/match', function(){
//     return "Permite acesso apenas para os permitidos";
// });
