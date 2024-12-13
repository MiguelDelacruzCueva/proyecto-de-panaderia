@extends('layouts.header')
@extends('layouts.footer')

@section('header')
<div class="container">
    <h1>Crear Carrito</h1>
    <form action="{{ route('carritos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="usuario_id" class="form-label">Usuario</label>
            <select class="form-control" id="usuario_id" name="usuario_id" required>
                @foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="producto_id" class="form-label">Producto</label>
            <select class="form-control" id="producto_id" name="producto_id" required>
                @foreach($productos as $producto)
                    <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" required>
        </div>
        <div class="mb-3">
            <label for="precio_total" class="form-label">Precio Total</label>
            <input type="number" class="form-control" id="precio_total" name="precio_total" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</div>
@section('footer')
@endsection