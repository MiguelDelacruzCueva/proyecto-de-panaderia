<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('crud_productitos.index', compact('productos'));
    }

    public function create()
    {
        return view('crud_productitos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria' => 'required|in:pan,postre',
            'precio' => 'required|numeric',
            'descripcion' => 'required|string',
            'imagen' => 'required|string',
            'disponibilidad' => 'required|boolean',
        ]);

        Producto::create($request->all());

        return redirect()->route('productos.index');
    }

    public function show($id)
    {
        $producto = Producto::find($id);
        return view('crud_productitos.show', compact('producto'));
    }

    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('crud_productitos.edit', compact('producto'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria' => 'required|in:pan,postre',
            'precio' => 'required|numeric',
            'descripcion' => 'required|string',
            'imagen' => 'required|string',
            'disponibilidad' => 'required|boolean',
        ]);

        $producto = Producto::find($id);
        $producto->update($request->all());

        return redirect()->route('productos.index');
    }

    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();

        return redirect()->route('productos.index');
    }
}