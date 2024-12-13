@extends('layouts.header')
@extends('layouts.footer')

@section('header')
<div class="container mt-4">
    <h2>Información del Cliente</h2>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <label for="nombres">Nombres</label>
                    <input type="text" name="nombres" id="nombres" class="form-control" value="{{ $item->nombres }}" readonly>
                    <label for="dni">DNI</label>
                    <input type="text" name="dni" id="dni" class="form-control" value="{{ $item->dni }}" readonly>
                    <label for="apellido_paterno">Apellido Paterno</label>
                    <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control" value="{{ $item->apellido_paterno }}" readonly>
                    <label for="apellido_materno">Apellido Materno</label>
                    <input type="text" name="apellido_materno" id="apellido_materno" class="form-control" value="{{ $item->apellido_materno }}" readonly>
                    <label for="correo">Correo</label>
                    <input type="text" name="correo" id="correo" class="form-control" value="{{ $item->correo }}" readonly>
                    <label for="celular">Celular</label>
                    <input type="text" name="celular" id="celular" class="form-control" value="{{ $item->celular }}" readonly>
                    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                    <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="{{ $item->fecha_nacimiento }}" readonly>
                </div>
            </div>
        </div>
    </div>
</div>
@section('footer')
@endsection