<?php

// Get the user's input from the form
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm-password'];

// Validate the user's input
if (empty($email) || empty($username) || empty($password) || empty($confirm_password)) {
    die('<script>alert("Error: Please fill out all fields."); window.location.href = "Sign-up.php";</script>');
}
if ($password != $confirm_password) {
    die('<script>alert("Error: Passwords do not match."); window.location.href = "Sign-up.php";</script>');
}

// Connect to the database
$servername = "sql306.epizy.com";
$db_username = "epiz_34274851";
$db_password = "hI7rrGn3YsJzzY";
$dbname = "epiz_34274851_customer";
$conn = new mysqli('sql306.epizy.com','epiz_34274851','hI7rrGn3YsJzzY','epiz_34274851_customer');
if (!$conn) {
    die('<script>alert("Error: Failed to connect to database."); window.location.href = "Sign-up.php";</script>');
}

// Insert user's information into the database
$sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";
if (mysqli_query($conn, $sql)) {
    echo '<script>alert("Thank you for signing up!"); window.location.href = "http://blackborder.infinityfreeapp.com/";</script>';
} else {
    echo '<script>alert("Error: ' . mysqli_error($conn) . '"); window.location.href = "http://blackborder.infinityfreeapp.com/Login%20Page/Sign-up.php";</script>';
}

// Close the database connection
mysqli_close($conn);

?>