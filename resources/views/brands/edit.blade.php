@extends('layouts.app')
@section('content')
@include('brands.partials.form', [
    'value' => '',
    'disabled' => '',
    'required' => '',
    'hidden' => '',
    'actionProd' => 'Actualizar marca',
    'method' => 'PUT',
    'routeVariable' => 'update'
])
@endsection