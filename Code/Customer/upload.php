<?php
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
  // Check if a file was uploaded
  if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
    // Read the file content
    $image = file_get_contents($_FILES['image']['tmp_name']);
    // Escape special characters in the content
    $image = $conn->real_escape_string($image);
    // Get the file name and user email
    $filename = $_FILES['image']['name'];
    $email = $_SESSION['email'];
    $query = "INSERT INTO images (filename, data, email) VALUES ('$filename', '$image', '$email')";
    if ($conn->query($query) === TRUE) {
      // Redirect the user to a success page
      header("Location: http://blackborder.infinityfreeapp.com/Customer/CU_Home.php");
      exit;
    } else {
      echo 'Error: ' . $conn->error;
    }
  } else {
    // If no file was uploaded, show an error message to the user
    echo 'Error: Please select a file to upload';
  }
}

// Close the database connection
$conn->close();
?>
