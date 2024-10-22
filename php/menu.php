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
        <h1>Coffee menu</h1>
        <p class="lead">Where every cup tells a story!</p>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-9"> <!-- Menu Column -->
                <div class="row" id="menu">
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="../images/Ro-Ro-Rosie-Frappe.png" alt="Ro-Ro-Rosie-Frappe" class="card-img-top" style="height: 200px; width: 130px; margin: auto;">
                            <div class="card-body d-flex flex-column align-items-center">
                                <h2 class="card-title text-center">Espresso</h2>
                                <p class="card-text text-center">$2.50</p>
                                <button class="btn btn-success" onclick="addToOrder('Espresso', 2.50)">Add to Order</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="../images/Iced-Rosie-Latte.png" alt="Iced-Rosie-Latte" class="card-img-top" style="height: 200px; width: 130px; margin: auto;">
                            <div class="card-body d-flex flex-column align-items-center">
                                <h2 class="card-title text-center">Latte</h2>
                                <p class="card-text text-center">$3.50</p>
                                <button class="btn btn-success" onclick="addToOrder('Latte', 3.50)">Add to Order</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="../images/Ro-Ro-Rosie-Frappe.png" alt="Cappuccino" class="card-img-top" style="height: 200px; width: 130px; margin: auto;">
                            <div class="card-body d-flex flex-column align-items-center">
                                <h2 class="card-title text-center">Cappuccino</h2>
                                <p class="card-text text-center">$3.00</p>
                                <button class="btn btn-success" onclick="addToOrder('Cappuccino', 3.00)">Add to Order</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="../images/Iced-Rosie-Latte.png" alt="Mocha" class="card-img-top" style="height: 200px; width: 130px; margin: auto;">
                            <div class="card-body d-flex flex-column align-items-center">
                                <h2 class="card-title text-center">Mocha</h2>
                                <p class="card-text text-center">$4.00</p>
                                <button class="btn btn-success" onclick="addToOrder('Mocha', 4.00)">Add to Order</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="../images/Iced-Rosie-Latte.png" alt="Mocha" class="card-img-top" style="height: 200px; width: 130px; margin: auto;">
                            <div class="card-body d-flex flex-column align-items-center">
                                <h2 class="card-title text-center">Mocha</h2>
                                <p class="card-text text-center">$4.00</p>
                                <button class="btn btn-success" onclick="addToOrder('Mocha', 4.00)">Add to Order</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="../images/Iced-Rosie-Latte.png" alt="Mocha" class="card-img-top" style="height: 200px; width: 130px; margin: auto;">
                            <div class="card-body d-flex flex-column align-items-center">
                                <h2 class="card-title text-center">Mocha</h2>
                                <p class="card-text text-center">$4.00</p>
                                <button class="btn btn-success" onclick="addToOrder('Mocha', 4.00)">Add to Order</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="../images/Iced-Rosie-Latte.png" alt="Mocha" class="card-img-top" style="height: 200px; width: 130px; margin: auto;">
                            <div class="card-body d-flex flex-column align-items-center">
                                <h2 class="card-title text-center">Mocha</h2>
                                <p class="card-text text-center">$4.00</p>
                                <button class="btn btn-success" onclick="addToOrder('Mocha', 4.00)">Add to Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"> <!-- Order List Column -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h2 class="mb-0">Your Order</h2>
                    </div>
                    <div class="card-body p-5">
                        <ul class="list-group" id="orderList"></ul>
                        <p id="totalAmount" class="mt-3">Total: $0.00</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    <!-- Footer Section -->
    <div class="footer mt-5">
        <p>&copy; 2024 Coffee Bliss Cafe. All rights reserved.</p>
    </div>

    <script src="../script/menu.js"></script>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
