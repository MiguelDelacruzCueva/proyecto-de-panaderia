@extends('layouts.header')
@extends('layouts.footer')

@section('header')
<div class="container">
    <h1>Editar Producto</h1>
    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="categoria" class="form-label">Categoría</label>
            <select class="form-control" id="categoria" name="categoria" required>
                <option value="pan" {{ $producto->categoria == 'pan' ? 'selected' : '' }}>Pan</option>
                <option value="postre" {{ $producto->categoria == 'postre' ? 'selected' : '' }}>Postre</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" class="form-control" id="precio" name="precio" step="0.01" value="{{ $producto->precio }}" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" required>{{ $producto->descripcion }}</textarea>
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen</label>
            <input type="text" class="form-control" id="imagen" name="imagen" value="{{ $producto->imagen }}" required>
        </div>
        <div class="mb-3">
            <label for="disponibilidad" class="form-label">Disponibilidad</label>
            <select class="form-control" id="disponibilidad" name="disponibilidad" required>
                <option value="1" {{ $producto->disponibilidad ? 'selected' : '' }}>Disponible</option>
                <option value="0" {{ !$producto->disponibilidad ? 'selected' : '' }}>No Disponible</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@section('footer')
@endsection