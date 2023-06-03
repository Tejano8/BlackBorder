<?php
// Retrieve the date from the request
$date = $_POST['date'];

// Insert the date into the database table
// Replace 'your_database' with your actual database name
// Replace 'your_table' with your actual table name
$servername = "sql306.epizy.com";
$db_username = "epiz_34274851";
$db_password = "hI7rrGn3YsJzzY";
$dbname = "epiz_34274851_customer";
$conn = new mysqli('sql306.epizy.com','epiz_34274851','hI7rrGn3YsJzzY','epiz_34274851_customer');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO your_table (date_column) VALUES ('$date')";

if ($conn->query($sql) === TRUE) {
  echo "Date inserted into the database successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
