<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Care</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .carousel-item img {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
        .carousel-caption {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
        }
        .carousel-caption h3 {
            font-size: 40px;
            font-weight: bold;
            color: #ffcc00; /* Set text color to yellow */
        }
        .carousel-caption p {
            font-size: 18px;
            color: #ffffff; /* Set text color to white */
        }
        .carousel-caption .btn {
            font-size: 18px;
            padding: 10px 30px;
            border-radius: 0; /* Rectangular button */
            margin: 5px;
            text-transform: uppercase;
        }
        /* Minimize the navbar height */
        .navbar {
            padding: 10px 0;
        }

        /* Center the navbar buttons */
        .navbar-nav {
            margin-left: auto;
            margin-right: auto;
        }

        .navbar-nav .nav-link {
            color: white !important;
            position: relative; /* For positioning the dropdown */
        }

        /* Dropdown menu styling */
        .dropdown-menu {
            min-width: 200px;
            display: none; /* Hide dropdown by default */
            position: absolute; /* Position it absolutely */
            z-index: 1000; /* Ensure it appears above other elements */
        }

        .nav-item:hover .dropdown-menu {
            display: block; /* Show dropdown on hover */
        }

        .dropdown-menu .dropdown-item {
            padding: 10px;
        }

        /* Highlight effect on hover */
        .nav-item:hover .nav-link {
            background-color: rgba(255, 255, 255, 0.2); /* Highlight color */
        }

        /* Logo styling */
        .navbar-brand img {
            height: 40px; /* Adjust height as needed */
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://petcaretechnology.com/wp-content/uploads/2022/01/logo-new.png" alt="Pet Care Logo"> <!-- Add your logo path here -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">About Us</a>
                    </li>
                    <!-- Dropdown Menu for Services, Shop, Blog -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Pet List</a></li>
                            <li><a class="dropdown-item" href="#">Product Details</a></li>
                            <li><a class="dropdown-item" href="#">Place Order</a></li>
                            <li><a class="dropdown-item" href="#">My Cart</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownShop" role="button">
                            Shop
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownShop">
                            <li><a class="dropdown-item" href="#">Error</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownBlog" role="button">
                            Blog
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownBlog">
                            <li><a class="dropdown-item" href="#">Single Blog</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Get an Appointment</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Image Slider (with slide effect) -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://wallpapershome.com/images/pages/pic_h/1061.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Dog Cat Pat Care</h3>
                    <p>We Take Good Care For Your Lovely Pet</p>
                    <a href="#" class="btn btn-danger">Purchase</a>
                    <a href="#" class="btn btn-light">Learn More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://wallpapershome.com/images/pages/pic_h/1608.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Dog Cat Pat Care</h3>
                    <p>We Take Good Care For Your Lovely Pet</p>
                    <a href="#" class="btn btn-danger">Purchase</a>
                    <a href="#" class="btn btn-light">Learn More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://wallpapershome.com/images/pages/pic_h/10039.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Dog Cat Pat Care</h3>
                    <p>We Take Good Care For Your Lovely Pet</p>
                    <a href="#" class="btn btn-danger">Purchase</a>
                    <a href="#" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Bootstrap JS (Necessary for carousel) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
