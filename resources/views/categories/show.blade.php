@extends('layouts.app')

@section('content')
@include('categories.partials.form', [
    'value' => '',
    'disabled' => 'disabled',
    'required' => '',
    'hidden' => 'hidden',
    'routeVariable' => 'show',
    'method' => 'POST',
    'actionProd' => 'Categorias'
])
@endsection