<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Carrito;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
    public function index()
    {
        $carritos = Carrito::where('usuario_id', Auth::id())->get();
        return view('carrito.index', compact('carritos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'cantidad' => 'required|integer|min:1',
        ]);

        $producto = Producto::find($request->producto_id);
        $precio_total = $producto->precio * $request->cantidad;

        Carrito::create([
            'usuario_id' => Auth::id(),
            'producto_id' => $request->producto_id,
            'cantidad' => $request->cantidad,
            'precio_total' => $precio_total,
        ]);

        return redirect()->route('carritos.index')->with('success', 'Producto añadido al carrito.');
    }

    public function destroy(Carrito $carrito)
    {
        $carrito->delete();
        return redirect()->route('carritos.index')->with('success', 'Producto eliminado del carrito.');
    }
}