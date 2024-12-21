<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\LoginController;
use GuzzleHttp\Middleware;

Route::view('/', 'welcome')->name('welcome');//es lo hace iniciar la pagina
Route::resource('users', UserController::class);
Route::resource('productos', ProductosController::class);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [LoginController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [LoginController::class, 'register']);

Route::resource('productos', ProductosController::class);
Route::resource('users', UserController::class);

Route::resource('carritos', CarritoController::class)->only(['index', 'store', 'destroy']);
Route::resource('compras', CompraController::class);

Route::post('files', [FileController::class, 'store'])->name('files.store');
Route::get('files/create', [FileController::class, 'create'])->name('files.create');
Route::post('files', [FileController::class, 'store'])->name('files.store');
Route::get('files', [FileController::class, 'index'])->name('files.index');
Route::get('files/download/{file}', [FileController::class, 'download'])->name('files.download');
Route::delete('files/{file}', [FileController::class, 'destroy'])->name('files.destroy');

Route::get('/administer', function () {
    return view('administer');
})->middleware('auth')->name('administer');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

//---------------=======================
Route::get('/welcome_user', function () {
    return view('welcome_user');
})->name('welcome_user')->middleware('auth');

Route::get('/welcome_admin', function () {
    return view('welcome_admin');
})->name('welcome_admin')->middleware('auth');




// Route::get('/productos', [LoginController::class, 'showRegistrationForm'])->name('productos');
// Route::post('/productos', [LoginController::class, 'productos']);

// Route::resource('crud_productitos.index', ProductosController::class);
// Route::get('crud_productitos.index', [ProductosController::class, 'index'])->name('crud_productitos.index');
// Route::resource('cliente', ClienteController::class);
// Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');

// Route::resource('productos', ProductosController::class);
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);

// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');