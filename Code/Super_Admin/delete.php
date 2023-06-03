<?php
// Start the session
session_start();
// Create a database connection
$conn = mysqli_connect('sql306.epizy.com','epiz_34274851','hI7rrGn3YsJzzY','epiz_34274851_customer');;
if ($conn) {
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the request method is POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the IDs of the rows to be deleted
        $ids = $_POST['ids'];

        // Prepare and execute the delete query
        $query = "DELETE FROM users WHERE id IN (" . implode(",", $ids) . ")";
        $result = mysqli_query($conn, $query);

        // Check if the query was successful
        if ($result) {
            echo "Rows deleted successfully";
        } else {
            echo "Error deleting rows: " . mysqli_error($conn);
        }
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // The connection to the database failed
    echo "Error: Could not connect to the database.";
}
?>
