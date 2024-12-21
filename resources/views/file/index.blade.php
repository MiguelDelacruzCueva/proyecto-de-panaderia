
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Archivos Subidos</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Archivo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($files as $file)
                <tr>
                    <td>{{ basename($file) }}</td>
                    <td>
                        <a href="{{ route('files.download', basename($file)) }}" class="btn btn-info btn-sm">Descargar</a>
                        <form action="{{ route('files.destroy', basename($file)) }}" method="POST" style="display:inline;">
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
@endsection