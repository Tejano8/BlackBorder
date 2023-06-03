<?php
session_start();

// Connect to the database
$conn = mysqli_connect("sql306.epizy.com", "epiz_34274851", "hI7rrGn3YsJzzY", "epiz_34274851_customer");

// Check if the connection was successful
if ($conn) {

    // Get the user's email and password from the login form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the user exists in the database
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    // Check if the user was found in the database
    if ($result) {

        // Get the user's role from the database
        $row = mysqli_fetch_assoc($result);
        $role = $row['role'];

        // Redirect the user to the appropriate page
        if ($role == 'superadmin') {
            header("Location: http://blackborder.infinityfreeapp.com/Super_Admin/SA_Dashboard.php", true);
        } else if ($role == 'admin') {
            header("Location: http://blackborder.infinityfreeapp.com/Admin/A_Dashboard.php", true);
        } else if ($role == 'staff') {
            $_SESSION['email'] = $email;
            header("Location: http://blackborder.infinityfreeapp.com/Staff/S_Home.php", true);
        } else if ($role == 'customer') {
            $_SESSION['email'] = $email;
            header("Location: http://blackborder.infinityfreeapp.com/Customer/CU_Home.php");
            exit();
        }
    } else {

        // The user was not found in the database
        echo "Error: Incorrect email or password.";

    }

} else {

    // The connection to the database failed
    echo "Error: Could not connect to the database.";

}
mysqli_close($conn);
?>
