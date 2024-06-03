@extends('layouts.app')

@section('title')

Fornecedores Create

@endsection

@section('content')
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-8">
                <form action="{{route('fornecedores.store')}}" method="POST">
                @csrf
                <a href="{{route('fornecedores.index')}}" class="btn btn-outline-primary"><i class="bi bi-arrow-left px-1 py-2"></i>VOLTAR</a>
                    <div class="col-12 text-center">
                        <h1>CADASTRO de <strong class="text-primary">FORNECEDORES</strong></h1>
                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="razao_social" class="form-label">Razão Social:</label>
                            <input type="text" class="form-control" name="razao_social" required>
                        </div>
                        <br>
                        <div class="form-group">
                        <label for="cnpj" class="form-label">CNPJ:</label>
                        <input type="text" class="form-control" name="cnpj" id="cnpj" required>
                    </div>
                        <br>
                        <div class="form-group">
                            <label for="email" class="form-label">Email:</label>
                            <input type="text" class="form-control" name="email" required>
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