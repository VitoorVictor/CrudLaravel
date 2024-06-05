@extends('layouts.app')


@section('title')
    Login
@endsection

@section('content')
    <div id="login">
        <div class="container mt-5">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{route('authenticacao')}}" method="get">
                        @csrf
                            <h3 class="text-center text-primary">Login</h3>
                            <div class="form-group mt-2">
                                <label for="cpf" class="text-primary">CPF:</label><br>
                                <input type="text" name="cpf" id="cpf" class="form-control" maxlength="11" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="senha" class="text-primary">Senha:</label><br>
                                <input type="password" name="senha" id="senha" class="form-control" required>
                            </div>
                            <div class="form-group mt-2 mb-2">
                                <div class="text-right">
                                    <a href="{{route('cadastro')}}" class="text-primary">Register here</a>
                                </div>
                            </div>  
                            <input type="submit" name="logar" class="btn btn-primary btn-md px-5" value="Logar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection