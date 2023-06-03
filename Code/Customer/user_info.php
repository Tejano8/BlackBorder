<?php
  // Check if the user is logged in
  if (!isset($_SESSION['email'])) {
    // Redirect the user to the login page if they are not logged in
    header('Location: http://blackborder.infinityfreeapp.com/');
    exit();
  }
  $email = $_SESSION['email'];
  $query = "SELECT * FROM users WHERE email = '$email'";
  $result = mysqli_query($conn, $query);
  $user = mysqli_fetch_assoc($result);
  // Assign the retrieved values to variables
  $username = $user['username'];
  $email = $user['email'];
  $password = $user['password'];
  
?>
