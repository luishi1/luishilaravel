@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Brands</h1>
    <a href="{{ route('brands.create') }}" class="btn btn-primary mb-3">Create a new brand</a>
    @if($brands->isEmpty())
        <p>No brands available.</p>
    @else
        <div class="list-group">
            @foreach ($brands as $brand)
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <span>{{ $brand->brand }}</span>
                    <div class="btn-group" role="group">
                        <a href="{{ route('brands.show', $brand) }}" class="btn btn-info btn-sm">Show</a>
                        <a href="{{ route('brands.edit', $brand) }}" class="btn btn-warning btn-sm">Update</a>
                        <button type="button" class="btn btn-danger btn-sm" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $brand->id }}').submit();">Delete</button>
                        <form id="delete-form-{{ $brand->id }}" action="{{ route('brands.delete', $brand) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
