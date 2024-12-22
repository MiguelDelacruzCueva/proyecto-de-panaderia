@extends('layouts.header')
@extends('layouts.footer')

@section('header')
<div class="container">
    <h1>Crear Producto</h1>
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="categoria" class="form-label">Categoría</label>
            <select class="form-control" id="categoria" name="categoria" required>
                <option value="pan">Pan</option>
                <option value="postre">Postre</option>
                <option value="galleta">Galleta</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
        </div>


        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen</label>
            <div class="mb-3">
            <label for="imagen" class="form-label">Imagen</label>
            <input type="file" class="form-control" id="imagen" name="imagen" required>
        </div>
            <!-- <div  action="{{ route('files.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required>
                @error('imagen')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              
          </div> -->
        </div>

        <div class="mb-3">
            <label for="disponibilidad" class="form-label">Disponibilidad</label>
            <select class="form-control" id="disponibilidad" name="disponibilidad" required>
                <option value="1">Disponible</option>
                <option value="0">No Disponible</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href ="{{route('productos.index')}}" class= "btn btn-secundary">volver</a>
    
    </form>
</div>
@section('footer')
@endsection