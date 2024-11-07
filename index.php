<?php
// index.php
include('config.php');

// Fetch all customers
$sql = "SELECT * FROM customers";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini CRM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>MINI CRM</h1>

    <!-- Add Customer Form -->
    <h2>Add New Customers Details :</h2>
    <form action="add_customer.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label for="phone">Phone:</label><br>
        <input type="text" name="phone" required><br><br>

        <label for="address">Address:</label><br>
        <textarea name="address" required></textarea><br><br>

        <input type="submit" value="Add Customer">
    </form>

    <h2>Customers List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['phone']}</td>
                        <td>{$row['address']}</td>
                        <td>
                            <a href='edit_customer.php?id={$row['id']}'>Edit</a> | 
                            <a href='delete_customer.php?id={$row['id']}'>Delete</a>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No customers found</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php $conn->close(); ?>
