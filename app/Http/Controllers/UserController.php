<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Cargo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::with('cargo')->get();
        return view('users.index', compact('usuarios'));
    }

    public function create()
    {
        $cargos = Cargo::all();
        return view('users.create', compact('cargos'));
       
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'tipo' => 'required|exists:cargos,id',
            'nombre_tienda' => 'nullable|string|max:255',
            'ruc' => 'nullable|string|max:255',
        ]);

        User::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tipo' => $request->tipo,
            'nombre_tienda' => $request->nombre_tienda,
            'ruc' => $request->ruc,
        ]);

        return redirect()->route('users.index')->with('success', 'Usuario creado exitosamente.');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $cargos = Cargo::all();
        return view('users.edit', compact('user', 'cargos'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'tipo' => 'required|exists:cargos,id',
            'nombre_tienda' => 'nullable|string|max:255',
            'ruc' => 'nullable|string|max:255',
        ]);

        $user->update([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
            'tipo' => $request->tipo,
            'nombre_tienda' => $request->nombre_tienda,
            'ruc' => $request->ruc,
        ]);

        return redirect()->route('users.index')->with('success', 'Usuario actualizado exitosamente.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Usuario eliminado exitosamente.');
    }
}