<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito - Capito's Bakery</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/cart.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <i class="fas fa-bread-slice me-2"></i>
                Capito's Bakery
            </a>
            <div class="d-flex align-items-center">
                <div class="user-info me-3">
                    <i class="fas fa-user me-2"></i>
                    <span>{{ Auth::user()->nombre }}</span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Cart Content -->
    <div class="container my-5 pt-5">
        <h2 class="text-center mb-4">Tu Carrito</h2>
        
        <div class="row">
            <div class="col-lg-8">
                <!-- Cart Items -->
                <div class="cart-items">
                    @foreach($carritos as $carrito)
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <img src="{{ asset($carrito->producto->imagen) }}" class="img-fluid rounded" alt="{{ $carrito->producto->nombre }}">
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="card-title">{{ $carrito->producto->nombre }}</h5>
                                        <p class="text-muted">{{ $carrito->producto->descripcion }}</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-muted">Cantidad: {{ $carrito->cantidad }}</p>
                                    </div>
                                    <div class="col-md-3 text-end">
                                        <p class="text-muted">€{{ number_format($carrito->precio_total, 2) }}</p>
                                        <form action="{{ route('carritos.destroy', $carrito) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Cart Summary -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Resumen del Pedido</h5>
                        <p class="card-text">Total: €{{ number_format($carritos->sum('precio_total'), 2) }}</p>
                        <a href="{{ route('checkout') }}" class="btn btn-primary">Proceder al Pago</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>