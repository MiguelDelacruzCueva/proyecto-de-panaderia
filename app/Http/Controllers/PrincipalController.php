<?php
namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('principal', compact('productos'));
    }
}