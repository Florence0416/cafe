<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Home</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS (optional) -->
    <link rel="stylesheet" href="css/index.css">

    
</head>
<body>

    <!-- Banner Section -->
    <div class="banner">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Coffee Bliss</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="php/menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="php/order.php">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="php/products.php">Products</a>
                    </li>
                </ul>
            </div>
        </nav>
        <br><br><br>
        <h1>Welcome to Coffee Bliss Cafe</h1>
        <p class="lead">Where every cup tells a story!</p>
    </div>


    <!-- About Section -->
    <div class="container mt-5">
        <div class="row align-items-center"> <!-- Added align-items-center for vertical alignment -->
            <div class="col-md-6 text-center about-section">
                <h2>About Us</h2>
                <p>At Coffee Bliss, we serve freshly brewed coffee made from the finest beans around the world. We strive to offer an atmosphere where you can relax, unwind, and enjoy every sip.</p>
            </div>
            <div class="col-md-6">
                <img src="../images/image.png" alt="Coffee Bliss" class="img-fluid">
            </div>
        </div>
    </div>

    <br><br>
    <!-- Menu Section -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Our Menu Highlights</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="menu-item text-center">
                    <h3>Espresso</h3>
                    <p>A rich, full-bodied coffee to kickstart your day.</p>
                    <p><strong>RM3.00</strong></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-item text-center">
                    <h3>Latte</h3>
                    <p>A smooth blend of milk and espresso for a creamy treat.</p>
                    <p><strong>RM4.50</strong></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-item text-center">
                    <h3>Mocha</h3>
                    <p>Chocolate meets coffee for an indulgent experience.</p>
                    <p><strong>RM5.00</strong></p>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="menu-item text-center">
                    <h3>Espresso</h3>
                    <p>A rich, full-bodied coffee to kickstart your day.</p>
                    <p><strong>RM3.00</strong></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-item text-center">
                    <h3>Latte</h3>
                    <p>A smooth blend of milk and espresso for a creamy treat.</p>
                    <p><strong>RM4.50</strong></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-item text-center">
                    <h3>Mocha</h3>
                    <p>Chocolate meets coffee for an indulgent experience.</p>
                    <p><strong>RM5.00</strong></p>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer Section -->
    <div class="footer mt-5">
        <p>&copy; 2024 Coffee Bliss Cafe. All rights reserved.</p>
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
