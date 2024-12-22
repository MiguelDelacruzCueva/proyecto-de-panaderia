@extends('layouts.header')
@extends('layouts.footer')

@section('header')
<div class="container">
    <h1 class="my-4">Lista de Compras</h1>
    <a href="{{ route('administer') }}" class="btn btn-secundary">Volver</a>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio Total</th>
                <th>Modo de Pago</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($compras as $compra)
                <tr>
                    <td>{{ $compra->producto->nombre }}</td>
                    <td>{{ $compra->cantidad }}</td>
                    <td>{{ $compra->precio_total }}</td>
                    <td>{{ ucfirst($compra->modo_pago) }}</td>
                    <td>{{ ucfirst($compra->estado) }}</td>
                    <td>
                        <a href="{{ route('compras.show', $compra->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('compras.edit', $compra->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('compras.destroy', $compra->id) }}" method="POST" style="display:inline;">
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