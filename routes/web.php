<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ClienteController; // Corrigido o namespace do ClienteController

// Rota para a página inicial
/*
Route::get('/', function () {
    return view('index');
});
*/
// Rota para a home (controller HomeController)
Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');

// Grupo de rotas para Cliente (prefixo cliente)
Route::prefix('cliente')->group(function () {
    Route::get('index', [App\Http\Controllers\Admin\ClienteController::class, 'index'])->name('cliente.index');
    Route::post('cadastrar', [App\Http\Controllers\Admin\ClienteController::class, 'cadastrar'])->name('cliente.cadastrar');
    Route::put('editar/{id}', [App\Http\Controllers\Admin\ClienteController::class, 'editar'])->name('cliente.editar');
    Route::get('deletar/{id}', [App\Http\Controllers\Admin\ClienteController::class, 'deletar'])->name('cliente.deletar');
});
// Grupo de rotas para posto
Route::prefix('posto')->group(function () {
    Route::get('index', [App\Http\Controllers\Admin\PostoController::class, 'index'])->name('posto.index');
    Route::post('cadastrar', [App\Http\Controllers\Admin\PostoController::class, 'cadastrar'])->name('posto.cadastrar');
    Route::put('editar/{id}', [App\Http\Controllers\Admin\PostoController::class, 'editar'])->name('posto.editar');
    Route::get('deletar/{id}', [App\Http\Controllers\Admin\PostoController::class, 'deletar'])->name('posto.deletar');
});
