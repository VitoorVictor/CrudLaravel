@extends('layouts.app')

@section('title')

Produtos Edit

@endsection

@section('content')
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-8">
                <form action="{{route('produtos.update',['id' => $produtos->id])}}" method="POST">
                @csrf
                @method('PUT')
                <a href="{{route('produtos.index')}}" class="btn btn-outline-primary"><i class="bi bi-arrow-left px-1 py-2"></i>VOLTAR</a>
                    <div class="col-12 text-center">
                        <h1>EDIÇÃO de <strong class="text-primary">PRODUTOS</strong></h1>
                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="nome" class="form-label">Nome:</label>
                            <input type="text" class="form-control" name="nome" required value="{{$produtos->nome}}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="valor" class="form-label">Valor:</label>
                            <input type="decimal" class="form-control" name="valor" id="valor" required value="{{$produtos->valor}}">
                         </div>
                        <br>
                        <div class="form-group">
                            <label for="fornecedor_id" class="form-label">Fornecedor:</label>
                            <select class="form-control"  id="fornecedor_id" name="fornecedor_id" required>
                                @foreach ($fornecedores as $fornecedor)
                                <option value="{{$fornecedor->id}}"      {{ $produtos->fornecedor_id == $fornecedor->id ? 'selected' : '' }} >{{$fornecedor->razao_social}}</option>
                                @endforeach
                              
                             
                            </select>
                        </div>
                        <br>  
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="SALVAR">
                        </div>
                        <br>                                                                                      
                    </div>
                </form>
            </div>
        </div>
    </div> 

@endsection      