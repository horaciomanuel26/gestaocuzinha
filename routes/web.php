<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('index');
});

Route::get('/',action:[HomeController::class,'index'])->name('home');

Route::get('cliente',action:[ClienteController::class,'index'])->name('cliente.index');
Route::post('cadastrar',action:[ClienteController::class,'cadastrar'])->name('cliente.cadastrar');
Route::put('editar/{id}',action:[ClienteController::class,'editar'])->name('cliente.editar');
Route::get('deletar{id}',action:[ClienteController::class,'deletar'])->name('cliente.deletar');
