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
    <style>
        :root {
            --primary-color: #E3B505;
            --secondary-color: #2B2B2B;
            --accent-color: #D4A017;
            --background-color: #FDF7F2;
            --text-color: #333333;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
        }

        header {
            background-color: var(--secondary-color);
            padding: 1rem;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .Title {
            font-family: 'Playfair Display', serif;
            color: white;
            font-size: 1.8rem;
            margin: 0;
        }

        .menu-icon {
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            display: none;
        }

        .menu {
            background-color: var(--secondary-color);
            padding: 1rem;
        }

        .menu ul {
            list-style: none;
            display: flex;
            gap: 2rem;
            margin: 0;
            padding: 0;
        }

        .menu a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .menu a:hover {
            color: var(--primary-color);
        }

        .close-menu {
            display: none;
        }

        .container {
            max-width: 1200px;
            margin: 80px auto 0;
            padding: 2rem;
        }

        .section {
            margin-bottom: 4rem;
        }

        .section h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 2rem;
            text-align: center;
            position: relative;
        }

        .section h2::after {
            content: '';
            display: block;
            width: 80px;
            height: 3px;
            background-color: var(--primary-color);
            margin: 1rem auto;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 2rem;
        }

        .product {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
        }

        .product:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .product img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .product:hover img {
            transform: scale(1.05);
        }

        .product h3 {
            font-family: 'Playfair Display', serif;
            padding: 1rem;
            margin: 0;
            font-size: 1.2rem;
            color: var(--secondary-color);
        }

        .product p {
            padding: 0 1rem 1rem;
            color: var(--primary-color);
            font-weight: 600;
            font-size: 1.1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .add-to-cart {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 0.9rem;
        }

        .add-to-cart:hover {
            background-color: var(--accent-color);
        }

        @media (max-width: 768px) {
            .menu-icon {
                display: block;
            }

            .menu {
                position: fixed;
                top: 0;
                right: -100%;
                height: 100vh;
                width: 80%;
                max-width: 300px;
                transition: right 0.3s ease;
            }

            .menu.active {
                right: 0;
            }

            .menu ul {
                flex-direction: column;
                padding-top: 4rem;
            }

            .close-menu {
                display: block;
                position: absolute;
                top: 1rem;
                right: 1rem;
                background: none;
                border: none;
                color: white;
                font-size: 1.5rem;
                cursor: pointer;
            }

            .product-grid {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                gap: 1rem;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .product {
            animation: fadeIn 0.6s ease backwards;
        }

        .product:nth-child(2n) {
            animation-delay: 0.2s;
        }

        .product:nth-child(3n) {
            animation-delay: 0.4s;
        }
    </style>
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
            </ul>
        </nav>
    </header>

    <div class="container">
        <section id="panes" class="section">
            <h2>Nuestros Panes</h2>
            <div class="product-grid">
                <!-- Dynamic product cards will be inserted here -->
            </div>
        </section>

        <section id="pasteleria" class="section">
            <h2>Pastelería Artesanal</h2>
            <div class="product-grid">
                <!-- Dynamic product cards will be inserted here -->
            </div>
        </section>

        <section id="galletas" class="section">
            <h2>Galletas Caseras</h2>
            <div class="product-grid">
                <!-- Dynamic product cards will be inserted here -->
            </div>
        </section>
    </div>

    <script>
        // Product data
        const products = {
            panes: [
                { name: 'Pan de Masa Madre', price: '5.99', image: 'https://images.unsplash.com/photo-1509440159596-0249088772ff?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80' },
                { name: 'Baguette Tradicional', price: '3.99', image: 'https://images.unsplash.com/photo-1549931319-a545dcf3bc73?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80' },
                { name: 'Pan de Centeno', price: '4.50', image: 'https://images.unsplash.com/photo-1586444248902-2f64eddc13df?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80' },
                { name: 'Pan Integral', price: '4.25', image: 'https://images.unsplash.com/photo-1509440159596-0249088772ff?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80' },
                { name: 'Pan de Olivas', price: '5.50', image: 'https://images.unsplash.com/photo-1612207566115-e87f29d1e591?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80' }
            ],
            pasteleria: [
                { name: 'Croissant de Mantequilla', price: '2.50', image: 'https://images.unsplash.com/photo-1555507036-ab1f4038808a?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80' },
                { name: 'Tarta de Manzana', price: '15.99', image: 'https://images.unsplash.com/photo-1568571780765-9276ac8b75a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80' },
                { name: 'Éclair de Chocolate', price: '3.50', image: 'https://images.unsplash.com/photo-1612207566115-e87f29d1e591?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80' },
                { name: 'Tarta de Fresas', price: '18.50', image: 'https://images.unsplash.com/photo-1565958011703-44f9829ba187?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80' }
            ],
            galletas: [
                { name: 'Galletas de Chocolate', price: '4.99', image: 'https://images.unsplash.com/photo-1499636136210-6f4ee915583e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80' },
                { name: 'Galletas de Avena', price: '4.50', image: 'https://images.unsplash.com/photo-1558961363-fa8fdf82db35?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80' },
                { name: 'Galletas de Mantequilla', price: '3.99', image: 'https://images.unsplash.com/photo-1548365328-8c6db3220e4c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80' }
            ]
        };

        // Function to create product cards
        function createProductCard(product) {
            return `
                <div class="product">
                    <img src="${product.image}" alt="${product.name}">
                    <h3>${product.name}</h3>
                    <p>
                        <span>€${product.price}</span>
                        <button class="add-to-cart" onclick="addToCart('${product.name}', ${product.price})">
                            <i class="fas fa-shopping-cart"></i> Añadir
                        </button>
                    </p>
                </div>
            `;
        }

        // Populate products
        function populateProducts() {
            document.querySelector('#panes .product-grid').innerHTML = 
                products.panes.map(createProductCard).join('');
            
            document.querySelector('#pasteleria .product-grid').innerHTML = 
                products.pasteleria.map(createProductCard).join('');
            
            document.querySelector('#galletas .product-grid').innerHTML = 
                products.galletas.map(createProductCard).join('');
        }

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

        // Initialize
        document.addEventListener('DOMContentLoaded', populateProducts);

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