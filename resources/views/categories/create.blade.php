@extends('layouts.app')
@section('content')
@include('includes.categoryform', [
    'value' => '',
    'disabled' => '',
    'required' => '',
    'hidden' => '',
    'routeVariable' => 'store',
    'method' => 'POST',
    'actionProd' => 'Crear Categoria'
])

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection
