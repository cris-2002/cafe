<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $item_name = $_POST['item_name'];
    $price = $_POST['price'];

    if (empty($id)) {
        $sql = "INSERT INTO menu (item_name, price) VALUES ('$item_name', $price)";
    } else {
        $sql = "UPDATE menu SET item_name='$item_name', price=$price WHERE id=$id";
    }

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
