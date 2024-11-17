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
                        <a class="nav-link" href="../index.php">Home</a>
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
        <?php
            include '../db/database.php';
            $query = "SELECT order_num, time, item_id FROM history ORDER BY order_num"; // Ensure orders are in order
            $result = mysqli_query($conn, $query);
            $order_count = null;
            $item = [];
            $date = null;

            while ($row = mysqli_fetch_assoc($result)) {
                if ($order_count === null) {
                    // First time setting the order count
                    $order_count = $row["order_num"];
                    $date = $row["time"];
                }

                if ($row["order_num"] == $order_count) {
                    // Same order, add item
                    $item[] = $row["item_id"];
                } else {
                    // New order, output the previous order
                    output($order_count, $item, $date);

                    // Reset for the new order
                    $order_count = $row["order_num"];
                    $item = [$row["item_id"]]; // Start a new list with the current item
                    $date = $row["time"];
                }
            }

            // Ensure to output the last order
            if (!empty($item)) {
                output($order_count, $item, $date);
            }

            function output($order_num, $item, $date) {
                global $conn;
                $total = 0;
                echo "<div class='col-md-6'>";
                echo "<div class='card mb-4 shadow-sm'>";
                echo "<div class='card-header'>";
                echo "<h5>Order #" . $order_num . "</h5>";
                echo "<small class='text-muted'>Date: " . $date . "</small>";
                echo "</div>";
                echo "<div class='card-body'>";
                echo "<p><strong>Items:</strong></p>";
                echo "<ul class='list-unstyled'>";
                foreach ($item as $item_id) {
                    $q = "SELECT name, price FROM item WHERE id = '$item_id'";
                    $r = mysqli_query($conn, $q);
                    $rows = mysqli_fetch_assoc($r);
                    echo "<li>" . $rows["name"] . " - RM" . $rows["price"] . "</li>";
                    $total += $rows["price"];
                }
                echo "</ul>";
                echo "<p><strong>Total Amount: </strong>RM" . $total . "</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        ?>
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
