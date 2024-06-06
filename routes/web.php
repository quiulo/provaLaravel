<?php

use Illuminate\Support\Facades\Route;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', [\App\Http\Controllers\PaginaInicialController::class, 'paginaInicial'])->name('site.index');

Route::get('/pagina-inicial', [\App\Http\Controllers\PaginaInicialController::class, 'redirect']);

Route::post('/cadastro', [\App\Http\Controllers\CadastroController::class, 'cadastro'])->name('site.cadastro');

Route::get('/sobre', [\App\Http\Controllers\SobreController::class, 'sobre'])->name('site.sobre');


Route::get('/produtos', [\App\Http\Controllers\ProdutosController::class, 'produtos'])->name('site.produtos');

Route::fallback([\App\Http\Controllers\FallbackController::class, 'fallback']);

