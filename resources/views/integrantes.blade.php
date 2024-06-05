@extends('layouts.app')

@section('title')

Integrantes

@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-2 mt-5">
        <a href="{{route('home')}}" class="btn btn-outline-primary"><i class="bi bi-arrow-left px-1 py-2"></i>VOLTAR</a>
        </div>
    </div>
    <div class="row">
        <div class="profile-card col-4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="main-img"><img src="{{ asset('background-1.png') }}" alt="">
                            </div>
                            <div class="profile-img v-img"></div>
                            <div class="main-text">
                                <h2>Vitor Victor</h2>
                                <p>RA: 223907-1</p>
                                <p>Nome: Vitor Gabriel Blasques Victor</p>
                                <p>Curso: Sistema de Informação - UNIPAR</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile-card col-4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="main-img"><img src="{{ asset('background-1.png') }}" alt="">
                            </div>
                            <div class="profile-img  r-img"></div>
                            <div class="main-text">
                                <h2>Raphael</h2>
                                <p>RA: 240610-2</p>
                                <p>Nome: Raphael Carmanini Silva Teixeira</p>
                                <p>Curso: Sistema de Informação - UNIPAR</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile-card col-4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="main-img"><img src="{{ asset('background-1.png') }}" alt="">
                            </div>
                            <div class="profile-img s-img"></div>
                            <div class="main-text">
                                <h2>Samara</h2>
                                <p>RA: 227673-1</p>
                                <p>Nome: Samara Oliveira Sampaio</p>
                                <p>Curso: Sistema de Informação - UNIPAR</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style scoped>
    .profile-card{
        padding: 80px 0px;
    }
    .card{
        overflow: hidden;
        box-shadow: 0 0 8px rgba(0,0,0,0.5);
        border-radius: 15px;

    }
    .card:hover{
    transform: scale(1.04);
    }
    .col{
        max-width: 500px;
    }
    .main-img{
        width: 100%;
        height: 200px;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        background-position: center;
        background-size: cover;
        overflow: hidden;
    }
    .v-img{
        background-image: url('{{ asset('vitor_img.png') }}');
    }
    .r-img{
        background-image: url('{{ asset('rapha_img.png') }}');
    }
    .s-img{
        background-image: url('{{ asset('samara_img.png') }}');
    }
    .profile-img{
       background-position: center;
       background-size: cover;
       display: block;
       overflow: hidden;
       position: relative; 
       margin-left: auto;
       margin-right: auto;
       width: 140px;
       height: 140px;
       z-index: 1;
       border-radius: 50%;
       border: 5px solid #fff;
       margin-top: -80px;
    }

    .main-text{
        text-align: center;
        padding: 30px 0;
    }
    .main-text h2{
        text-transform: uppercase;
        font-weight: 900;
        font-size: 20px;
        padding: 0 0 20px;

    }
    .main-text p{
        font-size: 16px;
        padding: 0 35px;

    }
</style>
@endsection