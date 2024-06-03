@extends('layouts.app')

@section('title')

Produtos List

@endsection

@section('content')
<div class="container">
        <div class="row mt-5 mb-2">
            <div class="col-md-2 col-3">
                <a href="/home" class="btn btn-outline-primary"><i class="bi bi-arrow-left px-1 py-2"></i>VOLTAR</a>
            </div>
            <div class="col-md-8 col-6 text-center">
                <h1>Área dos <strong class="text-primary">PRODUTOS</strong></h1>
            </div>
            <div class="col-md-2 col-3"></div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">NOME</th>
                    <th scope="col">VALOR</th>
                    <th scope="col">FORNECEDOR</th>
                    <th></th>
                    <th scope="col"><a href="{{route('produtos.create')}}" class="btn btn-outline-success ">ADICIONAR</a></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($produtos as $produto)
                <tr>
                    <th scope="row">{{ $produto->id}}</th>
                    <td>{{$produto->nome}}</td>
                    <td>{{$produto->valor}}</td>
                    <td>{{$produto->fornecedor->razao_social}}</td>
                    <td><a href="{{route('produtos.edit',['id' => $produto->id])}}" class="btn btn-outline-warning">EDITAR<i class="bi bi-pencil-fill px-1 py-2"></i></a></td>
                    <td>
                        <form action="{{ route('produtos.destroy', ['id' => $produto->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Tem certeza que deseja deletar este produto?');">DELETAR <i class="bi bi-trash-fill px-1 py-2"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>       
    </div>
@endsection