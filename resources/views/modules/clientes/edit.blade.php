@extends('layouts.header')
@extends('layouts.footer')

@section('header')
<div class="container mt-4">
    <h2>Editar Cliente</h2>
    <form action="{{ route('clientes.update', ['cliente' => $item->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombres">Nombres</label>
            <input type="text" name="nombres" id="nombres" class="form-control" value="{{ $item->nombres }}" required>
        </div>
        <div class="form-group">
            <label for="dni">DNI</label>
            <input type="text" name="dni" id="dni" class="form-control" value="{{ $item->dni }}" required>
        </div>
        <div class="form-group">
            <label for="apellido_paterno">Apellido Paterno</label>
            <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control" value="{{ $item->apellido_paterno }}" required>
        </div>
        <div class="form-group">
            <label for="apellido_materno">Apellido Materno</label>
            <input type="text" name="apellido_materno" id="apellido_materno" class="form-control" value="{{ $item->apellido_materno }}" required>
        </div>
        <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" name="correo" id="correo" class="form-control" value="{{ $item->correo }}" required>
        </div>
        <div class="form-group">
            <label for="celular">Celular</label>
            <input type="text" name="celular" id="celular" class="form-control" value="{{ $item->celular }}" required>
        </div>
        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="{{ $item->fecha_nacimiento }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@section('footer')
@endsection