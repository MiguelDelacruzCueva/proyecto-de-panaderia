
@extends('layouts.header')
@extends('layouts.footer')

@section('header')
<div class="container">
    <h1 class="my-4">Editar Compra</h1>
    <form action="{{ route('compras.update', $compra->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="producto_id" class="form-label">Producto</label>
            <select class="form-control" id="producto_id" name="producto_id" required>
                @foreach($productos as $producto)
                    <option value="{{ $producto->id }}" {{ $compra->producto_id == $producto->id ? 'selected' : '' }}>{{ $producto->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{ $compra->cantidad }}" required>
        </div>
        <div class="mb-3">
            <label for="modo_pago" class="form-label">Modo de Pago</label>
            <select class="form-control" id="modo_pago" name="modo_pago" required>
                <option value="efectivo" {{ $compra->modo_pago == 'efectivo' ? 'selected' : '' }}>Efectivo</option>
                <option value="tarjeta" {{ $compra->modo_pago == 'tarjeta' ? 'selected' : '' }}>Tarjeta</option>
                <option value="transferencia" {{ $compra->modo_pago == 'transferencia' ? 'selected' : '' }}>Transferencia</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select class="form-control" id="estado" name="estado" required>
                <option value="pagado" {{ $compra->estado == 'pagado' ? 'selected' : '' }}>Pagado</option>
                <option value="pendiente" {{ $compra->estado == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                <option value="enviado" {{ $compra->estado == 'enviado' ? 'selected' : '' }}>Enviado</option>
                <option value="entregado" {{ $compra->estado == 'entregado' ? 'selected' : '' }}>Entregado</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Compra</button>
    </form>
</div>
@section('footer')
@endsection