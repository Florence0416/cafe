<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<?php
// Database connection
include "../db/database.php";

// Handle form submission for editing an item
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['edit_item'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['tmp_name'];

    // Read the image file as binary data
    $imgData = null;
    if (!empty($image)) {
        $imgData = addslashes(file_get_contents($image)); // Convert the image to binary
    }

    // Update query
    $query = "UPDATE item SET name = '$name', price = $price";
    if ($imgData) {
        $query .= ", img = '$imgData'";
    }
    $query .= " WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        $message = "Item updated successfully!";
    } else {
        $message = "Error updating item: " . mysqli_error($conn);
    }
}

// Handle form submission for adding a new item
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['add_item'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['tmp_name'];

    // Read the image file as binary data
    $imgData = null;
    if (!empty($image)) {
        $imgData = addslashes(file_get_contents($image)); // Convert the image to binary
    }

    // Insert query
    $query = "INSERT INTO item (name, price, img) VALUES ('$name', $price, '$imgData')";

    if (mysqli_query($conn, $query)) {
        $message = "Item added successfully!";
    } else {
        $message = "Error adding item: " . mysqli_error($conn);
    }
}

// Handle delete request
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['delete_item'])) {
    $id = $_POST['id'];

    // Delete query
    $query = "DELETE FROM item WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        $message = "Item deleted successfully!";
    } else {
        $message = "Error deleting item: " . mysqli_error($conn);
    }
}

// Fetch all items
$query = "SELECT id, img, name, price FROM item";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Manage Items</title>
</head>
<body>
<div class="container my-5">
    <h1 class="text-center">Manage Items</h1>

    <!-- Display message -->
    <?php if (isset($message)): ?>
        <div class="alert alert-info"><?= $message ?></div>
    <?php endif; ?>

    <!-- Home Button and Add Item Button -->
    <div class="d-flex justify-content-between my-4">
        <a href="../index.php" class="btn btn-secondary">Home</a>
        <button class="btn btn-primary" onclick="openAddModal()">Add New Item</button>
    </div>

    <div class="row">
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <div class="col-md-4 mb-3">
                <div class="card" style="height: 400px;">
                    <img src="data:image/jpeg;base64,<?= base64_encode($row['img']) ?>" class="card-img-top" style="height: 200px; width: 130px; margin: auto;">
                    <div class="card-body d-flex flex-column align-items-center justify-content-between">
                        <h2 class="card-title text-center" style="font-size: 1.3rem;"><?= htmlspecialchars($row["name"]) ?></h2>
                        <p class="card-text text-center">RM <?= htmlspecialchars($row["price"]) ?></p>
                        <div class="d-flex gap-2">
                            <button class="btn btn-success" 
                                    onclick="openEditModal(<?= $row['id'] ?>, '<?= addslashes($row['name']) ?>', <?= $row['price'] ?>)">Edit</button>
                            <form method="POST" style="display: inline;">
                                <input type="hidden" name="delete_item" value="1">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="editItemForm" method="POST" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Item</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="itemId" name="id">
          <input type="hidden" name="edit_item" value="1">
          <div class="mb-3">
            <label for="itemName" class="form-label">Name</label>
            <input type="text" class="form-control" id="itemName" name="name" required>
          </div>
          <div class="mb-3">
            <label for="itemPrice" class="form-label">Price</label>
            <input type="number" class="form-control" id="itemPrice" name="price" step="0.01" required>
          </div>
          <div class="mb-3">
            <label for="itemImage" class="form-label">Image</label>
            <input type="file" class="form-control" id="itemImage" name="image">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="addItemForm" method="POST" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="addModalLabel">Add New Item</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="add_item" value="1">
          <div class="mb-3">
            <label for="addItemName" class="form-label">Name</label>
            <input type="text" class="form-control" id="addItemName" name="name" required>
          </div>
          <div class="mb-3">
            <label for="addItemPrice" class="form-label">Price</label>
            <input type="number" class="form-control" id="addItemPrice" name="price" step="0.01" required>
          </div>
          <div class="mb-3">
            <label for="addItemImage" class="form-label">Image</label>
            <input type="file" class="form-control" id="addItemImage" name="image" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add Item</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
function openEditModal(id, name, price) {
    // Populate modal fields with current values
    document.getElementById('itemId').value = id;
    document.getElementById('itemName').value = name;
    document.getElementById('itemPrice').value = price;

    // Show the modal
    var editModal = new bootstrap.Modal(document.getElementById('editModal'));
    editModal.show();
}

function openAddModal() {
    // Show the add modal
    var addModal = new bootstrap.Modal(document.getElementById('addModal'));
    addModal.show();
}
</script>
</body>
</html>
