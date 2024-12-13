@extends('layouts.main')

@section('contenido')
<div class="container">
    <h1>Detalles del Carrito</h1>
    <p><strong>Usuario:</strong> {{ $carrito->usuario->nombre }}</p>
    <p><strong>Producto:</strong> {{ $carrito->producto->nombre }}</p>
    <p><strong>Cantidad:</strong> {{ $carrito->cantidad }}</p>
    <p><strong>Precio Total:</strong> {{ $carrito->precio_total }}</p>
    <a href="{{ route('carritos.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
