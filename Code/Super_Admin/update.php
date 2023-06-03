<?php
// Start the session
session_start();

// Check if the updatedData parameter exists in the request
if (isset($_POST['updatedData'])) {
  // Get the updated data from the request
  $updatedData = $_POST['updatedData'];

  // Create a database connection
  $conn = mysqli_connect('sql306.epizy.com','epiz_34274851','hI7rrGn3YsJzzY','epiz_34274851_customer');
  if ($conn) {
    // Iterate over the updated data
    foreach ($updatedData as $item) {
      $id = $item['id'];
      $fields = $item['fields'];

      // Update the corresponding record in the database
      $query = "UPDATE users SET ";
      foreach ($fields as $field => $value) {
        $query .= "$field='$value', ";
      }
      $query = rtrim($query, ', '); // Remove the trailing comma and space
      $query .= " WHERE id='$id'";

      if (!mysqli_query($conn, $query)) {
        // An error occurred during the database update
        echo "Error: " . mysqli_error($conn);
        exit(); // Stop execution to prevent further processing
      }
    }

    // Close the database connection
    mysqli_close($conn);

    // Send a response indicating success
    echo "Changes saved successfully.";
  } else {
    // The connection to the database failed
    echo "Error: Could not connect to the database.";
  }
} else {
  // No updated data found in the request
  echo "Error: No updated data found.";
}
?>
