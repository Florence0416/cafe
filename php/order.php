<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Home</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS (optional) -->
    <link rel="stylesheet" href="../css/index.css">

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
                        <a class="nav-link" href="menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="order.php">Order</a>
                    </li>
                </ul>
            </div>
        </nav>
        <br><br><br>
        <h1>Order History</h1>
        <p class="lead">Where every cup tells a story!</p>
    </div>

    <!-- Order History Section -->
    <div class="container mt-5">
        <div class="row">
            <!-- Order Card Example -->
            <div class="col-md-6">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h5>Order #12345</h5>
                        <small class="text-muted">Date: 22 Oct 2024</small>
                    </div>
                    <div class="card-body">
                        <p><strong>Items:</strong></p>
                        <ul class="list-unstyled">
                            <li>Espresso - $4.00</li>
                            <li>Cappuccino - $5.00</li>
                        </ul>
                        <p><strong>Total Amount: </strong>$9.00</p>
                    </div>
                    <div class="card-footer text-right">
                        <a href="#" class="btn btn-primary">Reorder</a>
                    </div>
                </div>
            </div>

            <!-- Another Order Card -->
            <div class="col-md-6">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h5>Order #12344</h5>
                        <small class="text-muted">Date: 20 Oct 2024</small>
                    </div>
                    <div class="card-body">
                        <p><strong>Items:</strong></p>
                        <ul class="list-unstyled">
                            <li>Latte - $4.50</li>
                            <li>Mocha - $5.50</li>
                        </ul>
                        <p><strong>Total Amount: </strong>$10.00</p>
                    </div>
                    <div class="card-footer text-right">
                        <a href="#" class="btn btn-primary">Reorder</a>
                    </div>
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
