<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Super Admin Customer</title>

    <style>
        .body {
            font-family: "Garamond", serif;
            font-size: 30;
        }

        .sidelogo {
            position: flex wrap;
            margin-top: 20px;
            margin-left: 5px;
        }

        a {
            font-size: 12px;
        }

        hr {
            border-top: 3px solid black;
            width: 70%;
        }

        .dash {
      display: inline-block;
      padding: 7px 15px;
      background-image: linear-gradient(to right, rgba(0, 0, 0, 0.3), rgba(200, 145, 22, 0.25));
      border-radius: 50px;
      margin-top: 5px;
    }
    </style>
</head>

<body>
    <!--Side bar-->
    <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:14%; background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(200,145,22,0.25));font-family: Garamond, serif; font-size:12px; ">
        <div class="sidelogo">
            <!--Side Logo-->
            <img src="side_logo.png" width="150" height="40">
        </div>
        <b class="w3-bar-item" style="margin-top:-10px;">CONTENT MANAGEMENT</b>

        <a href="SA_SI.php" style="background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(200,145,22,0.25)); margin-left:12px; margin-top:-10px;" class="w3-bar-item w3-button">SITE IMAGES</a>
        <a href="SA_Gallery.php" style="background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(200,145,22,0.25)); margin-left:12px;margin-top:-5px;" class="w3-bar-item w3-button">GALLERY</a>
        <hr>
        <b class="w3-bar-item" style="margin-top:-15px;">ACCOUNT MANAGEMENT</b>
        <a href="SA_Staff.php" style="background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(200,145,22,0.25));margin-left:12px;margin-top:-10px;" class="w3-bar-item w3-button">STAFF</a>
        <a href="SA_Cust.php" style="background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(200,145,22,0.25));margin-left:12px;margin-top:-5px;" class="w3-bar-item w3-button"><u><b>CUSTOMERS</u></b></a>
        <hr>
        <b class="w3-bar-item" style="margin-top:-15px;">SCHEDULE MANAGEMENT</b>
        <a href="SA_Sched.php" style="background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(200,145,22,0.25));margin-left:12px;margin-top:-15px;" class="w3-bar-item w3-button">CALENDAR</a>
        <hr>
        <b class="w3-bar-item" style="margin-top:-15px;">CHAT</b>
        <a href="SA_Chat.php" style="background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(200,145,22,0.25));margin-left:12px;margin-top:-15px;" class="w3-bar-item w3-button">CHAT LOGS</a>
        <hr>
        <b class="w3-bar-item" style="margin-top:-15px;">PACKAGE/PAYMENT MANAGEMENT</b>
        <a href="SA_Packages.php" style="background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(200,145,22,0.25));margin-left:12px;margin-top:-10px;" class="w3-bar-item w3-button">PACKAGES</a>
        <a href="SA_Payment.php" style="background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(200,145,22,0.25));margin-left:12px;margin-top:-5px;" class="w3-bar-item w3-button">PAYMENT</a>
    </div>
    <!--Side bar-->

    <div style="margin-left:14%" class="w3-container">
  <!-- Content -->
            <!--Dashboard Button-->
            <div class="dash"><a href="SA_Dashboard.php" style="font-size:15px;"><b>Dashboard</b></a></div>

            <!--Content-->
            <!-- ... previous code ... -->

<!--Content-->
<div>
<table class="table">
  <thead>
    <tr>
      <th>Select</th>
      <th>ID</th>
      <th>Username</th>
      <th>Email</th>
      <th>Password</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php>
    // Create a database connection
    $conn = mysqli_connect('sql306.epizy.com','epiz_34274851','hI7rrGn3YsJzzY','epiz_34274851_customer');
    if ($conn) {
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      // Fetch the users from the database
      $query = "SELECT * FROM users";
      $result = mysqli_query($conn, $query);

      // Display the users in the table
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td><input type='checkbox' name='delete_checkbox' value='" . $row['id'] . "'></td>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td contenteditable='false' class='editable' data-field='username' data-id='" . $row['id'] . "'>" . $row['username'] . "</td>";
      echo "<td contenteditable='false' class='editable' data-field='email' data-id='" . $row['id'] . "'>" . $row['email'] . "</td>";
      echo "<td class='password' data-password='" . $row['password'] . "' data-revealed='false'>" . str_repeat("*", strlen($row['password'])) . "</td>";
      echo "<td>";
      echo "<button class='edit-btn'>Edit</button>";
      echo "<button class='reveal-btn'>Reveal</button>";
      echo "</td>";
      echo "</tr>";
      echo "</tr>";
  }
}
  // Close the database connection
  mysqli_close($conn);

}else {
  // The connection to the database failed
  echo "Error: Could not connect to the database.";
}
    ?>
  </tbody>
</table>


<button id="save-btn" class="save-btn">Save Changes</button>
<button id="deleteButton" class="btn btn-danger">Delete</button></div>
</div>

<script>
  // Get all the edit buttons
  var editButtons = document.getElementsByClassName("edit-btn");
  var saveButton = document.getElementById("save-btn");
  var deleteButton = document.getElementById("delete-btn");


  // Add click event listener to each edit button
  for (var i = 0; i < editButtons.length; i++) {
    editButtons[i].addEventListener("click", function () {
      // Find the closest table row
      var row = this.closest("tr");

      // Find the editable cells within the row
      var editableCells = row.getElementsByClassName("editable");

      // Get the original values and field names of the editable cells
      var originalValues = Array.from(editableCells).map(function (cell) {
        return {
          value: cell.innerHTML.trim(),
          field: cell.getAttribute("data-field"),
          id: cell.getAttribute("data-id")
        };
      });

      // Enable or disable editing based on the current state
      var isEditing = this.classList.contains("cancel-btn");
      for (var j = 0; j < editableCells.length; j++) {
        var cell = editableCells[j];
        cell.contentEditable = isEditing ? "false" : "true";
        cell.classList.toggle("edited", isEditing);
        var originalValue = originalValues[j].value;
        cell.innerHTML = isEditing ? originalValue : cell.innerHTML;
      }

      // Toggle the edit/cancel button text
      this.innerHTML = isEditing ? "Edit" : "Cancel";
      this.classList.toggle("cancel-btn");
    });
  }
//save button //////////////////////////////////////////////
// Add click event listener to the save button
saveButton.addEventListener("click", function () {
  // Find all the edited cells
  var editedCells = document.getElementsByClassName("edited");

  // Prepare the data to be sent for updating
  var data = [];
  for (var i = 0; i < editedCells.length; i++) {
    var cell = editedCells[i];
    var field = cell.getAttribute("data-field");
    var id = cell.getAttribute("data-id");
    var value = cell.innerHTML.trim();
    data.push({
      id: id,
      field: field,
      value: value
    });
  }

  // Convert the data array to a JSON string
  var jsonData = JSON.stringify(data);

  // Send an AJAX request to update the database
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "Super_Admin/update.php", true);
  xhr.setRequestHeader("Content-type", "application/json");

  // Send the JSON data as the request body
  xhr.sendAsJson(jsonData);

  // Handle the response from the server
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      var responseText = xhr.responseText;
      if (responseText === "Data updated successfully") {
        // Display a success message
        console.log("Data updated successfully");
        // Remove the edited cells from the table
        for (var i = 0; i < editedCells.length; i++) {
          var cell = editedCells[i];
          cell.parentNode.removeChild(cell);
        }
      } else {
        // Display an error message
        console.log("Error updating data");
      }
    }
  };
});
////////////////////////Reveal////////////////////////////////////////
const revealButtons = document.querySelectorAll('.reveal-btn');
revealButtons.forEach(function (button) {
  button.addEventListener('click', function () {
    const passwordCell = this.parentNode.previousElementSibling;
    const password = passwordCell.getAttribute('data-password');
    const isRevealed = passwordCell.getAttribute('data-revealed');

    if (isRevealed === 'true') {
      passwordCell.innerHTML = '*'.repeat(password.length);
      passwordCell.setAttribute('data-revealed', 'false');
      this.textContent = 'Reveal';
    } else {
      passwordCell.innerHTML = password;
      passwordCell.setAttribute('data-revealed', 'true');
      this.textContent = 'Hide';
    }
  });
});
/////////////////////////delete//////////////////////////////////////////
$(document).ready(function() {
      // Add a listener to the delete button
      $("#deleteButton").click(function() {
        // Get all of the checked checkboxes
        var checkedCheckboxes = $("input[name='delete_checkbox']:checked");

        // If there are no checked checkboxes, do nothing
        if (checkedCheckboxes.length === 0) {
          return;
        }

        // Get the IDs of the checked checkboxes
        var ids = [];
        checkedCheckboxes.each(function() {
          ids.push($(this).val());
        });

        // Confirm that the user wants to delete the rows
        var confirmation = confirm("Are you sure you want to delete these rows?");

        // If the user does not want to delete the rows, do nothing
        if (!confirmation) {
          return;
        }

        // Delete the rows with the specified IDs
        $.ajax({
          url: "delete.php",
          type: "POST",
          data: {
            ids: ids
          },
          success: function(response) {
            // Rows deleted successfully, reload the page
            location.reload();
          },
          error: function(xhr, status, error) {
            // Error occurred while deleting rows
            alert("Error deleting rows: " + error);
          }
        });
      });
    });
  </script>
</body>
</html>
