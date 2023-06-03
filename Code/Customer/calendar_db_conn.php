<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $time = isset($_POST['time']) ? $_POST['time'] : '';
    $venue = isset($_POST['venue']) ? $_POST['venue'] : '';
    $city = isset($_POST['city']) ? $_POST['city'] : '';
    $theme = isset($_POST['theme']) ? $_POST['theme'] : '';
    $info = isset($_POST['info']) ? $_POST['info'] : '';

    // Rest of your code
    $servername = "sql306.epizy.com";
    $db_username = "epiz_34274851";
    $db_password = "nohI7rrGn3YsJzzYne";
    $dbname = "epiz_34274851_customer";
    $conn = new mysqli('sql306.epizy.com','epiz_34274851','hI7rrGn3YsJzzY','epiz_34274851_customer');
    if ($conn->connect_error) {
        die('<script>alert("Error: Failed to connect to the database."); window.location.href = "Sign-up.php";</script>');
    }

    // Check if the record already exists in the table
    $checkSql = "SELECT * FROM calendar WHERE title = '$title' AND time = '$time' AND venue = '$venue' AND city = '$city' AND theme = '$theme' AND info = '$info'";
    $checkResult = $conn->query($checkSql);

    if ($checkResult && $checkResult->num_rows > 0) {
        // Update the existing record
        $updateSql = "UPDATE calendar SET venue = '$venue', city = '$city', theme = '$theme', info = '$info' WHERE title = '$title' AND time = '$time'";
        if ($conn->query($updateSql) === true) {
            echo '<script>alert("The record has been updated!"); window.location.href = "CU_Schedule.php";</script>';
        } else {
            echo '<script>alert("Error: ' . $conn->error . '"); window.location.href = "CU_Schedule.php";</script>';
        }
    } else {
        // Insert a new record
        $insertSql = "INSERT INTO calendar (title, time, venue, city, theme, info) VALUES ('$title', '$time', '$venue', '$city', '$theme', '$info')";
        if ($conn->query($insertSql) === true) {
            echo '<script>alert("Your order has been sent!"); window.location.href = "CU_Schedule.php";</script>';
        } else {
            echo '<script>alert("Error: ' . $conn->error . '"); window.location.href = "CU_Schedule.php";</script>';
        }
    }

    $conn->close();
}
?>