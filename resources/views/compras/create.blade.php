
@extends('layouts.header')
@extends('layouts.footer')

@section('header')
<div class="container">
    <h1 class="my-4">Realizar Compra</h1>
    <form action="{{ route('compras.store') }}" method="POST">
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
        <div class="mb-3">
            <label for="modo_pago" class="form-label">Modo de Pago</label>
            <select class="form-control" id="modo_pago" name="modo_pago" required>
                <option value="efectivo">Efectivo</option>
                <option value="tarjeta">Tarjeta</option>
                <option value="transferencia">Transferencia</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select class="form-control" id="estado" name="estado" required>
                <option value="pagado">Pagado</option>
                <option value="pendiente">Pendiente</option>
                <option value="enviado">Enviado</option>
                <option value="entregado">Entregado</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Realizar Compra</button>
    </form>
</div>
@section('footer')
@endsection