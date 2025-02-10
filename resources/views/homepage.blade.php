<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Homepage</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
        }
        .btn-logout {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-logout:hover {
            background-color: #c82333;
        }
        .product-card {
            transition: transform 0.2s;
        }
        .product-card:hover {
            transform: scale(1.05);
        }
        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        .testimonial-card {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .contact-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">My E-Commerce</a>
            <form action="{{ route('logout') }}" method="POST" class="d-flex">
                @csrf
                <button type="submit" class="btn-logout">Logout</button>
            </form>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        <h1>Welcome, User!</h1>

        <!-- Kategori Produk -->
        <div class="mb-4">
            <h3>Categories</h3>
            <div class="d-flex flex-wrap gap-2">
                <button class="btn btn-outline-primary">Electronics</button>
                <button class="btn btn-outline-primary">Fashion</button>
                <button class="btn btn-outline-primary">Home & Garden</button>
                <button class="btn btn-outline-primary">Sports</button>
            </div>
        </div>

        <!-- Daftar Produk -->
        <h3>Featured Products</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Product Card 1 -->
            <div class="col">
                <div class="card product-card">
                    <img src="{{ asset('images/images.png') }}" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Product 1</h5>
                        <p class="card-text">$19.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <!-- Product Card 2 -->
            <div class="col">
                <div class="card product-card">
                    <img src="{{ asset('images/images.png') }}" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Product 2</h5>
                        <p class="card-text">$29.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <!-- Product Card 3 -->
            <div class="col">
                <div class="card product-card">
                    <img src="{{ asset('images/images.png') }}" class="card-img-top" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 3</h5>
                        <p class="card-text">$39.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portofolio -->
        <div class="mt-5">
            <h3>Our Portfolio</h3>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('images/images.png') }}" class="card-img-top" alt="Portfolio 1">
                        <div class="card-body">
                            <h5 class="card-title">Project 1</h5>
                            <p class="card-text">Description of project 1.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('images/images.png') }}" class="card-img-top" alt="Portfolio 2">
                        <div class="card-body">
                            <h5 class="card-title">Project 2</h5>
                            <p class="card-text">Description of project 2.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('images/images.png') }}" class="card-img-top" alt="Portfolio 3">
                        <div class="card-body">
                            <h5 class="card-title">Project 3</h5>
                            <p class="card-text">Description of project 3.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimoni -->
        <div class="mt-5">
            <h3>Testimonials</h3>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="testimonial-card">
                        <p>"Great products and excellent service!"</p>
                        <p class="text-muted">- Customer A</p>
                    </div>
                </div>
                <div class="col">
                    <div class="testimonial-card">
                        <p>"I love shopping here. Highly recommended!"</p>
                        <p class="text-muted">- Customer B</p>
                    </div>
                </div>
                <div class="col">
                    <div class="testimonial-card">
                        <p>"Fast delivery and good quality products."</p>
                        <p class="text-muted">- Customer C</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="mt-5">
            <h3>Contact Us</h3>
            <div class="contact-form">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer mt-5">
        <div class="container">
            <p>&copy; 2023 My E-Commerce. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
