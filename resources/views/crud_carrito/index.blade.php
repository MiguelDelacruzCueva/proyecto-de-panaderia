@extends('layouts.header')
@extends('layouts.footer')

@section('header')
<div class="container">
    <h1>Lista de Carritos</h1>
    <a href="{{ route('carritos.create') }}" class="btn btn-primary">Crear Carrito</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($carritos as $carrito)
                <tr>
                    <td>{{ $carrito->usuario->nombre }}</td>
                    <td>{{ $carrito->producto->nombre }}</td>
                    <td>{{ $carrito->cantidad }}</td>
                    <td>{{ $carrito->precio_total }}</td>
                    <td>
                        <a href="{{ route('carritos.show', $carrito->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('carritos.edit', $carrito->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('carritos.destroy', $carrito->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@section('footer')
@endsection