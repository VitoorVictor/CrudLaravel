<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoasController extends Controller
{
    public function index() 
    {
        return view('pessoas.index');
    }
    public function cadastro()
    {
        return view('pessoas.cadastro');
    }

    public function salvar(Request $request)
    {
        Pessoa::create($request->all());
        return redirect()->route('index');  
    }
    public function authenticacao (Request $request)
    {
        $cpf = $request->input('cpf');
        $senha = $request->input('senha');

        $pessoaCPF = Pessoa::where('cpf', $cpf)->first();
        $pessoaSENHA = Pessoa::where('senha', $senha)->first();

       
        if (!$pessoaCPF || !$pessoaSENHA) {
            return back()->withErrors(['cpf' => 'As credenciais fornecidas estão incorretas.']);
        }

        return redirect()->route('home')->with('success', 'Login realizado com sucesso!');
    }
}
