@extends('layouts.header')
@extends('layouts.footer')

@section('header')

<div class="container">
    <h1>Carrito de Compras</h1>
    <a href="{{ route('administer') }}" class="btn btn-secundary">Volver</a>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($carritos as $carrito)
                <tr>
                    <td>{{ $carrito->producto->nombre }}</td>
                    <td>{{ $carrito->cantidad }}</td>
                    <td>{{ $carrito->precio_total }}</td>
                    <td>
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