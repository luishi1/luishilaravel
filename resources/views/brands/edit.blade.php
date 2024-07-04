@extends('layouts.app')
@section('content')
@include('includes.brandform', [
    'value' => '',
    'disabled' => '',
    'required' => '',
    'hidden' => '',
    'actionProd' => 'Actualizar marca',
    'method' => 'PUT',
    'routeVariable' => 'update'
])
@endsection