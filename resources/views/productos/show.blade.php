@extends('layouts.header')
@extends('layouts.footer')

@section('header')
<div class="container">
    <h1>Detalles del Producto</h1>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}" readonly>
    </div>
    <div class="mb-3">
        <label for="categoria" class="form-label">Categoría</label>
        <input type="text" class="form-control" id="categoria" name="categoria" value="{{ $producto->categoria }}" readonly>
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="text" class="form-control" id="precio" name="precio" value="{{ $producto->precio }}" readonly>
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea class="form-control" id="descripcion" name="descripcion" readonly>{{ $producto->descripcion }}</textarea>
    </div>
    <div class="mb-3">
        <label for="imagen" class="form-label">Imagen</label>
        <input type="text" class="form-control" id="imagen" name="imagen" value="{{ $producto->imagen }}" readonly>
    </div>
    <div class="mb-3">
        <label for="disponibilidad" class="form-label">Disponibilidad</label>
        <input type="text" class="form-control" id="disponibilidad" name="disponibilidad" value="{{ $producto->disponibilidad ? 'Disponible' : 'No Disponible' }}" readonly>
    </div>
    <a href="{{ route('productos.index') }}" class="btn btn-primary">Volver</a>
</div>
@section('footer')
@endsection