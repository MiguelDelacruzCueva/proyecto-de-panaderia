<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/productos', [AuthController::class, 'showRegistrationForm'])->name('productos');
Route::post('/productos', [AuthController::class, 'productos']);

Route::resource('crud_productitos.index', ProductosController::class);
Route::get('crud_productitos.index', [ProductosController::class, 'index'])->name('crud_productitos.index');
Route::resource('cliente', ClienteController::class);
Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');

Route::resource('productos', ProductosController::class);
Route::get('/administer', function () {
    return view('administer');
})->name('administer');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');


