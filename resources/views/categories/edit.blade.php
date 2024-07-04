@extends('layouts.app')
@section('content')
@include('includes.categoryform', [
    'value' => '',
    'disabled' => '',
    'required' => '',
    'hidden' => '',
    'actionProd' => 'Actualizar categoria',
    'method' => 'PUT',
    'routeVariable' => 'update'
])
@endsection