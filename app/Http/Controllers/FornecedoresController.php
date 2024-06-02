<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index()
    {
        return view('fornecedores.index');
    }
}
