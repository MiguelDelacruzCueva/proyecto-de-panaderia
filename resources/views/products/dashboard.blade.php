<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Panadería</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100"> 
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <a href="#" class="flex items-center py-4 px-2">
                            <span class="font-semibold text-gray-500 text-lg">Panadería</span>
                        </a>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <a href="#" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-blue-500 hover:text-white transition duration-300">Bienvenido, {{ Auth::user()->nombre }}</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="py-2 px-2 font-medium text-white bg-blue-500 rounded hover:bg-blue-400 transition duration-300">Cerrar Sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
        @if(Auth::user()->esTienda())
            <p>Bienvenido a tu panel de control, {{ Auth::user()->nombre_tienda }}.</p>
            <p>RUC: {{ Auth::user()->ruc }}</p>
        @else
            <p>Bienvenido a tu panel de control, {{ Auth::user()->nombre }}.</p>
        @endif
    </div>
</body>
</html>

