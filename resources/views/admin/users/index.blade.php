@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-red-600 text-3xl font-bold">Lista de Usuarios</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card bg-white shadow-md border border-gray-300 rounded-lg p-4">
        <div class="card-header flex justify-between items-center">
            <form action="{{ route('admin.users.index') }}" method="GET" class="d-flex">
                <input type="text" class="form-control border-gray-300 rounded-lg" value="{{ request('search') }}"
                    name="search" placeholder="Buscar">
                <button class="btn btn-primary ml-2">Buscar</button>
            </form>
        </div>

        @if ($users->count() > 0)
            <table class="table table-striped">
                <thead class="bg-red-600 text-white">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col" class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="text-center">
                                @can('admin.users.edit')
                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.users.edit', $user) }}">
                                        Editar
                                    </a>
                                @endcan
                                @can('admin.users.destroy')
                                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="inline">
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
        {{ $users->links() }}
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
