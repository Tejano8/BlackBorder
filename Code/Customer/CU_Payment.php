<?php
include 'Customer/connect.php';
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
                background-image: url(C_img/payment.jpg);
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
                z-index:2;
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
                z-index:3;
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


            h1{
                font-weight:800;
                font-size:40px;
                font-family:'Poppins',sans-serif;
                text-align: center;
                color:white;
            }
            .cont1 {
                text-align: center;
                position: absolute;
                top: 1%;
                left: 0;
                right: 0;
                margin-left: auto;
                margin-right: auto;
                width: 800px;
            }


            .cont2{
                position:absolute;
                top:4%;
                left:60%;
                width: 800px;
            
            }

            /*Button container*/
            .b_container {
            height: 50px;
            width:300px;
            position: absolute;
            
            left:40%;
            top:70%;
            text-align:center;
            }

            .button {
            display: inline-block;
            padding: 10px 15px;
            font-weight: bolder;
            text-align: center;
            font-size: 14px;
            border-radius: 5px;
            box-shadow: 6px 6px 29px -4px rgba(0, 0, 0, 0.75);
            text-decoration: none;
            background-color:#d9d9d9;
            transition: 0.4s;
            color: black;
            border: none;
            width: 250px;
            height: 60px;
            line-height: 20px;
            text-transform: uppercase;
            }

            .button:hover{
                background:#34495e;
                color:#fff;
            }

            .popup{
                background-color:rgba(0, 0, 0, 0.6);
                width:100%;
                height:100%;
                position:absolute;
                top:0;
                display:none;
                justify-content:center;
                align-items:center;

            }

            .popup-content{
                height:550px;
                width:900px;
                background:#d9d9d9;
                padding:20px;
                border-radius:5px;
                position:relative;
                overflow:visible;           
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .close{
                position:absolute;
                top:-1px;
                left:-16px;
                height:30px;
                width:60px;
                border-radius:50px;
                cursor:pointer;
                overflow:visible;
                align-items:center;
            }

            .t_cont{
                position:absolute;
                width:600px;
                height:100px;
                top:80%;
                font-size:12px;
                text-align:center;
                left:30%;
            }
            .button {
            display: flex;
            justify-content: center;
            align-items: center;
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

        
        <div class="cont1">
            <h1>HOW TO PAY?</h1>
            <br><br><br><br><br><br>
            <h1>WE ACCEPT <br> ONLINE PAYMENT <br>WITH THE USE OF. </h1>
        </div>
       <!--button to               ↓           open popup-->
       <div class="b_container">
            <button class="button" id="button">UPLOAD PROOF OF PAYMENT (WHOLE/DOWNPAYMENT)</button>
        
        </div>
        <!-- button to open popup -->
        <div class="popup" id="upload-pop-up">
        <div class="popup-content">
            <img src="C_img/return.png" alt="Close popup" class="close" width="20" height="20">
            <form action="upload.php" method="post" enctype="multipart/form-data">
            <label for="image">Select image to upload:</label>
            <input type="file" name="image" id="image" accept=".jpeg,.jpg,.png,.gif">
            <input type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>">
            <br><br>
            <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Upload</button>
            </form>
            </div>
        <div class="t_cont">
            <p style="color:white;">Thank you for trusting our services and choosing our company. It has been our pleasure to serve you, and we appreciate your business. We are committed to providing you with the best service possible and look forward to assisting you again in the future.</p>
        </div>

        <script>
        //to reveal popup
        document.getElementById("button").addEventListener("click", function() {
            document.querySelector(".popup").style.display = "flex";
        });
        //close button
        document.querySelector(".close").addEventListener("click", function() {
            document.querySelector(".popup").style.display = "none";
        });

        </script>



        </body>
        </html>