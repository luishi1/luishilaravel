@extends('layouts.app')

@section('content')
<div class="container">
    <h1>PRODUCTS</h1>
    <form method="GET" action="{{ route('products.index') }}">
        <div class="form-row align-items-end">
            <div class="col">
                <select class="form-control" id="order" name="order">
                    <option value="" disabled selected>Seleccionar un orden</option>
                    <option value="asc" {{ request('order') == 'asc' ? 'selected' : '' }}>Precio : Menor a Mayor</option>
                    <option value="desc" {{ request('order') == 'desc' ? 'selected' : '' }}>Precio : Mayor a Menor</option>
                </select>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Ordenar</button>
            </div>
        </div>
    </form>

    <a href="{{ route('products.create') }}" class="btn btn-primary my-3">Nuevo Producto</a>
    <x-product-table :products="$products" />
</div>
@endsection