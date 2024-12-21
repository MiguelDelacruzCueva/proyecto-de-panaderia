@extends('layouts.header')
@extends('layouts.footer')

@section('header')
<div class="container">
    <h1>Añadir Producto al Carrito</h1>
    <form action="{{ route('carritos.store') }}" method="POST">
        @csrf
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
        <button type="submit" class="btn btn-primary">Añadir</button>
    </form>
</div>
@section('footer')
@endsection