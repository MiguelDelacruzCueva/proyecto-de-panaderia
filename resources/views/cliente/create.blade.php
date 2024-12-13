@extends('layouts.header')
@extends('layouts.footer')

@section('header')
<div class="container">
    <h1>Crear Usuario</h1>
    <form action="{{ route('cliente.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
        </div>
        <div class="mb-3">
            <label for="es_admin" class="form-label">Es Admin</label>
            <select class="form-control" id="es_admin" name="es_admin" required>
                <option value="1">Sí</option>
                <option value="0">No</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <select class="form-control" id="tipo" name="tipo" required>
                <option value="usuario">Usuario</option>
                <option value="tienda">Tienda</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="nombre_tienda" class="form-label">Nombre de la Tienda</label>
            <input type="text" class="form-control" id="nombre_tienda" name="nombre_tienda">
        </div>
        <div class="mb-3">
            <label for="ruc" class="form-label">RUC</label>
            <input type="text" class="form-control" id="ruc" name="ruc">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</div>
@section('footer')
@endsection