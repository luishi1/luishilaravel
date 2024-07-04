@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Productos</h1>
    <form method="GET" action="{{ route('products.index') }}">
        <div class="form-row align-items-end">
            <div class="col">
                <select class="form-control" id="order" name="order">
                    <option value="" disabled selected>Ordenar por</option>
                    <option value="asc" {{ request('order') == 'asc' ? 'selected' : '' }}>Menor a Mayor</option>
                    <option value="desc" {{ request('order') == 'desc' ? 'selected' : '' }}>Mayor a Menor</option>
                </select>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </div>
        </div>
    </form>

    <a href="{{ route('products.create') }}" class="btn btn-primary my-3">Crear nuevo producto</a>
    <x-product-table :products="$products" />
</div>
@endsection