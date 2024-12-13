// Navbar Scroll Effect
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('.navbar');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Products Data
    const products = [
        {
            name: 'Baguette Tradicional',
            description: 'Pan crujiente elaborado con masa madre',
            image: 'https://images.unsplash.com/photo-1549931319-a545dcf3bc73?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
            price: '2.50'
        },
        {
            name: 'Croissant de Mantequilla',
            description: 'Hojaldre francés tradicional',
            image: 'https://images.unsplash.com/photo-1555507036-ab1f4038808a?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
            price: '3.00'
        },
        {
            name: 'Pan de Chocolate',
            description: 'Relleno de chocolate belga',
            image: 'https://images.unsplash.com/photo-1530610476181-d83430b64dcd?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
            price: '3.50'
        }
    ];

    // Populate Products
    const productCarousel = document.querySelector('.product-carousel');
    products.forEach(product => {
        const productCard = document.createElement('div');
        productCard.className = 'product-card';
        productCard.innerHTML = `
            <img src="${product.image}" alt="${product.name}">
            <div class="product-info">
                <h4>${product.name}</h4>
                <p>${product.description}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="price">S/${product.price}</span>
                    
                </div>
            </div>
        `;
        productCarousel.appendChild(productCard);
    });

    // Contact Form Handler
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            // Add your form submission logic here
            alert('¡Gracias por tu mensaje! Te contactaremos pronto.');
            contactForm.reset();
        });
    }

    // Smooth Scrolling for Navigation Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});