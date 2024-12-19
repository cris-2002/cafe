<?php
// Include the database connection file
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Management</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Cafe Management System</h1>
    </header>
    <main>
        <section id="menu-management">
            <h2>Menu Management</h2>
            <form action="create.php" method="POST">
                <input type="hidden" name="id" id="menu-id">
                <label for="menu-item">Item Name:</label>
                <input type="text" name="item_name" id="menu-item" required>

                <label for="menu-price">Price:</label>
                <input type="number" name="price" id="menu-price" required>

                <button type="submit">Add/Update</button>
            </form>

            <table>
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Fetch menu items from the database
                    $query = "SELECT * FROM menu";
                    $result = mysqli_query($conn, $query);

                    // Loop through the results and display each item in a table row
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['item_name']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['price']) . "</td>";
                        echo "<td>"
                            . "<a href='edit.php?id=" . $row['id'] . "'>Edit</a> "
                            . "<a href='delete.php?id=" . $row['id'] . "'>Delete</a>"
                            . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>
