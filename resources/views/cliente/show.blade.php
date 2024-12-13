@extends('layouts.main')

@section('contenido')
<div class="container">
    <h1>Detalles del Usuario</h1>
    <p><strong>Nombre:</strong> {{ $usuario->nombre }}</p>
    <p><strong>Email:</strong> {{ $usuario->email }}</p>
    <p><strong>Tipo:</strong> {{ $usuario->tipo }}</p>
    <p><strong>Nombre de la Tienda:</strong> {{ $usuario->nombre_tienda }}</p>
    <p><strong>RUC:</strong> {{ $usuario->ruc }}</p>
    <a href="{{ route('cliente.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection