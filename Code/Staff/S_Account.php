<?php
// Include the connect.php file to establish a database connection
require_once 'connect.php';

// Include the user_info.php file to get user information
require_once 'user_info.php';

// Your code goes here
?>

<!DOCTYPE html>
    <head lang="en">
        <meta name="viewport" content="width=device-width, initial-scale.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Staff Account</title>

        <style>

            /*font style */
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap');


            *{
                margin:0%;
                padding:0%;
                box-sizing: border-box; 
                font-family:'Poppins',sans-serif;
            }
            body{
                margin:0;
                background-image: url(S_img/Acc.jpg);
                z-index:-1;
                top:5%;
                background-size: 100%;
                background-repeat: no-repeat;
                background-position: center 0%;
                margin-bottom: 100px;
                
            }
            img{
                padding-top:0px;
                padding-left:20px;
               

            }
             /* side ↓ navigation */
            .slide{
                top:0;
                height:100vh;
                width:300px;
                position:absolute;
                background-color:#d9d9d9;
                transition:0.5s ease;
                z-index:3;
                transform: translateX(-300px);
            }

            

           

            ul li{
                list-style:none;

            }
            ul li a{
                font weight:900;
                margin-left:30px;
                padding:5px 0;
                display: block;
                text-transform:capitalize;
                text-decoration:none;
                transition: 0.2s ease-out;
                font-size:18px;
                
            }
            ul li a i{
                width:40px;
                text-align:center;
                

            }
            input{
                display:none;
                visibility:hidden;
                -webkit-appearance:none;
        
            }
            .toggle{
                position:absolute;
                height:30px;
                width: 30px;
                top:20px;
                left:15px;
                z-index:4;
                cursor:pointer;
                border-radius:2px;
                background-color:#d9d9d9;
                box-shadow:0 0 10px rgba(0,0,0,0.3);
                transform: translateX(0px);
                transition: transform 0.54s ease;


            }
            .toggle .common{
                position:absolute;
                height: 2px;
                width: 20px;
                background-color:black;
                border-radius:50px;
                transition: 0.3s ease;
            }
            .toggle .top_line{
                top:30%;
                left:50%;
                transform:translate(-50%,-50%);

            }
            .toggle .middle_line{
                top:50%;
                left:50%;
                transform:translate(-50%,-50%);
                
            }
            .toggle .bottom_line{
                top:70%;
                left:50%;
                transform:translate(-50%,-50%);
                
            }

            input:checked ~ .slide{
                transform:translateX(0);
                box-shadow:0 0 15px rgba(0,0,0.5);
            }

            input:checked ~ .toggle {
                transform:translateX(230px);
                transition: transform 0.54s ease;
                

            }
            
            


            /* side ↑ navigation */
            
            .mask{
                background-color: #fff;
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
                opacity: 0.7;
                z-index: -1;
            }
            .cont{
                position:absolute;
                top:5%;
                left:10%;
                
            }
            .cont2{
                position:absolute;
                background-color:#d9d9d9;
                top:12.5%;
                left:3%;
                height:75%;
                width:25%;
            }
            .t_cont{
                text-align:center;
                top:91%;
                width:75%;
                position:absolute;
                left:15%;

            }
            .cont3{
                position:absolute;
                background-color:#737373;
                top:12.5%;
                left:35%;
                height:75%;
                width:55%;
            }
            h1{
                font-family:'Poppins',sans-serif;
            }
            .link_cont{
                position:absolute;
                top:4%;
                left:74%;
            }
            button:hover {
            transform: scale(1.1);
            background-color: #FF7F7F;
            transition: 0.2s ease-out;
            }

            .button {
  border: none;
  border-radius: 4px;
  color: #fff;
  cursor: pointer;
  font-size: 16px;
  font-weight: 600;
  padding: 12px 24px;
  transition: background-color 0.2s ease-in-out;
}

.button-primary {
  background-color: #1abc9c;
}

.button-secondary {
  background-color: #3498db;
}

.button-danger {
  background-color: #e74c3c;
}

.icon {
  display: inline-block;
  height: 18px;
  margin-right: 8px;
  vertical-align: middle;
  width: 18px;
}

.edit-profile-icon {
  background-image: url(edit-profile.svg);
}

.change-password-icon {
  background-image: url(change-password.svg);
}

.logout-icon {
  background-image: url(logout.svg);
}


.text {
  display: inline-block;
  vertical-align: middle;
}
.info {
  font-size: 16px;
  padding: 20px;
}
.info h2 {
  text-align: center;
  font-weight: bold;
}
.info ul {
  list-style: none;
  padding: 0;
}

.info li {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 0;
  border-bottom: 1px solid #ccc;
  
}

.info li:last-child {
  border-bottom: none;
}

.info label {
  font-weight: bold;
}

.info .value {
  font-weight: normal;
  margin-left: 10px;
}

.info .verification {
  margin-left: 10px;
}

.info .verify-link {
  font-size: 12px;
  text-decoration: underline;
  color: #0000ff;
}
.actions {
  display: flex;
  justify-content: center;
}




        </style>
        </head>
        <body>
            <!--side              ↓                panel -->
        <label>
            <input type="checkbox">
            <div class="toggle">
                <span class ="top_line common"></span>
                <span class ="middle_line common"></span>
                <span class ="bottom_line common"></span>
        </div>

        <div class="slide">
            <ul><br><br><br>
                <li><a href="S_Account.php"><u>ACCOUNT</u></a></li>
                <li><a href="S_Ord_Trac.php"><u>ORDER</u></a></li>
                <li><a href="S_Home.php"><u>HOME</u></a></li>
                <li><a href="S_Order.php"><u>VIEW PACKAGES</u></a></li>
                <li><a href="S_Schedule.php"><u>SHEDULES</u></a></li>

            </ul>
        </div>
        </label>

        <!--side              ↑                panel -->
        <div class="mask"></div>
            <div class="cont">
                <h1>Account</h1>
            </div>
            <div class="cont2">
  <section class="account">
  <div class="mask"></div>
  <div class="info">
    <h2>User Information</h2>
    <ul>
      <li>
        <label for="username">Username:</label>
        <span id="username" class="value"><?php echo $username; ?></span>
      </li>
      <li>
        <label for="password">Password:</label>
        <span id="password" class="value"><?php echo $password; ?></span>
      </li>S
      <li>
        <label for="email">Email:</label>
        <span id="email" class="value"><?php echo $email; ?></span>
        <!-- <?php if (!$email_verified) { ?>
          <span class="verification">
            <a href="#" class="verify-link">Verify your email address</a>
          </span> 
        <?php } ?> -->
      </li>
    </ul>
  </div>
  <div class="actions">
  <button class="button button-primary">
    <span class="icon edit-profile-icon"></span>
    <span class="text">Edit Profile</span>
  </button>
  <button class="button button-secondary">
    <span class="icon change-password-icon"></span>
    <span class="text">Change Password</span>
  </button>
  <button class="button button-danger" onclick="confirmLogout()">
  <span class="icon logout-icon"></span>
  <span class="text">Logout</span>
</button>

  </div>
</div>

<script>
  // Make an AJAX call to retrieve user information
  const xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      const user = JSON.parse(this.responseText);

      // Update the HTML elements with the user's information
      document.getElementById('username').innerText = user.username;
      document.getElementById('email').innerText = user.email;
      document.getElementById('password').innerText = user.password;
    }
  };
  xhttp.open("GET", "user_info.php", true);
  xhttp.send();
</script>
            </div>
            <div class="cont3">
                
            <!--content2 here-->
            <div>
              <table class="table">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                      // Assuming you have already established a database connection
                      $connection = mysqli_connect("sql306.epizy.com", "epiz_34274851", "hI7rrGn3YsJzzY", "epiz_34274851_customer");

                      // Fetch data from the "users" table
                      $query = "SELECT id, username, email, password FROM users";
                      $result = mysqli_query($connection, $query);

                      while ($row = mysqli_fetch_assoc($result)) {
                          echo "<tr>";
                          echo "<td>" . $row['id'] . "</td>";
                          echo "<td>" . $row['username'] . "</td>";
                          echo "<td>" . $row['email'] . "</td>";
                          echo "<td class='password' data-password='" . $row['password'] . "'>" . str_repeat("*", strlen($row['password'])) . "</td>";
                          echo "<td><button class='reveal-btn'>Reveal</button></td>";
                          echo "</tr>";
                      }
                      ?>
                  </tbody>
              </table>
          </div>

          <script>
            function confirmLogout() {
                    if (confirm("Are you sure you want to log out?")) {
                        window.location.href = "logout.php";
                    }
                }
                document.querySelector('button').addEventListener('mouseover', function(){
                    this.style.transform = 'scale(1.1)';
                });
                document.querySelector('button').addEventListener('mouseout', function(){
                    this.style.transform = 'scale(1)';
                });
              // JavaScript code to toggle password visibility and button text
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
          </script>
            </div>
            
        </body>
        </html>