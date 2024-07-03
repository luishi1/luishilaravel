<div class="container">
    <h1>{{ $actionProd }}</h1>
    <form method="POST" action="{{ route('products.' . $routeVariable, $product ?? null) }}">
        @csrf
        @if($method !== 'POST')
            @method($method)
        @endif
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $product->title ?? '') }}" {{ $disabled }} {{ $required }}>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" {{ $disabled }} {{ $required }}>{{ old('description', $product->description ?? '') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input class="form-control" id="price" name="price" value="{{ old('price', $product->price ?? '') }}" {{ $disabled }} {{ $required }}>
        </div>
        @isset($taxes)
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="add_taxes" name="add_taxes">
            <label class="form-check-label" for="add_taxes">Add taxes to price?</label>
        </div>
        @endisset
        <div class="mb-3">
            <label for="state" class="form-label" >State</label>
            <select name="state" id="state" class="form-select"{{ $disabled }} >
                <option value="available" {{ old('state', $product->state ?? '') == 'available' ? 'selected' : '' }}>Available</option>
                <option value="unavailable" {{ old('state', $product->state ?? '') == 'unavailable' ? 'selected' : '' }}>Unavailable</option>
                <option value="unknown" {{ old('state', $product->state ?? '') == 'unknown' ? 'selected' : '' }}>Unknown</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="brand" class="form-label" >Brand</label>
            <select name="brand_id" id="brand_id" class="form-select" {{ $disabled }}>
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}" {{ old('brand_id', $product->brand_id ?? '') == $brand->id ? 'selected' : '' }}>{{ $brand->brand }}</option>
                @endforeach
            </select>
        </div>
        @isset($categories)
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <div>
                @foreach($categories as $category)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{ $category->id }}" id="category_{{ $category->id }}" name="category_id[]" {{ (in_array($category->id, old('category_id', $product->categories->pluck('id')->toArray() ?? []))) ? 'checked' : '' }} {{ $disabled }}>
                        <label class="form-check-label" for="category_{{ $category->id }}">
                            {{ $category->name }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
        @endisset
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <button type="submit" class="btn btn-primary" {{ $hidden }}>Guardar</button>
    </form>
    <a href="{{ route('products.index') }}">Back</a>
</div>