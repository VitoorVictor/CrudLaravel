<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoasController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\ProdutosController;

Route::get('/', [PessoasController::class, 'index'])->name('index');
Route::get('/cadastro', [PessoasController::class, 'cadastro'])->name('cadastro');
Route::post('/', [PessoasController::class, 'salvar'])->name('salvar');
Route::get('/authenticacao', [PessoasController::class, 'authenticacao'])->name('authenticacao');

Route::view('/home','home')->name('home');
Route::view('/integrantes','integrantes')->name('integrantes');

Route::prefix('produtos')->group(function () {
    Route::get('/', [ProdutosController::class, 'index'])->name('produtos.index');
    Route::get('/create', [ProdutosController::class, 'create'])->name('produtos.create');
    Route::post('/', [ProdutosController::class, 'store'])->name('produtos.store');
    Route::get('/{id}/edit', [ProdutosController::class, 'edit'])->where('id', '[0-9]+')->name('produtos.edit');
    Route::put('/{id}', [ProdutosController::class, 'update'])->where('id', '[0-9]+')->name('produtos.update');
    Route::delete('/{id}', [ProdutosController::class, 'destroy'])->where('id', '[0-9]+')->name('produtos.destroy');
});

Route::prefix('fornecedores')->group(function () {
    Route::get('/', [FornecedoresController::class, 'index'])->name('fornecedores.index');
    Route::get('/create', [FornecedoresController::class, 'create'])->name('fornecedores.create');
    Route::post('/', [FornecedoresController::class, 'store'])->name('fornecedores.store');
    Route::get('/{id}/edit', [FornecedoresController::class, 'edit'])->where('id', '[0-9]+')->name('fornecedores.edit');
    Route::put('/{id}', [FornecedoresController::class, 'update'])->where('id', '[0-9]+')->name('fornecedores.update');
    Route::delete('/{id}', [FornecedoresController::class, 'destroy'])->where('id', '[0-9]+')->name('fornecedores.destroy');
});