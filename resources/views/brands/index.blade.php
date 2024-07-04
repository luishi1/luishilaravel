@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Marcas</h1>
    <a href="{{ route('brands.create') }}" class="btn btn-primary mb-3">Nueva marca</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($brands as $brand)
            <tr>
                <td>{{ $brand->brand }}</td>
                <td>
                    <a href="{{ route('brands.show', $brand) }}" class="btn btn-primary btn-sm">Ver</a>
                    <a href="{{ route('brands.edit', $brand) }}" class="btn btn-secondary btn-sm">Editar</a>
                    <form action="{{ route('brands.delete', $brand) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que quieres eliminar esta marca?');">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
