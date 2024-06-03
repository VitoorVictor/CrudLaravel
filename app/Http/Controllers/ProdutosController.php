<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Fornecedor;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index() 
    {
        $produtos = Produto::with('fornecedor')->get();
        return view('produtos.index',['produtos' => $produtos]);
    }
    public function create()
    {
        $fornecedores = Fornecedor::all();
        return view('produtos.create',['fornecedores' => $fornecedores]);
    }

    public function store(Request $request)
    {
        Produto::create($request->all());
        return redirect()->route('produtos.index');                                                                                             
    }
    public function edit($id)
    {
        $produtos = Produto::where('id',$id)->first();
        $fornecedores = Fornecedor::all();
        if (!empty($produtos)) 
        {
            return view('produtos.edit',[
                'produtos' => $produtos,
                'fornecedores' => $fornecedores
            ]);
        } else 
        {
         return redirect()->route('produtos.index');   
        }
    }
    public function update(Request $request, $id)
    {

        $data = [
            'nome' => $request->nome,
            'valor' => $request->valor,
            'fornecedor_id' => $request->fornecedor_id,
        ];
        Produto::where('id',$id)->update($data);
        return redirect()->route('produtos.index');   
    }
    public function destroy($id)
    {
        Produto::where('id', $id)->delete();
        return redirect()->route('produtos.index');   
    }
}

