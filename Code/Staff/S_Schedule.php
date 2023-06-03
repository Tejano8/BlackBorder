<!DOCTYPE html>
    <head lang="en">
        <meta name="viewport" content="width=device-width, initial-scale.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="css/calendar.css">

        <title>Staff Scheduler</title>

        <style>

            /*font style */
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap');
            *{
                margin:0%;
                padding:0%;
                box-sizing: border-box; 
                font-family:'Poppins',sans-serif;
            }
              /* side ↓ navigation */
              .slide{
                top:0;
                height:100vh;
                width:300px;
                position:absolute;
                background-color:#d9d9d9;
                transition:0.5s ease;
                transform: translateX(-650px);
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
                transform:translateX(-320px);
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

        <div id="contianer">
            <div id="header">
                <div id="monthDisplay"></div>
                <div>
                    <button id="backButton">Back</button>
                    <button id="nextButton">Next</button>
            </div>
            <div id="weekdays">
                <div>Sunday</div>
                <div>Monday</div>
                <div>Tuesday</div>
                <div>Wednesday</div>
                <div>Thursday</div>
                <div>Friday</div>
                <div>Saturday</div>

            </div>
            <div id="calendar"></div>
        </div>


            <script src="./script.js"></script>
        </body>
        </html>