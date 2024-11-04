@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="text-danger">Lista de Roles</h1>
        @can('admin.roles.create')
            <a class="btn btn-outline-danger" href="{{ route('admin.roles.create') }}">Crear Roles</a>
        @endcan
    </div>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success fade show" role="alert">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card shadow-sm border-danger">
        <div class="card-header bg-danger text-white">
            <form action="{{ route('admin.roles.index') }}" method="GET" class="d-flex">
                <input type="text" class="form-control me-2" value="{{ request('search') }}" name="search"
                    placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-light">Buscar</button>
            </form>
        </div>

        @if ($roles->count() > 0)
            <table class="table table-striped table-hover">
                <thead class="bg-danger text-white">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Slug</th>
                        <th scope="col" class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <th scope="row">{{ $role->id }}</th>
                            <td>{{ $role->name }}</td>
                            <td>{{ $role->slug }}</td>
                            <td class="text-center">
                                @can('admin.roles.edit')
                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.roles.edit', $role) }}">
                                        Editar
                                    </a>
                                @endcan
                                @can('admin.roles.destroy')
                                    <form action="{{ route('admin.roles.destroy', $role) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            Eliminar
                                        </button>
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

    <div class="card-footer">
        {{ $roles->links() }}
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .card-header {
            border-bottom: 2px solid #A6123A;
        }

        .alert {
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .table {
            border-radius: 5px;
            overflow: hidden;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .table-hover tbody tr:hover {
            background-color: #f8d7da;
        }

        .btn-outline-danger {
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-outline-danger:hover {
            background-color: #A6123A;
            color: white;
        }

        .btn-primary {
            transition: background-color 0.3s, border-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
