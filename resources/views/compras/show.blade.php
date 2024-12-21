@extends('layouts.header')
@extends('layouts.footer')

@section('header')
<div class="container">
    <h1>Detalles de la Compra</h1>
    <div class="mb-3">
        <label for="producto" class="form-label">Producto</label>
        <input type="text" class="form-control" id="producto" name="producto" value="{{ $compra->producto->nombre }}" readonly>
    </div>
    <div class="mb-3">
        <label for="cantidad" class="form-label">Cantidad</label>
        <input type="text" class="form-control" id="cantidad" name="cantidad" value="{{ $compra->cantidad }}" readonly>
    </div>
    <div class="mb-3">
        <label for="precio_total" class="form-label">Precio Total</label>
        <input type="text" class="form-control" id="precio_total" name="precio_total" value="{{ $compra->precio_total }}" readonly>
    </div>
    <div class="mb-3">
        <label for="modo_pago" class="form-label">Modo de Pago</label>
        <input type="text" class="form-control" id="modo_pago" name="modo_pago" value="{{ ucfirst($compra->modo_pago) }}" readonly>
    </div>
    <div class="mb-3">
        <label for="estado" class="form-label">Estado</label>
        <input type="text" class="form-control" id="estado" name="estado" value="{{ ucfirst($compra->estado) }}" readonly>
    </div>
    <a href="{{ route('compras.index') }}" class="btn btn-primary">Volver</a>
</div>

@section('footer')
@endsection