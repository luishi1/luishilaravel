@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Categorías</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Nueva categoría</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{ route('categories.show', $category) }}" class="btn btn-primary btn-sm">Ver</a>
                    <a href="{{ route('categories.edit', $category) }}" class="btn btn-secondary btn-sm">Editar</a>
                    <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que quieres eliminar esta categoría?');">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
