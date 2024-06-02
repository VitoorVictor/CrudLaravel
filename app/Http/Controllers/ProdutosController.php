<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index() 
    {
        $produtos = Produto::with('fornecedor')->get();
        return view('produtos.index',['produtos' => $produtos]);
    }
}
