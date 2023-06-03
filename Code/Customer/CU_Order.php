<?php
//include 'connect.php';

//rest of your code goes here
?>
<!DOCTYPE html>
    <head lang="en">
        <meta name="viewport" content="width=device-width, initial-scale.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
       <script src="autoslider.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Customer Order</title>

        

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
    padding:0;
    
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
    font-size:20px;
    
}
ul li a i{
    width:40px;
    text-align:center;
    

}

.input{
    display:none;
    visibility:hidden;
    -webkit-appearance:none;

}

.toggle{
    position:fixed;
    height:30px;
    width: 30px;
    top:20px;
    left:15px;
    z-index:1;
    cursor:pointer;
    border-radius:2px;
    
    box-shadow:0 0 10px rgba(0,0,0,0.3);
    transform: translateX(0px);
    transition: transform 0.54s ease;


}

.button-container {
  margin-bottom: 10px;
}

.button-container button {
  display: inline-block;
  background-color: #999999;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  margin-left: 10px;
}

.button-container button:hover {
  background-color: #777777;
}
.toggle .common{
    position:absolute;
    height: 2px;
    width: 20px;
    background-color:white;
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
    transform:translateX(-20px);
    box-shadow:0 0 15px rgba(0,0,0.5);
}

input:checked ~ .toggle {
    transform:translateX(220px);
    transition: transform 0.54s ease;
}




/* side ↑ navigation */
.mask{
  background-color: #202122;
  width: 650px;
  height:650px; 
  position :absolute;
  float:right;
  right:0;
  opacity:0.4;
  top:0;
  z-index:1;
}


.bg_box{
  background-color: #202122;
  width: 100%; 
  position :absolute;
  top:0;
  height:650px;
  z-index:-1;
}

h1{font-family:'Poppins',sans-serif;
    font-size:45px;

}
h2{
  font-family:'Poppins',sans-serif;
    font-size:25px;
}
h3{
  font-family: 'Times New Roman', sans-serif;
    font-size:20px;
    font-weight:400;
}
.cont_1{
  top:10%;
  left:3%;
  width: 25%;
  position :absolute;
  height:100px;
  color:white;
  z-index:-1;
}
.cont_2{
  top:49%;
  right:6%;
  width: 23%;
  position :absolute;
  height:100px;
  color:white;
  z-index:1;
  text-align:right;
}

.cont_3{
  top:5%;
  right:6%;
  width: 23%;
  position :absolute;
  height:100px;
  color:black;
  z-index:1;
  text-align:right;
}

.cont_4{
  top:5%;
  right:6%;
  width: 23%;
  position :absolute;
  height:100px;
  color:black;
  z-index:1;
  text-align:right;
}

.bg_light{

  width: 100%; 
  position :absolute;
  top:650px;
  height:680px;
  z-index:-1;
}
.cont_5{
  background-color: white;
  width: 80%; 
  overflow:hidden;
  position :absolute;
  top:60px;
  left:10%;
  height:530px;
  z-index:0;
}


.cont_6{
  top:199%;
  left:0%;

  width: 100%;
  height:200px;
  border: 5px solid #555;
  position :absolute;
  height:668px;
  color:black;
  z-index:-1;
}

.mask_2{
    height:100%;
    width:100%;
    background-color:#d9d9d9;
    opacity:0.5;
    position:absolute;
}

.left-box {

		background-color: #928f8f;
		padding: 20px;
		width: 35%;
		box-sizing: border-box;
        left: 5%;
        top: 20%;
        position: absolute;
		}

.left-box button {
    background-color: #3b3939;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
      left: 100px;
      position: relative;
      
		}

    .left-box button:hover {
			background-color: #000000;
		}
    .package-name {
			font-size: 24px;
			font-weight: bold;
		}

		.package-inclusions {
			margin-top: 10px;
			font-size: 16px;
		}

		.package-description {
			margin-top: 10px;
			font-size: 16px;
		}

		.right-box {
			background-color: #928f8;
			padding: 1px;
			width: 50%;
			box-sizing: border-box;
      position: absolute;
      left: 50%;
      top: 20%;
		}

    .right-box button {
    background-color: #3b3939;
			color: white;
			padding: 1px 9px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
      left: 10px;
      position: relative;
      top:-80px;
      font-size:25px;
      transition: background-color 0.4s ease, color 0.4s ease;
    }

    .right-box button:hover {
    background-color: white;
			color: red;
    }


    .right-box h2, .right-box h3 {
    position: relative;
    left: 20%;
    top: 5%;
    padding:3px;
}

    
    .right-box button{
      position: relative;
      left: 8%;
      border-radius:35px;

    }

    .button-container {
      margin-bottom: 10px;
    }
    .button-container {
            margin-bottom: 10px;
        }

        .button-container button {
            display: inline-block;
            background-color: #999999;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-left: 10px;
        }

        .button-container button:hover {
            background-color: #777777;
        }
    #order-form-container {
            width: 100%;
            padding: 20px;
            position: absolute;
            display:none;
            background-color: hsla(0, 0%, 60%, 0.8);
        }

        #order-form {
            max-width: 400px;
            margin: 1 auto;
            padding: 5px;
            border: 5px solid black;
            background-color:#ccc;
        }

        #order-form h2 {
            margin-top: 0;
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        #order-form .form-row {
            display: flex;
            flex-direction: column;
            padding: 2px;
            margin-bottom: 10px;
        }

        #order-form label {
            background-color: #666;
            color: #fff;
            padding: 5px;
        }

        #order-form input[type="text"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

    #next-btn {
        position: inline;
        top: 20px;
        right: 20px;
        padding: 10px 20px;
        background-color: #b1b1b1;
        border: 10px inset;
        cursor: pointer;
    }

    .optional {
        color: red;
    }
    .select-wrapper {
            height: auto;
            max-height: 200px;
            overflow-y: auto;
            width:100%;

        }

    .control{
      height: auto;
    max-height: 150px;
    overflow-y: auto;
    width: 100%;
    }







/* slider image  */

    .sliderr{
  width: 900px;
  height:900px;
  border-radius: 10px;
  overflow: hidden;
  left:500px;
  position: relative;
  top:750px;
}

.slidess{
  width: 900%;
  height:900px;
  display: flex;
}

.slidess input{
  display: none;
}

.slide1{
  width: 20%;
  transition: 2s;
}

.slide1 img{
  width: 900px;
  height:900px;
}

.navigation-mannual{
  position: absolute;
  width: 900px;
  margin-top: -40px;
  display: flex;
  justify-content: center;
}

.mannual-btn{
  border: 2px solid #ccc;
  padding: 5px;
  border-radius: 10px;
  cursor: pointer;
  transition: 1s;
}

.mannual-btn:not(:last-child){
  margin-right: 40px;
}

.mannual-btn:hover{
  background-color: #ccc;
}

#radio1:checked ~ .first{
  margin-left: 0;
}

#radio2:checked ~ .first{
  margin-left: -20%;
}

#radio3:checked ~ .first{
  margin-left: -40%;
}

#radio4:checked ~ .first{
  margin-left: -60%;
}
#radio5:checked ~ .first{
  margin-left: -80%;
}
#radio6:checked ~ .first{
  margin-left: -100%;
}

/* Automatic Navigation */
.navigation-auto{
  position: absolute;
  display: flex;
  width: 900px;
  justify-content: center;
  margin-top:900px;
}

.navigation-auto div{
  border: 2px solid #333;
  padding: 5px;
  border-radius: 10px;
  transition: 1s;
}

.navigation-auto div:not(:last-child){
  margin-right: 40px;
}

#radio1:checked ~.navigation-auto .auto-btn-1{
  background: #ccc;
}

#radio2:checked ~.navigation-auto .auto-btn-2{
  background: #ccc;
}
#radio3:checked ~.navigation-auto .auto-btn-3{
  background: #ccc;
}

#radio4:checked ~.navigation-auto .auto-btn-4{
  background: #ccc;
}
#radio5:checked ~.navigation-auto .auto-btn-5{
  background: #ccc;
}
#radio6:checked ~.navigation-auto .auto-btn-6{
  background: #ccc;
}


/* end of slider image  */


</style>
</head>
<body>

<!--side              ↓                panel -->
<label>
<input type="checkbox" class="input">
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
<!--1st part-->
<div class = "mask"></div>
<img src = "C_img/Order_1.jpg" width="650" height="650" style="float:right;z-index:0;">

<div class = "bg_box">
    <div class="cont_1">
        <h1>LET US FIND YOUR STORY</h1>

    </div>
</div>
<div class="cont_2">
<h1>AND TELL IT IN PICTURES INSTEAD OF WORDS</h1>
</div>

<div class="cont_3">
<a href="#"><u>VIEW YOUR ORDERS HERE</u></a>
</div>
</div>

<!--2nd part-->

  <!-- Image Slider Start -->
  <div class="sliderr">
    <div class="slidess">
      <!-- Radio Button Start  -->
      <input type="radio" name="radio-btn" id="radio1">
      <input type="radio" name="radio-btn" id="radio2">
      <input type="radio" name="radio-btn" id="radio3">
      <input type="radio" name="radio-btn" id="radio4">
      <input type="radio" name="radio-btn" id="radio5">
      <input type="radio" name="radio-btn" id="radio6">
      <!-- Radio Button Close  -->

      <!-- Slide Image Start -->
      <div class="slide1 first">
        <img src="C_img\Order_2_5.jpg" alt="C:\xampp\htdocs\Code\Customer\C_img\Order_1.jpg">
      </div>
      <div class="slide1">
        <img src="C_img\Order_2_6.jpg" alt="">
      </div>
      <div class="slide1">
        <img src="C_img\Order_2_7.jpg" alt="">
      </div>
      <div class="slide1">
        <img src="C_img\Order_2_8.jpg" alt="">
      </div>
      <div class="slide1">
        <img src="C_img\Order_1.jpg" alt="">
      </div>
      <div class="slide1">
        <img src="C_img\Order_2_1.jpg" alt="">
      </div>
      <!-- Slide Image Close -->

      <!-- Automatic Navigation Start -->
      <div class="navigation-auto">
        <div class="auto-btn-1"></div>
        <div class="auto-btn-2"></div>
        <div class="auto-btn-3"></div>
        <div class="auto-btn-4"></div>
        <div class="auto-btn-5"></div>
        <div class="auto-btn-6"></div>
      </div>
      <!-- Automatic Navigation Close -->
    </div>
	
      <!-- Mannual Navigation Start -->
      <div class="navigation-mannual">
        <label for="radio1" class="mannual-btn"></label>
        <label for="radio2" class="mannual-btn"></label>
        <label for="radio3" class="mannual-btn"></label>
        <label for="radio4" class="mannual-btn"></label>
        <label for="radio5" class="mannual-btn"></label>
        <label for="radio6" class="mannual-btn"></label>
      </div>
      <!-- Mannual Navigation Close -->
  </div>
  <!-- Image Slider Close -->







<!--3rd part-->


<div class="cont_6">
    <div class="mask_2">
    <img src="C_img/Order_3.jpg" style = "z-index:-2; position :absolute; left:-2%; height:655px; width:1400px;">
</div>
    <h1 style="font-size:35px; position:absolute; left:5%; top:25px;">OUR PACKAGES</h1>


    <!--Left box #1-->
    <div class="left-box" id="leftBox">
        <div class="package-name"><h2 style="color:white;">CAPTURED - MOMENTS</h2>
        </div>
        <div class="package-inclusions">
            <ul>
                <li>Prenup Photo and Video Session</li>
                <li>1 Photographer</li>
                <li>1 Videographer</li>
                <li>Full Event Coverage on Wedding Day</li>
                <li>1 Photographer</li>
                <li>1 Videographer</li>
            </ul>
        </div>
        <div class="choosepackage">
        <button onclick="showOrderForm()">Choose Package</button>
        </div>
        <div class="package-description">
        The output will be provided to you in a soft copy format, including videos and pictures, either through flash drive or Google Drive.
        </div>
    </div>

    <!--Left box #2-->
    <div class="left-box" id="leftBox2">
        <div class="package-name"><h2 style="color:white;">EXCELCIOR<h2>
        </div>
        <div class="package-inclusions">
            <ul>
                
                <li>Full Event Coverage</li>
                <li>Soft copy of Video and Pictures (Google drive)</li>
                <li>1 Photographer</li>
                <li>2 Videographer</li>
            </ul>
        </div>
        <div class="choosepackage">
        <button onclick="showOrderForm()">Choose Package</button>
        </div>
        <div class="package-description">
        The output will be provided to you in a soft copy format, including videos and pictures, either through flash drive or Google Drive.
        </div>
    </div>

    <!--Left box #3-->
    <div class="left-box" id="leftBox3">
        <div class="package-name"><h2 style="color:white;">Shutterbug<h2>
        </div>
        <div class="package-inclusions">
            <ul>
                
                <li>Full Event Coverage</li>
                <li>Soft copy of Video and Pictures (Flash drive or google drive)</li>
                <li>1 Photographer</li>
                <li>1 Videographer</li>
            </ul>
        </div>
        <div class="choosepackage">
        <button onclick="showOrderForm()">Choose Package</button>
        </div>
        <div class="package-description">
        The output will be provided to you in a soft copy format, including videos and pictures, either through flashdrive or Google Drive.
        </div>
    </div>





    <div class="right-box">
			<h2>Captured Moments 12,000</h2>
      <h3>Capturing love, one frame at a time </h3>
			<button id="toggleButton" name="p1">←</button>

			<h2>Excelcior 9,000</h2>
      <h3>Capturing Memories to Last a Lifetime </h3>
			<button id="toggleButton2" name="p2">←</button>

			<h2>Shutterbug 7,500</h2>
      <h3>Packages for any and all other kinds of portraits</h3>
			<button id="toggleButton3" name="p3">←</button>
		</div>


    <div id="order-form-container">
        <h2 style="text-align:center; color:white;">ORDER DETAILS</h2>

        <form id="order-form" action="order_upload.php" method="POST">
            <div class="form-row">
                <label for="time">TIME</label>
                <input type="text" id="time" name="time" placeholder="Enter text here.." required>
            </div>

            <div class="form-row">
                <label for="event">EVENT</label>
                <input type="text" id="event" name="event" placeholder="Enter text here.." required>
            </div>

            <div class="form-row">
                <label for="theme">THEME</label>
                <input type="text" id="theme" name="theme" placeholder="Enter text here.." required>
            </div>

            <div class="form-row">
                <label for="City">City:</label>
                <div class="select-wrapper">
                    <select id="City" name="City" name="City" style="width:376px; max-height:200px;" class="control"  required>
                        <option value="">Select City</option>
                        <option value="caloocan">Caloocan City</option>
                        <option value="laspinas">Las Piñas City</option>
                        <option value="makati">Makati City</option>
                        <option value="malabon">Malabon City</option>
                        <option value="mandaluyong">Mandaluyong City</option>
                        <option value="manila">Manila City</option>
                        <option value="marikina">Marikina City</option>
                        <option value="muntinlupa">Muntinlupa City</option>
                        <option value="navotas">Navotas City</option>
                        <option value="paranaque">Parañaque City</option>
                        <option value="pasay">Pasay City</option>
                        <option value="pasig">Pasig City</option>
                        <option value="pateros">Pateros</option>
                        <option value="quezon">Quezon City</option>
                        <option value="sanjuan">San Juan City</option>
                        <option value="taguig">Taguig City</option>
                        <option value="valenzuela">Valenzuela City</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <label for="city">Address</label>
                <input type="text" id="address" name="address" placeholder="Address Details" required>
            </div>

            <div class="form-row">
                <label for="additional">ADDITIONAL INFORMATION <span class="optional">(Optional)</span></label>
                <input type="text" id="additional" name="additional" placeholder="Enter text here..">
            </div>

            <div class="button-container">
                <button id="return-btn" class="custom-button">Return</button>
                <button id="custom-btn" class="custom-button">Next</button>
            </div>
        </form>
    </div>

	</div>
</div>










<script>


    $(document).ready(function () {
        // Initially hide all the left boxes and the form
        $('.left-box').hide();
        $('#order-form-container').hide();

        // Toggle the visibility of the left box when the button is clicked
        $('#toggleButton').click(function () {
            // Hide the previously opened left box
            $('.left-box').not('#leftBox').hide();
            $('#leftBox').toggle();
        });

        $('#toggleButton2').click(function () {
            // Hide the previously opened left box
            $('.left-box').not('#leftBox2').hide();
            $('#leftBox2').toggle();
        });

        $('#toggleButton3').click(function () {
            // Hide the previously opened left box
            $('.left-box').not('#leftBox3').hide();
            $('#leftBox3').toggle();
        });

        $('#leftBox .order-form button').click(function () {
            showOrderForm();
        });

        $('#leftBox2 .choosepackage button').click(function () {
            showOrderForm();
        });

        $('#leftBox3 .choosepackage button').click(function () {
            showOrderForm();
        });

        function showOrderForm() {
            var orderFormContainer = document.getElementById('order-form-container');
            orderFormContainer.style.display = 'block';

            // Hide the form on pressing Enter
            $(document).keydown(function (e) {
                if (e.key === "Enter") {
                    orderFormContainer.style.display = 'none';
                }
            });

            // Hide the form on clicking the "Return" button
            $("#return-btn").click(function () {
                orderFormContainer.style.display = 'none';
            });
        }

        // Handle form submission
            // Hide the form after submission
            $('#order-form-container').hide();
        });






</script>
</body>
</html> 