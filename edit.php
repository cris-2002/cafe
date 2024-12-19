<?php
include 'database.php';

$id = $_GET['id'];
$query = "SELECT * FROM menu WHERE id=$id";
$result = $conn->query($query);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $item_name = $row['item_name'];
    $price = $row['price'];
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Menu Item</title>
</head>
<body>
    <h1>Edit Menu Item</h1>
    <form action="create.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="item_name">Item Name:</label>
        <input type="text" name="item_name" value="<?php echo $item_name; ?>" required>
        <label for="price">Price:</label>
        <input type="number" name="price" value="<?php echo $price; ?>" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
