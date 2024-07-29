@extends('layouts.app')
@section('content')

    @php
        $routeVariable = 'update'; // Define la variable aquí
    @endphp

    @include('products.partials.form', [
        'value' => '',
        'disabled' => '',
        'required' => '',
        'hidden' => '',
        'actionProd' => 'Update product',
        'method' => 'PUT',
        'routeVariable' => route('products.' . $routeVariable, $product ?? null), // Usa la variable aquí
        'taxes' => '1'
    ])
@endsection
