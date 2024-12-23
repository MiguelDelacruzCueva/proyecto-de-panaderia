<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->tipo == 3) {
                return redirect()->route('administer');
            } else {
                return redirect()->route('principal');
            }
        }
        return back()->withErrors([
            'email' => 'El correo proporcionado no coincide con nuestros registros.',
        ]);
    }
    //peromite darnos opciones al ingresar nuestros datos , las opciones en este caso de usuario y tienda
    public function showRegistrationForm()
    {
        // $cargos = Cargo::all();
        return view('auth.register');
        // , compact('cargos')
    }


    public function register(Request $request)
    {
        //validamos los datos

        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'tipo' => 'required|exists:cargos,id',
            'nombre_tienda' => 'nullable|string|max:255',
            'ruc' => 'nullable|string|max:255',
        ]);
        //hacemos el registro

        $usuario = User::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tipo' => $request->tipo,
            'nombre_tienda' => $request->nombre_tienda,
            'ruc' => $request->ruc,
        ]);
        Auth::login($usuario);

        return redirect()->route('principal');
    }
//nos permite regresar al salir de la sesion
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}