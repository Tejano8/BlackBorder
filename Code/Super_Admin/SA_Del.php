<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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

    .editable {
      cursor: pointer;
    }

    .edited {
      background-color: lightyellow;
    }
  </style>
</head>

<body>
  <!--Side bar-->
  <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:14%; background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(200,145,22,0.25));font-family: Garamond, serif; font-size:12px; ">
    <div class="sidelogo">
      <!--Side Logo-->
      <img src="dashboard_img/side_logo.png" width="150" height="40">
    </div>
    <b class="w3-bar-item" style="margin-top:-10px;">CONTENT MANAGEMENT</b>

    <a href="Super_Admin/SA_SI.php" style="background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(200,145,22,0.25)); margin-left:12px; margin-top:-10px;" class="w3-bar-item w3-button">SITE IMAGES</a>
    <a href="Super_Admin/SA_Gallery.php" style="background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(200,145,22,0.25)); margin-left:12px;margin-top:-5px;" class="w3-bar-item w3-button">GALLERY</a>
    <hr>
    <b class="w3-bar-item" style="margin-top:-10px;">USER MANAGEMENT</b>
    <a href="Super_Admin/SA_Cust.php" style="background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(200,145,22,0.25));margin-left:12px;margin-top:-5px;" class="w3-bar-item w3-button">CUSTOMER</a>
  </div>

  <!--Main Content-->
  <div style="margin-left:15%">
    <div class="w3-container w3-teal">
      <h1 style="margin-top:15px; margin-left:15px;">CUSTOMER</h1>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <table id="customers" class="table table-striped">
          <thead>
            <tr>
              <th>Select</th>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
            
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
                  echo "<td class='editable' data-field='username' data-id='" . $row['id'] . "'>" . $row['username'] . "</td>";
                  echo "<td class='editable' data-field='email' data-id='" . $row['id'] . "'>" . $row['email'] . "</td>";
                  echo "<td><button class='edit-btn'>Edit</button></td>";
                  echo "</tr>";
                }
              }

              // Close the database connection
              mysqli_close($conn);
            } else {
              // The connection to the database failed
              echo "Error: Could not connect to the database.";
            }
            ?>
          </tbody>
        </table>
        <button id="save-btn" class="save-btn">Save Changes</button>
      </div>
    </div>
  </div>

  <script>
    // Add event listeners for the edit buttons
const editButtons = document.querySelectorAll('.edit-btn');
editButtons.forEach(button => {
  button.addEventListener('click', () => {
    const row = button.parentNode.parentNode;
    const cells = row.getElementsByTagName('td');
    const isEditing = row.classList.contains('editing');

    // Toggle between edit and cancel modes
    if (isEditing) {
      // Cancel editing
      Array.from(cells).forEach(cell => {
        const originalValue = cell.getAttribute('data-original-value');
        cell.textContent = originalValue;
      });
      button.textContent = 'Edit';
      row.classList.remove('editing');
    } else {
      // Enter edit mode
      Array.from(cells).forEach(cell => {
        const fieldValue = cell.textContent;
        cell.setAttribute('data-original-value', fieldValue);
        cell.innerHTML = `<input type="text" value="${fieldValue}" class="form-control">`;
      });
      button.textContent = 'Cancel';
      row.classList.add('editing');
    }
  });
});

// Add event listener for the save button
const saveButton = document.getElementById('save-btn');
saveButton.addEventListener('click', () => {
  const rows = document.querySelectorAll('tr.editing');
  const updatedData = [];

  rows.forEach(row => {
    const cells = row.getElementsByTagName('td');
    const id = row.getAttribute('data-id');
    const updatedFields = {};

    Array.from(cells).forEach(cell => {
      const field = cell.getAttribute('data-field');
      const input = cell.querySelector('input');
      const value = input.value;
      updatedFields[field] = value;
      cell.textContent = value;
    });

    updatedData.push({
      id: id,
      fields: updatedFields
    });

    row.classList.remove('editing');
  });

  // Send the updated data to the server for saving in the database
  $.ajax({
    url: "Super_Admin/update.php", // Replace with the actual path to your server-side file
    method: "POST",
    data: {
       updatedData: updatedData 
    },
    success: function(response) {
      console.log("Changes saved successfully.");
      location.reload();
    },
    error: function(xhr, status, error) {
      console.log("Error occurred while saving changes:", error);
    }
  });
});



  </script>
</body>

</html>
