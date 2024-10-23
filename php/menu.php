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
                    <div class="card mb-3" style="height: 400px;">
                        <img src="../images/Ro-Ro-Rosie-Frappe.png" alt="Ro-Ro-Rosie-Frappe" class="card-img-top" style="height: 200px; width: 130px; margin: auto;">
                        <div class="card-body d-flex flex-column align-items-center justify-content-between">
                            <h2 class="card-title text-center" style="font-size: 1.3rem;">Ro-Ro-Rosie Frappé</h2> 
                            <p class="card-text text-center">RM 9.60</p>
                            <button class="btn btn-success mt-auto" style="position: relative;" onclick="addToOrder('Ro-Ro-Rosie-Frappe', 9.60)">Buy now</button> 
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-3" style="height: 400px;">
                        <img src="../images/Iced-Rosie-Latte.png" alt="Iced-Rosie-Latte" class="card-img-top" style="height: 200px; width: 130px; margin: auto;">
                        <div class="card-body d-flex flex-column align-items-center justify-content-between">
                            <h2 class="card-title text-center" style="font-size: 1.3rem;">Rosie Latté</h2> 
                            <p class="card-text text-center">RM 8.50</p>
                            <button class="btn btn-success mt-auto" style="position: relative;" onclick="addToOrder('Iced-Rosie-Latte', 8.50)">Buy now</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-3" style="height: 400px;">
                        <img src="../images/Iced-Rosie-Cham-Latte.png" alt="Iced-Rosie-Cham-Latte" class="card-img-top" style="height: 200px; width: 130px; margin: auto;">
                        <div class="card-body d-flex flex-column align-items-center justify-content-between">
                            <h2 class="card-title text-center" style="font-size: 1.3rem;">Rosie Cham Latté</h2> 
                            <p class="card-text text-center">RM 9.00</p>
                            <button class="btn btn-success mt-auto" style="position: relative;" onclick="addToOrder('Rosie-Cham-Latté', 9.00)">Buy now</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-3" style="height: 400px;">
                        <img src="../images/Pumpkin-Spice-Frappe.png" alt="Pumpkin-Spice-Frappe" class="card-img-top" style="height: 200px; width: 130px; margin: auto;">
                        <div class="card-body d-flex flex-column align-items-center justify-content-between">
                            <h2 class="card-title text-center" style="font-size: 1.3rem;">Pumpkin Spice Frappe</h2> 
                            <p class="card-text text-center">RM 13.00</p>
                            <button class="btn btn-success mt-auto" style="position: relative;" onclick="addToOrder('Pumpkin-Spice-Frappe', 13.00)">Buy now</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-3" style="height: 400px;">
                        <img src="../images/Iced-Pumpkin-Spice-Black-Latte.png" alt="Iced-Pumpkin-Spice-Black-Latte" class="card-img-top" style="height: 200px; width: 130px; margin: auto;">
                        <div class="card-body d-flex flex-column align-items-center justify-content-between">
                            <h2 class="card-title text-center" style="font-size: 1.3rem;">Iced Pumpkin Spice Black Latte</h2> 
                            <p class="card-text text-center">RM 12.00</p>
                            <button class="btn btn-success mt-auto" style="position: relative;" onclick="addToOrder('Iced-Pumpkin-Spice-Black-Latte', 12.00)">Buy now</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-3" style="height: 400px;">
                        <img src="../images/Iced-Pumpkin-Spice-Latte.png" alt="Iced-Pumpkin-Spice-Latte" class="card-img-top" style="height: 200px; width: 130px; margin: auto;">
                        <div class="card-body d-flex flex-column align-items-center justify-content-between">
                            <h2 class="card-title text-center" style="font-size: 1.3rem;">Iced Pumpkin Spice Latte</h2> 
                            <p class="card-text text-center">RM 7.00</p>
                            <button class="btn btn-success mt-auto" style="position: relative;" onclick="addToOrder('Iced-Pumpkin-Spice-Latte', 7.00)">Buy now</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-3" style="height: 400px;">
                        <img src="../images/Iced-Tarik-Milk-Tea.png" alt="Iced-Tarik-Milk-Tea" class="card-img-top" style="height: 200px; width: 130px; margin: auto;">
                        <div class="card-body d-flex flex-column align-items-center justify-content-between">
                            <h2 class="card-title text-center" style="font-size: 1.3rem;">Iced Tarik Milk Tea</h2> 
                            <p class="card-text text-center">RM 4.00</p>
                            <button class="btn btn-success mt-auto" style="position: relative;" onclick="addToOrder('Iced-Tarik-Milk-Tea', 4.00)">Buy now</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-3" style="height: 400px;">
                        <img src="../images/Mango-Frappé.png" alt="Mango-Frappé" class="card-img-top" style="height: 200px; width: 130px; margin: auto;">
                        <div class="card-body d-flex flex-column align-items-center justify-content-between">
                            <h2 class="card-title text-center" style="font-size: 1.3rem;">Mango Frappé</h2> 
                            <p class="card-text text-center">RM 8.00</p>
                            <button class="btn btn-success mt-auto" style="position: relative;" onclick="addToOrder('Mango-Frappé', 8.00)">Buy now</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-3" style="height: 400px;">
                        <img src="../images/Pearl-Sugar-Waffle.png" alt="Pearl-Sugar-Waffle" class="card-img-top" style="height: 200px; width: 130px; margin: auto;">
                        <div class="card-body d-flex flex-column align-items-center justify-content-between">
                            <h2 class="card-title text-center" style="font-size: 1.3rem;">Pearl Sugar Waffle</h2> 
                            <p class="card-text text-center">RM 5.00</p>
                            <button class="btn btn-success mt-auto" style="position: relative;" onclick="addToOrder('Pearl-Sugar-Waffle', 5.00)">Buy now</button>
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
                        <p id="totalAmount" class="mt-3">Total: RM 0.00</p>
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
