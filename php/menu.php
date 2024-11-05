<?php
session_start(); // Start the session
include '../db/database.php';

// Initialize the order session variable if it doesn't exist
if (!isset($_SESSION['order'])) {
    $_SESSION['order'] = [];
}
?>


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

<script>
    let total = 0;
    let orderItems = []; // Array to hold order items

    function addToOrder(coffeeName, price) {
        const orderList = document.getElementById('orderList');
        const totalAmount = document.getElementById('totalAmount');
        const orderInput = document.getElementById('orderInput');

        // Create a new list item for the order
        const listItem = document.createElement('li');
        listItem.textContent = `${coffeeName}: RM${price.toFixed(2)}`;
        orderList.appendChild(listItem);

        // Update the total amount
        total += price;
        totalAmount.textContent = `Total: RM${total.toFixed(2)}`;

        // Update the order items array
        orderItems.push({ name: coffeeName, price: price });

        // Update the hidden input with the current order details
        orderInput.value = JSON.stringify(orderItems);
    }

    function validateOrder() {
        if (orderItems.length === 0) {
            alert('Your cart is empty. Please add items before placing an order.');
            return false; // Prevent form submission
        }
        return true; // Allow form submission
    }
</script>

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

    <!-- <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-9"> <!-- Menu Column -->
                    <div class="row" id="menu">
                        <?php
                            $query = "SELECT id, img, name, price FROM item";
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<div class=\"col-md-4\">";
                                    echo "<div class=\"card mb-3\" style=\"height: 400px;\">";
                                        echo "<img src=\"image.php?id=" . $row['id'] . "\" alt=\"Ro-Ro-Rosie-Frappe\" class=\"card-img-top\" style=\"height: 200px; width: 130px; margin: auto;\">";
                                        echo "<div class=\"card-body d-flex flex-column align-items-center justify-content-between\">";
                                            echo "<h2 class=\"card-title text-center\" style=\"font-size: 1.3rem;\">" . $row["name"] ."</h2> ";
                                            echo "<p class=\"card-text text-center\">RM " . $row["price"] . "</p>";
                                            echo "<button class=\"btn btn-success mt-auto\" style=\"position: relative;\" onclick=\"addToOrder('" . $row["name"] ."', " . $row["price"] . ")\" name=\"" . $row["name"] ."\">Buy now</button>";
                                        echo "</div>";
                                    echo "</div>";
                                echo "</div>";
                            }                            
                        ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mt-4">
                        <div class="card-header">
                            <h2 class="mb-0">Your Order</h2>
                        </div>
                        <div class="card-body p-5">
                            <ul class="list-group" id="orderList"></ul>
                            <p id="totalAmount" class="mt-3">Total: RM 0.00</p>
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="orderForm" onsubmit="return validateOrder();">
                                <input type="hidden" name="order" id="orderInput">
                                <button class="btn btn-primary mt-auto" style="position: relative;" name="submit">Add to order</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- </form> -->
    
    
    <!-- Footer Section -->
    <div class="footer mt-5">
        <p>&copy; 2024 Coffee Bliss Cafe. All rights reserved.</p>
    </div>

    <!-- <script src="../script/menu.js"></script> -->
    
</body>
</html>

<?php
    if (isset($_POST['submit'])) {
        // Check if the order is empty
        if (empty($_POST['order'])) {
            echo json_encode(['status' => 'error', 'message' => 'Your cart is empty. Please add items before placing an order.']);
        } else {
            // Save the order to the database
            if (isset($_POST['order'])) {
                $order = json_decode($_POST['order'], true); // Decode the JSON order
    
                if (count($order) > 0) {
                    // Step 1: Get the largest order_num from the history table
                    $query = "SELECT MAX(order_num) AS max_order_num FROM history";
                    $result = mysqli_query($conn, $query);
    
                    // Fetch the result and set the order number
                    $row = mysqli_fetch_assoc($result);
                    $maxOrderNum = isset($row['max_order_num']) ? $row['max_order_num'] : 0;
                    $newOrderNum = $maxOrderNum + 1; // Increment for the new order
    
                    // Step 2: Loop through the order items and save each one in the history table
                    foreach ($order as $item) {
                        $itemName = $item['name']; // Name of the coffee
                        $itemPrice = $item['price']; // Price of the coffee
    
                        // Get the item ID from the item table based on the name (assuming unique names)
                        $query = "SELECT id FROM item WHERE name = ?";
                        $stmt = $conn->prepare($query);
                        $stmt->bind_param('s', $itemName);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        $row = $result->fetch_assoc();
    
                        if ($row) {
                            $itemId = $row['id'];
    
                            // Insert into the history table with the new order number
                            $insertQuery = "INSERT INTO history (order_num, item_id, time) VALUES (?, ?, NOW())";
                            $insertStmt = $conn->prepare($insertQuery);
                            $insertStmt->bind_param('ii', $newOrderNum, $itemId); // Bind order_num and item_id
                            $insertStmt->execute();
                        }
                    }
    
                    // Clear the order from the session
                    $_SESSION['order'] = [];
    
                    // Respond with success status
                    // Redirect to order.php after a successful order submission
                    echo "<script>window.location.href = 'order.php';</script>";
                    exit();
                } else {
                    echo json_encode(['status' => 'error', 'message' => 'Your cart is empty. Please add items before placing an order.']);
                }
            }
        }
        exit();
    }    
?>
