<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Productos - Capito'S Bakery</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
</head>
<body>
    <header>
        <h1 class="Title">Capito'S Bakery</h1>
        
        <div class="menu-icon" onclick="toggleMenu()">☰</div>
        <nav class="menu" id="menu">
            <button class="close-menu" onclick="toggleMenu()">×</button>
            <ul>
                <li><a href="#"><i class="fas fa-home"></i> Inicio</a></li>
                <li><a href="#panes"><i class="fas fa-bread-slice"></i> Panes</a></li>
                <li><a href="#pasteleria"><i class="fas fa-birthday-cake"></i> Pastelería</a></li>
                <li><a href="#galletas"><i class="fas fa-cookie"></i> Galletas</a></li>
                <li><a href="#"><i class="fas fa-shopping-cart"></i> Carrito</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-link logout-button">
                            <i class="fas fa-sign-out-alt"></i> Salir
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h1>Hola, {{ Auth::user()->nombre }}!</h1>
        <p>Bienvenido a la aplicación.</p>
        <section id="panes" class="section">
            <h2>Nuestros Panes</h2>
            <div class="product-grid">
                @foreach($productos->where('categoria', 'pan') as $producto)
                    <div class="product">
                        <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}">
                        <h3>{{ $producto->nombre }}</h3>
                        <p>
                            <span>€{{ $producto->precio }}</span>
                            <button class="add-to-cart" onclick="addToCart('{{ $producto->nombre }}', '{{ $producto->precio }}')">
                                <i class="fas fa-shopping-cart"></i> Añadir
                            </button>
                        </p>
                    </div>
                @endforeach
            </div>
        </section>

        <section id="pasteleria" class="section">
            <h2>Pastelería Artesanal</h2>
            <div class="product-grid">
                @foreach($productos->where('categoria', 'postre') as $producto)
                    <div class="product">
                        <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}">
                        <h3>{{ $producto->nombre }}</h3>
                        <p>
                            <span>€{{ $producto->precio }}</span>
                            <button class="add-to-cart" onclick="addToCart('{{ $producto->nombre }}', '{{ $producto->precio }}')">
                                <i class="fas fa-shopping-cart"></i> Añadir
                            </button>
                        </p>
                    </div>
                @endforeach
            </div>
        </section>

        <section id="galletas" class="section">
            <h2>Galletas Caseras</h2>
            <div class="product-grid">
                @foreach($productos->where('categoria', 'galleta') as $producto)
                    <div class="product">
                        <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}">
                        <h3>{{ $producto->nombre }}</h3>
                        <p>
                            <span>€{{ $producto->precio }}</span>
                            <button class="add-to-cart" onclick="addToCart('{{ $producto->nombre }}', '{{ $producto->precio }}')">
                                <i class="fas fa-shopping-cart"></i> Añadir
                            </button>
                        </p>
                    </div>
                @endforeach
            </div>
        </section>
    </div>

    <script>
        // Toggle menu
        function toggleMenu() {
            document.getElementById('menu').classList.toggle('active');
        }

        // Add to cart function
        function addToCart(name, price) {
            // Here you would typically implement cart functionality
            const message = `${name} añadido al carrito - €${price}`;
            const notification = document.createElement('div');
            notification.style.cssText = `
                position: fixed;
                bottom: 20px;
                right: 20px;
                background: var(--primary-color);
                color: white;
                padding: 1rem;
                border-radius: 5px;
                animation: slideIn 0.3s ease forwards;
                z-index: 1000;
            `;
            notification.textContent = message;
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.style.animation = 'slideOut 0.3s ease forwards';
                setTimeout(() => notification.remove(), 300);
            }, 2000);
        }

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    toggleMenu(); // Close menu if open
                }
            });
        });
    </script>
</body>
</html>