<?php

use Illuminate\Support\Facades\Route;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', [\App\Http\Controllers\PaginaInicialController::class, 'paginaInical'])->name('site.index');

Route::get('/pagina-inicial', [\App\Http\Controllers\PaginaInicialController::class, 'redirect']);

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

Route::get('/sobre', [\App\Http\Controllers\SobreController::class, 'sobre'])->name('site.sobre');




