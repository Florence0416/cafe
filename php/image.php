<?php
include '../db/database.php';

// Get the item ID from the query parameter
if (isset($_GET['id'])) {
    $itemId = intval($_GET['id']);
    
    // Query to retrieve the image data from the database
    $query = "SELECT img FROM item WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $itemId);
    $stmt->execute();
    $stmt->bind_result($imgData);
    $stmt->fetch();
    $stmt->close();
    
    // Output the image with the appropriate headers
    header("Content-Type: image/png");
    echo $imgData;
}
?>
