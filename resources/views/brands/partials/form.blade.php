<div class="container">
    <h1>@php echo $actionProd @endphp</h1>
    <form method="POST" action="{{ route('brands.' . $routeVariable, $brand ?? null) }}">
        @csrf
        @if($method !== 'POST')
            @method($method)
        @endif
        <div class="mb-3">
            <label for="brand" class="form-label">Marca</label>
            <input type="text" class="form-control" id="brand" name="brand" value="{{ old('brand', $brand->brand ?? '') }}" {{ $disabled }} {{ $required }}>
        </div>
        <button type="submit" class="btn btn-primary" {{ $hidden }}>Guardar</button>
    </form>
    <a href="{{ route('brands.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
