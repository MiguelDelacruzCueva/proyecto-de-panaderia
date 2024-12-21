<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .section-card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .section-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .icon-container {
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Panel de Administración</a>
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-outline-light">Salir</button>
            </form>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Gestión de Datos (CRUD)</h1>
        
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card section-card">
                    <div class="card-body text-center">
                        <div class="icon-container">
                            <i class="bi bi-person" style="font-size: 4rem;"></i>
                        </div>
                        <h5 class="card-title">USUARIOS</h5>
                        <a href="{{ route('users.index') }}" class="btn btn-primary">Gestionar</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mb-4">
                <div class="card section-card">
                    <div class="card-body text-center">
                        <div class="icon-container">
                            <i class="bi bi-basket" style="font-size: 4rem;"></i>
                        </div>
                        <h5 class="card-title">PRODUCTOS</h5>
                        <a href="{{ route('productos.index') }}" class="btn btn-primary">Gestionar</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mb-4">
                <div class="card section-card">
                    <div class="card-body text-center">
                        <div class="icon-container">
                            <i class="bi bi-cart" style="font-size: 4rem;"></i>
                        </div>
                        <h5 class="card-title">CARRITOS</h5>
                        <a href="{{ route('carritos.index') }}" class="btn btn-primary">Gestionar</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mb-4">
                <div class="card section-card">
                    <div class="card-body text-center">
                        <div class="icon-container">
                            <i class="bi bi-bag-check" style="font-size: 4rem;"></i>
                        </div>
                        <h5 class="card-title">COMPRAS</h5>
                        <a href="{{ route('compras.index') }}" class="btn btn-primary">Gestionar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
    <div class="container mt-5 text-center">
        <img src="https://i.pinimg.com/736x/a1/c8/e6/a1c8e6e183d39cc6339c6105440bd123.jpg" alt="Imagen de capi" class="img-fluid" style="max-width: 100%; height: auto;">
    </div>

    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Panel de Administración. Todos los derechos reservados.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.section-card');
            cards.forEach(card => {
                card.addEventListener('mouseenter', () => {
                    card.style.backgroundColor = '#f8f9fa';
                });
                card.addEventListener('mouseleave', () => {
                    card.style.backgroundColor = '#fff';
                });
            });
        });
    </script>
</body>
</html>