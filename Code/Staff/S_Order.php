<!DOCTYPE html>
    <head lang="en">
        <meta name="viewport" content="width=device-width, initial-scale.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Staff Order</title>

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
    position:fixed;
    background-color:#d9d9d9;
    transition:0.5s ease;
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
    transform:translateX(0);
    box-shadow:0 0 15px rgba(0,0,0.5);
}

input:checked ~ .toggle {
    transform:translateX(230px);
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


<!--1st part-->
<div class = "mask"></div>
<img src = "S_img/Order_1.jpg" width="650" height="650" style="float:right;z-index:0;">

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
<div class="bg_light">
<div class="cont_5">
  <div class="row">
    <div class="col-md-3">
      <!-- First image -->
      <img src="S_img/Order_2_1.jpg" alt="Image 1" class="img-fluid" style="height:250px; width:240px;">
    </div>
    <div class="col-md-3">
      <!-- Second image -->
      <img src="S_img/Order_2_2.jpg" alt="Image 2" class="img-fluid" style="height:250px;">
    </div>
    <div class="col-md-3">
      <!-- Third image -->
      <img src="S_img/Order_2_3.jpg" alt="Image 3" class="img-fluid" style="height:250px;">
    </div>
    <div class="col-md-3">
      <!-- Fourth image -->
      <img src="S_img/Order_2_4.jpg" alt="Image 4" class="img-fluid" style="height:250px;">
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">
      <!-- Fifth image -->
      <img src="S_img/Order_2_5.jpg" alt="Image 5" class="img-fluid" style="height:280px; padding-top:10%;">
    </div>
    <div class="col-md-3">
      <!-- Sixth image -->
      <img src="S_img/Order_2_6.jpg" alt="Image 6" class="img-fluid" style="height:280px; padding-top:10%;">
    </div>
    <div class="col-md-3">
      <!-- Seventh image -->
      <img src="S_img/Order_2_7.jpg" alt="Image 7" class="img-fluid" style="height:280px; padding-top:10%;">
    </div>
    <div class="col-md-3">
      <!-- Eighth image -->
      <img src="S_img/Order_2_8.jpg" alt="Image 8" class="img-fluid" style="height:280px; padding-top:10%;">
    </div>
  </div>
</div>
</div>

<!--3rd part-->


<div class="cont_6">
    <div class="mask_2">
    <img src="S_img/Order_3.jpg" style = "z-index:-2; position :absolute; left:-2%; height:655px; width:1400px;">
</div>
    <h1 style="font-size:35px; position:absolute; left:20%; top:35px;">OUR PACKAGES</h1>
</div>





</body>
</html> 