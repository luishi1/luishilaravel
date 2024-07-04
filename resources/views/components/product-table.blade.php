<table class="table">
    <thead>
        <tr>
            <th>Título</th>
            <th>Precio</th>
            <th>Categorías</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->title }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->categoriesName }}</td>
                <td>
                    <a href="{{ route('products.show', $product) }}" class="btn btn-primary btn-sm">Ver</a>
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-secondary btn-sm">Editar</a>
                    <a href="#" class="btn btn-danger btn-sm" onclick="if(confirm('¿Estás seguro de que quieres eliminar este producto?')) { event.preventDefault(); document.getElementById('delete-form-{{ $product->id }}').submit(); }">Eliminar</a>
                    <form id="delete-form-{{ $product->id }}" action="{{ route('products.delete', $product) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $products->appends(request()->except('page'))->links() }}
