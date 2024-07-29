@extends('layouts.app')

@section('content')
@include('brands.partials.form', [
    'value' => '',
    'disabled' => 'disabled',
    'required' => '',
    'hidden' => 'hidden',
    'routeVariable' => 'show',
    'method' => 'POST',
    'actionProd' => 'Marca'
])  
@endsection