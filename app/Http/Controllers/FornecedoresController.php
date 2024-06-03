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
    public function create()
    {
        return view('fornecedores.create');
    }

    public function store(Request $request)
    {
        Fornecedor::create($request->all());
        return redirect()->route('fornecedores.index');                                                                                             
    }
    public function edit($id)
    {
        $fornecedores = Fornecedor::where('id',$id)->first();
        if (!empty($fornecedores)) 
        {
            return view('fornecedores.edit',['fornecedores' => $fornecedores]);
        } else 
        {
         return redirect()->route('fornecedores.index');   
        }
    }
    public function update(Request $request, $id)
    {

        $data = [
            'razao_social' => $request->razao_social,
            'cnpj' => $request->cnpj,
            'email' => $request->email,
        ];
        Fornecedor::where('id',$id)->update($data);
        return redirect()->route('fornecedores.index');   
    }
    public function destroy($id)
    {
        Fornecedor::where('id', $id)->delete();
        return redirect()->route('fornecedores.index');   
    }
}
