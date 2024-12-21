<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Compra;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompraController extends Controller
{
    public function index()
    {
        $compras = Compra::with('producto')->where('usuario_id', Auth::id())->get();
        return view('compras.index', compact('compras'));
    }

    public function create()
    {
        $productos = Producto::all();
        return view('compras.create', compact('productos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'cantidad' => 'required|integer|min:1',
            'modo_pago' => 'required|in:efectivo,tarjeta,transferencia',
            'estado' => 'required|in:pagado,pendiente,enviado,entregado',
        ]);

        $producto = Producto::find($request->producto_id);
        $precio_total = $producto->precio * $request->cantidad;

        Compra::create([
            'usuario_id' => Auth::id(),
            'producto_id' => $request->producto_id,
            'cantidad' => $request->cantidad,
            'precio_total' => $precio_total,
            'modo_pago' => $request->modo_pago,
            'estado' => $request->estado,
        ]);

        return redirect()->route('compras.index')->with('success', 'Compra realizada exitosamente.');
    }

    public function show(Compra $compra)
    {
        return view('compras.show', compact('compra'));
    }

    public function edit(Compra $compra)
    {
        $productos = Producto::all();
        return view('compras.edit', compact('compra', 'productos'));
    }

    public function update(Request $request, Compra $compra)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'cantidad' => 'required|integer|min:1',
            'modo_pago' => 'required|in:efectivo,tarjeta,transferencia',
            'estado' => 'required|in:pagado,pendiente,enviado,entregado',
        ]);

        $producto = Producto::find($request->producto_id);
        $precio_total = $producto->precio * $request->cantidad;

        $compra->update([
            'producto_id' => $request->producto_id,
            'cantidad' => $request->cantidad,
            'precio_total' => $precio_total,
            'modo_pago' => $request->modo_pago,
            'estado' => $request->estado,
        ]);

        return redirect()->route('compras.index')->with('success', 'Compra actualizada exitosamente.');
    }

    public function destroy(Compra $compra)
    {
        $compra->delete();
        return redirect()->route('compras.index')->with('success', 'Compra eliminada exitosamente.');
    }
}