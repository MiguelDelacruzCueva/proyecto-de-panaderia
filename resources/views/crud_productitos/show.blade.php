@extends('layouts.main')

@section('contenido')
<div class="container">
    <h1>Detalles del Producto</h1>
    <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
    <p><strong>Categoría:</strong> {{ $producto->categoria }}</p>
    <p><strong>Precio:</strong> {{ $producto->precio }}</p>
    <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
    <p><strong>Imagen:</strong> <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}" width="100"></p>
    <p><strong>Disponibilidad:</strong> {{ $producto->disponibilidad ? 'Disponible' : 'No Disponible' }}</p>
    <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection