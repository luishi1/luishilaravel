@extends('layouts.app')
@section('content')
@include('categories.partials.form', [
    'value' => '',
    'disabled' => '',
    'required' => '',
    'hidden' => '',
    'actionProd' => 'Actualizar categoria',
    'method' => 'PUT',
    'routeVariable' => 'update'
])
@endsection