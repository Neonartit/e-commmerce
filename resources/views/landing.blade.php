<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Shopping Cart Landing Page</title>
    <!-- Bootstrap CSS -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/custom.css') }}" rel="stylesheet">

    <!-- Custom styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>

    </style>
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand" href="#">Shopping Cart</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#shop">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#account">My Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Home Section -->
    <section id="home" class="jumbotron">
        <div class="container">
            <h1 class="display-4">Welcome to our Shopping Cart</h1>
            <p class="lead">Discover the latest and greatest products right here!</p>
            <a class="btn btn-primary btn-lg" href="#shop" role="button">Shop Now</a>
        </div>
    </section>

    <!-- Shop Section -->
    <section id="shop" class="section">
        <div class="">
            <div class="shop-warp-section">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-show-right-section" src="{{ url('assets/img/landingImage/home_detail.jpg') }}"
                            alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="text-center display-home-right">
                            <div>
                                <h3>Our collection for your home</h3>
                                <span>Best art for nice place</span>
                                <div class="mt-3">
                                    <button class="btn btn-primary-theme">
                                        shop now
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="section">
        <div class="container">
            <h2 class="section-heading">Our latest products A special gift for everyone special.</h2>
            <div class="owl-carousel">
                <!-- Product Card 1 -->
                <div class="product-card">
                    <img src="{{ url('assets/img/landingImage/product1.png') }}" alt="Product 1">
                    <h3>Product 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button class="btn btn-primary">Add to Cart</button>
                </div>

                <!-- Product Card 2 -->
                <div class="product-card">
                    <img src="{{ url('assets/img/landingImage/product2.jpg') }}" alt="Product 2">
                    <h3>Product 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button class="btn btn-primary">Add to Cart</button>
                </div>

                <div class="product-card">
                    <img src="{{ url('assets/img/landingImage/product3.jpg') }}" alt="Product 2">
                    <h3>Product 3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button class="btn btn-primary">Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="{{ url('assets/img/landingImage/product3.jpg') }}" alt="Product 2">
                    <h3>Product 5</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button class="btn btn-primary">Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="{{ url('assets/img/landingImage/product3.jpg') }}" alt="Product 2">
                    <h3>Product 6</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button class="btn btn-primary">Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="{{ url('assets/img/landingImage/product3.jpg') }}" alt="Product 2">
                    <h3>Product 7</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button class="btn btn-primary">Add to Cart</button>
                </div>

                <!-- Add more product cards as needed... -->
            </div>
        </div>
    </section>

    <!-- My Account Section -->
    <section id="account" class="section">
        <div class="container">
            <div class="text-center">
                We’re a sustainability-conscious lifestyle and Art for the modern souls. We celebrate the craftsmanship
                of our makers and want to provide long-lasting pieces with a style that lasts.
                <div class="mt-3">
                    <h5 class="txt-about-us">
                        More about us
                    </h4>
                </div>
            </div>

            <!-- Add your account content here -->
        </div>
    </section>
{{-- 
    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="container">
           <img src="{{ url('assets/img/landingImage/home_appliances.jpeg') }}" alt="">
            <!-- Add your contact content here -->
        </div>
    </section> --}}


</body>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>Contact Us</h5>
                <p>Email: info@example.com</p>
                <p>Phone: +1 (123) 456-7890</p>
            </div>
            <div class="col-md-6">
                <h5>About Us</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    // Initialize Owl Carousel
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            items: 3, // Number of items to show in the slider
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    });
</script>

</html>
