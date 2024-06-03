@extends('layouts.app')

@section('title')

Produtos Create

@endsection

@section('content')
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-8">
                <form action="{{route('produtos.store')}}" method="POST">
                @csrf
                <a href="{{route('produtos.index')}}" class="btn btn-outline-primary"><i class="bi bi-arrow-left px-1 py-2"></i>VOLTAR</a>
                    <div class="col-12 text-center">
                        <h1>CADASTRO de <strong class="text-primary">PRODUTOS</strong></h1>
                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="nome" class="form-label">Nome:</label>
                            <input type="text" class="form-control" name="nome" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="valor" class="form-label">Valor:</label>
                            <input type="decimal" class="form-control" name="valor" id="valor" required>
                         </div>
                        <br>
                        <div class="form-group">
                            <label for="fornecedor_id" class="form-label">Fornecedor:</label>
                            <select class="form-control"  id="fornecedor_id" name="fornecedor_id" required>
                                <option value="" disabled selected>Selecione o Fornecedor</option>
                                @foreach ($fornecedores as $fornecedor)
                                <option value="{{$fornecedor->id}}">{{$fornecedor->razao_social}}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>  
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary">
                        </div>
                        <br>                                                                                      
                    </div>
                </form>
            </div>
        </div>
    </div> 

@endsection                                                                                                                                                     