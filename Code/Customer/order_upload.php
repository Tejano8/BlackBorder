<?php
session_start();

// Database connection settings
$servername = "sql306.epizy.com";
    $db_username = "epiz_34274851";
    $db_password = "hI7rrGn3YsJzzY";
    $dbname = "epiz_34274851_customer";
    $conn = new mysqli('sql306.epizy.com','epiz_34274851','hI7rrGn3YsJzzY','epiz_34274851_customer');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $time = $_POST['time'];
    $event = $_POST['event'];
    $theme = $_POST['theme'];
    $City = $_POST['City'];
    $address = $_POST['address'];
    $additional = $_POST['additional'];
    $email = $_SESSION['email'];

    // Prepare the SQL statement
    $sql = "INSERT INTO orders (time, event, theme, City, address, additional, email) 
            VALUES ('$time', '$event', '$theme', '$City', '$address', '$additional', '$email')";

if ($conn->query($sql) === true) {
    // Display success message as a pop-up
    echo "<script>
        alert('Thank you for submitting your order! Please wait for verification.');
        window.location.href = 'Customer/CU_Order.php';
    </script>";
    exit();
} else {
    // Display error message as a pop-up
    echo "<script>
        alert('Error: Failed to upload form data.');
        window.history.back();
    </script>";
    exit();
}
}

// Close the database connection
$conn->close();
?>
