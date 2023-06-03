<?php
include 'Customer/connect.php';

// rest of your code goes here
?>


<!DOCTYPE html>
    <head lang="en">
        <meta name="viewport" content="width=device-width, initial-scale.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Customer Homepage</title>

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
                background-image: url(C_img/home.jpg);
                background-size: 100%;
                background-repeat: no-repeat;
                background-position: center 19%;
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
                transform: translateX(-300px);
            }
            .container{
                position:flex wrap;
                margin-top:15.8%;
                margin-left:10%;
                border-radius: 25px;
                color :white;
                

            }

            h1{
                font-size:55px;
                font-family: Garamond, serif;
            }
            p{
                font-size:37px;
                font-family: Garamond, serif; 
                margin-top:-20px;
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
                z-index:1;
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
            
            



        </style>
        </head>
        <body>
        <img src="C_img/Logo.png" style="height: 35%; width: 35%; position:absolute; top:-8%;right:1%;">

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
                <li><a href="CU_Account.php"><u>ACCOUNT</u></a></li>
                <li><a href="CU_Ord_Trac.php"><u>ORDER</u></a></li>
                <li><a href="CU_Order.php#bottom"><u>VIEW PACKAGES</u></a></li>
                <li><a href="CU_Schedule.php"><u>SCHEDULES</u></a></li>
                <li><a href="CU_Home.php"><u>HOME</u></a></li>
                <li><a href="CU_Payment.php"><u>PAYMENT</u></a></li>
                <button onclick="confirmLogout()" style="background-color: #FF5C5C; color: white; border: none; padding: 10px 20px; font-size: 16px; border-radius: 5px; cursor: pointer; position: fixed; bottom: 20px; left: 20px;">LOG OUT</button>

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
                </script>
            </ul>
        </div>
        </label>

        <!--side              ↑                panel -->
        <div class="container">
    <h1><b> BLACK BORDER<br>PRODUCTIONS</b></h1>
    <p><b>Capture the moment you want to relive forever</b></p>
        </div>

        </body>
        </html> 