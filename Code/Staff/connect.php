<?php
// Start the session
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
?>
