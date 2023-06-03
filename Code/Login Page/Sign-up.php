<!DOCTYPE html>
    <head lang="en">
        <meta name="viewport" content="width=device-width, initial-scale.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Sign-up</title>
        <script>
          var password = document.getElementById("password");
          var confirmPassword = document.getElementById("confirm-password");

           function validatePassword() {
             if (password.value != confirmPassword.value) {
              confirmPassword.setCustomValidity("Passwords do not match");
             } else {
              confirmPassword.setCustomValidity("");
            }
        }

        password.onchange = validatePassword;
        confirmPassword.onkeyup = validatePassword;
      </script>
        <style>
            body{
                background-image: url('Login Page/Sign-up.jpg');
                background-size: 100%;
                background-repeat: no-repeat;          
                background-position: center 0px;
                background-attachment: fixed;
                font-family: Garamond, serif;

                
            }

            img {
            float:right;
            position: absolute;
            right:-150px;
            top:-80px;
            }
            
            .signup-container {
            background-color: #d9d9d9; /* set the grey background color */
            background-image: url('your-background-image-url.jpg'); /* add your background image */
            background-repeat: no-repeat; /* prevent the background image from repeating */
            background-position: center center; /* center the background image horizontally and vertically */
            background-attachment: fixed; /* prevent the background image from moving when scrolling */
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            margin-top: 70px; /* Add 20 pixels of margin to the top */
            margin-left: 80px;
            padding: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            float:left;
            text-align:center;
            }

            /* the rest of the CSS remains the same */
            .signup-container input[type="text"],
            .signup-container input[type="email"],
            .signup-container input[type="password"] {
            width: 80%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 10px;
            box-sizing: border-box;
            font-size: 20px;
            }
            
            .signup-container input::placeholder {
                opacity:0.8;
            }

            .signup-container input[type="submit"] {
            background-color: white;
            color: black;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            padding: 10px;
            font-size: 22px;
            text-align:center;
            width: 32%;
            text-decoration: underline;
            }
            .signup-container input[type="submit"]:hover {
            background-color: black;
            color: white;
            }

            .signup-container label {
            display: inline-block;
            margin-bottom: 5px;
            font-size: 16px;
            font-weight: bold;
            }

            .signup-container input[type="checkbox"] {
            margin-right: 5px;
            }

            h1{
                font-size:80px;
                text-align: center;
                font-family: Garamond, serif;
                font-weight: 900;
            }

            </style>
    </head>
    <body>  
    <img src="/Login Page/Sign_logo.png" width="550px">
    
    <div class="signup-container" style="position: relative;">

    <!--button to return back-->
    <a href="javascript:history.back()">
  <img src="/Login Page/return.png" style="max-width: 15%; max-height: 15%; position:absolute; top: 0%; left: 0%;" />
  </a>
  <br>


    <h1><b>Sign-Up<b></h1>
    <form method="post" action="signup.php">
    <input type="email" id="email" placeholder="EMAIL" name="email" required>
    <br>
    
    <input type="text" id="username" placeholder="USERNAME" name="username" required>
    <br>
    
    <input type="password" id="password" placeholder='PASSWORD' name="password" required><br>
    
    <input type="password" id="confirm-password" placeholder="CONFIRM PASSWORD"name="confirm-password" required>
    <br><br>
    <input type="submit" value="SIGN-UP">
  </form>
</div>


    </body>
    
    </html>