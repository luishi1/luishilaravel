@extends('layouts.app')

@section('content')
    @include('products.partials.form', [
    'value' => '',
    'disabled' => 'disabled',
    'required' => '',
    'hidden' => 'hidden',
    'state' => 'available',
    'routeVariable' => 'show',
    'method' => 'POST',
    'actionProd' => 'Product'
])
@endsection