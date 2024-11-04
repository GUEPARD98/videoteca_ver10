@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="color: white; text-align: center;">Dashboard</h1>
@stop

@section('content')
    <div>

        {{-- Caja de usuarios --}}
        <div class="small-box bg-gradient-success"
            style="border: 2px solid #A6123A; border-radius: 15px; transition: transform 0.3s; box-shadow: 0 0 15px rgba(255, 0, 0, 0.7);">
            <div class="inner">
                <h3>{{ $users }}</h3>
                <p>Usuarios registrados</p>
            </div>
            <div class="icon">
                <i class="fas fa-users" style="color: white;"></i>
            </div>
            <a href="{{ route('admin.users.index') }}" class="small-box-footer text-white"
                style="background-color: #A6123A; padding: 10px; border-radius: 15px;">
                Ver todos los usuarios <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>

        {{-- Caja de artículos --}}
        <div class="small-box bg-info"
            style="border: 2px solid #A6123A; border-radius: 15px; transition: transform 0.3s; box-shadow: 0 0 15px rgba(255, 0, 0, 0.7);">
            <div class="inner">
                <h3>{{ $posts }}</h3>
                <p>Número de artículos</p>
            </div>
            <div class="icon">
                <i class="fas fa-newspaper" style="color: white;"></i>
            </div>
            <a href="{{ route('admin.posts.index') }}" class="small-box-footer text-white"
                style="background-color: #A6123A; padding: 10px; border-radius: 15px;">
                Ver artículos <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>

        {{-- Caja de etiquetas --}}
        <div class="small-box"
            style="background-color: #A6123A; border: 2px solid #A6123A; border-radius: 15px; transition: transform 0.3s; box-shadow: 0 0 15px rgba(255, 0, 0, 0.7);">
            <div class="inner">
                <h3 class="text-white">{{ $tags }}</h3>
                <p class="text-white">Número de etiquetas</p>
            </div>
            <div class="icon">
                <i class="fas fa-tags" style="color: white;"></i>
            </div>
            <a href="{{ route('admin.tags.index') }}" class="small-box-footer text-white"
                style="background-color: #A6123A; padding: 10px; border-radius: 15px;">
                Ver etiquetas <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>

        {{-- Caja de archivos --}}
        <div class="small-box"
            style="background-color: #A6123A; border: 2px solid #A6123A; border-radius: 15px; transition: transform 0.3s; box-shadow: 0 0 15px rgba(255, 0, 0, 0.7);">
            <div class="inner">
                <h3 class="text-white">{{ $documents }}</h3>
                <p class="text-white">Número de archivos</p>
            </div>
            <div class="icon">
                <i class="fas fa-barcode" style="color: white;"></i>
            </div>
            <a href="{{ route('admin.archivos.index') }}" class="small-box-footer text-white"
                style="background-color: #A6123A; padding: 10px; border-radius: 15px;">
                Ver archivos <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
@stop

@section('css')
    <style>
        /* Fondo oscuro */
        body {
            background-color: #121212;
        }

        /* Estilos futuristas para las cajas (small-box) */
        .small-box {
            position: relative;
            display: block;
            margin-bottom: 20px;
            color: white;
            transition: transform 0.3s ease-in-out;
        }

        .small-box:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(255, 0, 0, 0.8);
        }

        .small-box-footer {
            display: block;
            padding: 10px;
            background-color: #A6123A;
            color: white;
            text-align: center;
            border-radius: 15px;
            transition: background-color 0.3s ease-in-out;
        }

        .small-box-footer:hover {
            background-color: #FF4C4C;
        }

        .icon {
            font-size: 60px;
        }
    </style>
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
