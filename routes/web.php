<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoasController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\ProdutosController;

Route::get('/', [PessoasController::class, 'index']);
Route::get('/produtos', [ProdutosController::class, 'index']);
Route::get('/fornecedores', [FornecedoresController::class, 'index']);
