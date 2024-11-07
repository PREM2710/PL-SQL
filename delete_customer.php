<?php
// delete_customer.php
include('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM customers WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php'); // Redirect to the customer list page
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
