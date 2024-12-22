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
                    <span>Juan Pérez</span>
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
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff" class="img-fluid rounded" alt="Pan">
                                </div>
                                <div class="col-md-4">
                                    <h5 class="card-title">Pan de Masa Madre</h5>
                                    <p class="text-muted">Artesanal</p>
                                </div>
                                <div class="col-md-3">
                                    <div class="quantity-control">
                                        <button class="btn btn-sm btn-outline-secondary" onclick="updateQuantity(1, -1)">-</button>
                                        <span class="mx-2">2</span>
                                        <button class="btn btn-sm btn-outline-secondary" onclick="updateQuantity(1, 1)">+</button>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <span class="price">€5.99</span>
                                </div>
                                <div class="col-md-1">
                                    <button class="btn btn-link text-danger" onclick="removeItem(1)">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Resumen del Pedido</h5>
                        <div class="d-flex justify-content-between mb-3">
                            <span>Subtotal</span>
                            <span>€11.98</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <span>Envío</span>
                            <span>€3.00</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-4">
                            <strong>Total</strong>
                            <strong>€14.98</strong>
                        </div>
                        <button class="btn btn-primary w-100 mb-3">
                            Proceder al Pago
                            <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                        <a href="products.html" class="btn btn-outline-secondary w-100">
                            <i class="fas fa-arrow-left me-2"></i>
                            Seguir Comprando
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/cart.js"></script>
</body>
</html>