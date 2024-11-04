@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-danger">Editar Rol</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success fade show" role="alert">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card shadow-sm border-danger">
        <div class="card-body">
            {!! Form::model($role, [
                'route' => ['admin.roles.update', $role],
                'autocomplete' => 'off',
                'files' => true,
                'method' => 'put',
            ]) !!}

            <div class="form-group mb-3">
                {!! Form::label('name', 'Nombre', ['class' => 'form-label']) !!}
                {!! Form::text('name', null, ['placeholder' => 'Ingrese nombre', 'class' => 'form-control', 'id' => 'name']) !!}
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Permisos</label>
                @foreach ($permissions as $permission)
                    <div class="form-check">
                        {!! Form::checkbox('permissions[]', $permission->id, null, [
                            'class' => 'form-check-input',
                            'id' => 'permission' . $permission->id,
                        ]) !!}
                        <label class="form-check-label" for="permission{{ $permission->id }}">
                            {{ $permission->description }}
                        </label>
                    </div>
                @endforeach
            </div>

            {!! Form::submit('Actualizar Rol', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@stop

@section('js')
    <script src="@vite(['public/vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js'])"></script>

    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@stop
