@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Usuario</h1>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $user->nombre }}" readonly>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" readonly>
    </div>
    <div class="mb-3">
        <label for="tipo" class="form-label">Tipo</label>
        <input type="text" class="form-control" id="tipo" name="tipo" value="{{ $user->tipo }}" readonly>
    </div>
    <div class="mb-3">
        <label for="nombre_tienda" class="form-label">Nombre de la Tienda</label>
        <input type="text" class="form-control" id="nombre_tienda" name="nombre_tienda" value="{{ $user->nombre_tienda }}" readonly>
    </div>
    <div class="mb-3">
        <label for="ruc" class="form-label">RUC</label>
        <input type="text" class="form-control" id="ruc" name="ruc" value="{{ $user->ruc }}" readonly>
    </div>
    <a href="{{ route('users.index') }}" class="btn btn-primary">Volver</a>
</div>
@endsection