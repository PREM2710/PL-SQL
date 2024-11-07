<?php
// edit_customer.php
include('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch customer details
    $sql = "SELECT * FROM customers WHERE id=$id";
    $result = $conn->query($sql);
    $customer = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "UPDATE customers SET name='$name', email='$email', phone='$phone', address='$address' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php'); // Redirect to the customer list page
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Customer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Edit Customer</h1>

    <form action="edit_customer.php?id=<?php echo $customer['id']; ?>" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" name="name" value="<?php echo $customer['name']; ?>" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" value="<?php echo $customer['email']; ?>" required><br><br>

        <label for="phone">Phone:</label><br>
        <input type="text" name="phone" value="<?php echo $customer['phone']; ?>" required><br><br>

        <label for="address">Address:</label><br>
        <textarea name="address" required><?php echo $customer['address']; ?></textarea><br><br>

        <input type="submit" value="Update Customer">
    </form>
</body>
</html>

<?php $conn->close(); ?>
