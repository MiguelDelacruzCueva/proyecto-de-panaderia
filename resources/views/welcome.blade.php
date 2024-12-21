@extends('layouts.header')
@extends('layouts.footer')

@section('header')
</head>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-bread-slice me-2"></i>
                PANADERIA CAPI-TAN
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#inicio">Inicio</a>
                    </li>
                </ul>
                <div class="ms-lg-3">
                    <a href="{{route('login')}}" method ="get" class="btn btn-outline-light me-2">Iniciar Sesión</a>
                    <a href="{{ route('register') }}" method="get" class="btn btn-primary">Registrarse</a>
                    <a href="{{ route('administer') }}" method="get" class="btn btn-secundary">admins</a>
                
                </div>
            </div>
        </div>
    </nav>
<body>

    <!-- Hero Section -->
    <section id="inicio" class="hero">
        <div class="hero-overlay"></div>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center text-white">
                    <h1 class="display-3 fw-bold mb-4 animate-up">PANADERIA CAPI</h1>
                    <p class="lead mb-5 animate-up delay-1">Descubre el auténtico sabor de la panadería artesanal echo por un capibara real  o echo de un capibara real ?</p>
                    <div class="animate-up delay-2">
                        <a href="#productos" class="btn btn-primary btn-lg me-3">Ver Productos</a>
                        <a href="#contacto" class="btn btn-outline-light btn-lg">Contáctanos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="caracteristicas" class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-bread-slice"></i>
                        <h3>Pan Artesanal</h3>
                        <p>Elaborado con masa madre y bien horneado </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-coffee"></i>
                        <h3>Galletas artesanales</h3>
                        <p>galletas con distintos sabores y formas que te enamoraran</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-cookie"></i>
                        <h3>Pastelería </h3>
                        <p>pasteles de todos los tamaños y</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Carousel -->
    <section id="productos" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Nuestros Productos más Vendidos</h2>
            <div class="product-carousel">
                <!-- Products will be inserted here by JavaScript -->
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contacto" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="mb-4">Visítanos</h2>
                    <div class="contact-info">
                        <div class="d-flex mb-3">
                            <i class="fas fa-clock me-3"></i>
                            <div>
                                <h5>Horario</h5>
                                <p>Lunes a Sábado: 7:00 AM - 8:00 PM<br>
                                   Domingo: 8:00 AM - 3:00 PM</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <i class="fas fa-map-marker-alt me-3"></i>
                            <div>
                                <h5>Ubicación</h5>
                                <p>Calle Principal 123<br>
                                   Ciudad, País</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    @endsection

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Footer -->
    @section('footer')
    @endsection
    
</body>
</html>