<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('cliente.index', compact('usuarios'));
    }

    public function create()
    {
        return view('cliente.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios',
            'password' => 'required|string|min:8|confirmed',
            'es_admin' => 'required|boolean',
            'tipo' => 'required|in:usuario,tienda',
            'nombre_tienda' => 'nullable|string|max:255',
            'ruc' => 'nullable|string|max:20',
        ]);

        Usuario::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'es_admin' => $request->es_admin,
            'tipo' => $request->tipo,
            'nombre_tienda' => $request->nombre_tienda,
            'ruc' => $request->ruc,
        ]);

        return redirect()->route('cliente.index');
    }

    public function show($id)
    {
        $usuario = Usuario::find($id);
        return view('cliente.show', compact('usuario'));
    }

    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view('cliente.edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
            'es_admin' => 'required|boolean',
            'tipo' => 'required|in:usuario,tienda',
            'nombre_tienda' => 'nullable|string|max:255',
            'ruc' => 'nullable|string|max:20',
        ]);

        $usuario = Usuario::find($id);
        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        if ($request->filled('password')) {
            $usuario->password = bcrypt($request->password);
        }
        $usuario->es_admin = $request->es_admin;
        $usuario->tipo = $request->tipo;
        $usuario->nombre_tienda = $request->nombre_tienda;
        $usuario->ruc = $request->ruc;
        $usuario->save();

        return redirect()->route('cliente.index');
    }

    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect()->route('cliente.index');
    }
}