@extends('layouts.app')

@section('title')

Home

@endsection

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-4 d-flex justify-content-end"><a class="btn btn-primary" href="/fornecedores">FORNECEDORES</a></div>
        <div class="col-4 d-flex justify-content-center"><a class="btn btn-primary" href="/produtos">PRODUTOS</a></div>
        <div class="col-4 d-flex justify-content-start"><a class="btn btn-primary" href="/integrantes">INTEGRANTES</a></div>
    </div>
</div>

@endsection