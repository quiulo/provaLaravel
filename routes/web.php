<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaInicialController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\MotoController;
use App\Http\Controllers\FallbackController;

Route::get('/', [PaginaInicialController::class, 'paginaInicial'])->name('site.index');
Route::get('/pagina-inicial', [PaginaInicialController::class, 'redirect']);
Route::get('/sobre', [SobreController::class, 'sobre'])->name('site.sobre');
Route::get('/produtos', [ProdutosController::class, 'produtos'])->name('site.produtos');
Route::get('/motos/create', [MotoController::class, 'create'])->name('motos.create');
Route::post('/motos', [MotoController::class, 'store'])->name('motos.store');
Route::get('/motos/show', [MotoController::class, 'show'])->name('motos.show');
Route::fallback([FallbackController::class, 'fallback']);
