@extends('layouts.app')

@php
function formatCnpj($cnpj) {
    return preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", "$1.$2.$3/$4-$5", $cnpj);
}
@endphp

@section('title')

Fornecedores List

@endsection

@section('content')
    <div class="container">
        <div class="row mt-5 mb-2">
            <div class="col-md-2 col-3">
                <a href="/home" class="btn btn-outline-primary"><i class="bi bi-arrow-left px-1 py-2"></i>VOLTAR</a>
            </div>
            <div class="col-md-8 col-6 text-center">
                <h1>Área dos <strong class="text-primary">FORNECEDORES</strong></h1>
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
                    <th scope="col">RAZÃO SOCIAL</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">EMAIL</th>
                    <th></th>
                    <th scope="col"><a href="{{route('fornecedores.create')}}" class="btn btn-outline-success ">ADICIONAR</a></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($fornecedores as $fornecedor)
                <tr>
                    <th scope="row">{{ $fornecedor->id}}</th>
                    <td>{{$fornecedor->razao_social}}</td>
                    <td>{{ formatCnpj($fornecedor->cnpj) }}</td>
                    <td>{{$fornecedor->email}}</td>
                    <td><a href="{{route('fornecedores.edit',['id'=> $fornecedor->id])}}" class="btn btn-outline-warning">EDITAR<i class="bi bi-pencil-fill px-1 py-2"></i></a></td>
                    <td>
                        <form action="{{ route('fornecedores.destroy', ['id' => $fornecedor->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Tem certeza que deseja deletar este fornecedor?');">DELETAR <i class="bi bi-trash-fill px-1 py-2"></i></button>
                        </form>
                    </td>  
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>       
    </div>
@endsection