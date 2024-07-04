@extends('layouts.app')
@section('content')
@include('includes.brandform', [
    'value' => '',
    'disabled' => '',
    'required' => '',
    'hidden' => '',
    'routeVariable' => 'store',
    'method' => 'POST',
    'actionProd' => 'Crear Marca'
])
@endsection