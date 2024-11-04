@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center bg-danger p-3" style="border-radius: 8px;">
        <h1 class="text-white">Lista de Artículos</h1>
        @can('admin.posts.create')
            <a class="btn btn-light" href="{{ route('admin.posts.create') }}">
                <i class="fas fa-plus-circle"></i> Crear Artículo
            </a>
        @endcan
    </div>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('info') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="card">

        <div class="card-header bg-white">
            <form action="{{ route('admin.posts.index') }}" method="GET" class="d-flex">
                <input type="text" class="form-control" name="search" value="{{ request('search') }}"
                    placeholder="Buscar" style="border: 2px solid #A6123A; border-radius: 4px;">
                <button class="btn btn-danger ml-2">Buscar</button>
            </form>
        </div>

        @if ($posts->count() > 0)
            <table class="table table-striped text-center">
                <thead class="bg-danger text-white">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->name }}</td>
                            <td>
                                @can('admin.posts.edit')
                                    <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-primary btn-sm">
                                        Editar
                                    </a>
                                @endcan
                            </td>
                            <td>
                                @can('admin.posts.destroy')
                                    <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="card-body text-center">
                <h4>No hay registros</h4>
            </div>
        @endif
    </div>

    <div class="card-footer bg-white">
        {{ $posts->links() }}
    </div>

@stop

@section('css')
    <style>
        /* Estilos personalizados */
        .btn {
            transition: background-color 0.3s ease;
        }

        .btn-danger:hover {
            background-color: #ff4d4d;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        input[type="text"] {
            border-radius: 4px;
            padding: 10px;
            border: 2px solid #A6123A;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f8f9fa;
        }

        .table-striped tbody tr:hover {
            background-color: #f1f1f1;
        }

        .card-footer .pagination .page-link {
            color: #A6123A;
        }

        .card-footer .pagination .page-item.active .page-link {
            background-color: #A6123A;
            border-color: #A6123A;
        }

        /* Estilos para la alerta de éxito */
        .alert {
            border-radius: 8px;
        }

        /* Header personalizado */
        .content-header {
            background-color: #A6123A;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
            color: white;
        }
    </style>
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
