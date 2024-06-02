<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index()
    {
        $fornecedores = Fornecedor::all();
        return view('fornecedores.index',['fornecedores' => $fornecedores]);
    }
}
