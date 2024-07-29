@extends('layouts.app')
@section('content')
@include('brands.partials.form', [
    'value' => '',
    'disabled' => '',
    'required' => '',
    'hidden' => '',
    'routeVariable' => 'store',
    'method' => 'POST',
    'actionProd' => 'Crear Marca'
])
@endsection