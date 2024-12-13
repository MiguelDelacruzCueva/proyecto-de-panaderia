@extends('layouts.header')
@extends('layouts.footer')

@section('header')

<div class="container mt-4">
    <h2>LISTA DE CLIENTES</h2>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('clientes.create') }}" class="btn btn-primary">Nuevo Registro</a>
                    <hr>
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th>Orden</th>
                                <th>Nombres</th>
                                <th>DNI</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Correo</th>
                                <th>Celular</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nombres }}</td>
                                <td>{{ $item->dni }}</td>
                                <td>{{ $item->apellido_paterno }}</td>
                                <td>{{ $item->apellido_materno }}</td>
                                <td>{{ $item->correo }}</td>
                                <td>{{ $item->celular }}</td>
                                <td>{{ $item->fecha_nacimiento }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('clientes.show', ['cliente' => $item->id]) }}" class="btn btn-info mr-2">
                                            Mostrar
                                        </a>
                                        <a href="{{ route('clientes.edit', ['cliente' => $item->id]) }}" class="btn btn-warning mr-2">Editar</a>
                                        <a href="{{ route('clientes.destroy', ['cliente' => $item->id]) }}" class="btn btn-danger" onclick="event.preventDefault(); if(confirm('¿Estás seguro de que deseas eliminar esta dirección?')) { document.getElementById('delete-form-{{ $item->id }}').submit(); }">
                                            Eliminar
                                        </a>
                                        <form id="delete-form-{{ $item->id }}" action="{{ route('clientes.destroy', ['cliente' => $item->id]) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="9">No hay clientes registrados.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@section('footer')
@endsection