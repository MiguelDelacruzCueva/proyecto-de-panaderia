<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body>
<div class="container mx-auto px-4">
    <div class="max-w-md mx-auto bg-white p-8 border border-gray-300 rounded-lg">
        <h1 class="text-2xl font-bold mb-6">Registrarse</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" name="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirmar Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="tipo" class="block text-gray-700 text-sm font-bold mb-2">Tipo</label>
                <div>
                    <label>
                        <input type="radio" name="tipo" value="1" checked> Usuario
                    </label>
                    <label>
                        <input type="radio" name="tipo" value="2"> Tienda
                    </label>
                </div>
            </div>
            <div id="tienda-fields" class="hidden">
                <div class="mb-4">
                    <label for="nombre_tienda" class="block text-gray-700 text-sm font-bold mb-2">Nombre de la Tienda</label>
                    <input type="text" name="nombre_tienda" id="nombre_tienda" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="ruc" class="block text-gray-700 text-sm font-bold mb-2">RUC</label>
                    <input type="text" name="ruc" id="ruc" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Registrarse
                </button>
                <a href="{{ route('login') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    Ya tengo una cuenta
                </a>
            </div>
        </form>
    </div>
</div>
<script>
    const tipoRadios = document.querySelectorAll('input[name="tipo"]');
    const tiendaFields = document.getElementById('tienda-fields');

    tipoRadios.forEach(radio => {
        radio.addEventListener('change', (event) => {
            if (event.target.value === '2') {
                tiendaFields.classList.remove('hidden');
            } else {
                tiendaFields.classList.add('hidden');
            }
        });
    });
</script>
</body>
</html>