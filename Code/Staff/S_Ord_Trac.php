<!DOCTYPE html>
    <head lang="en">
        <meta name="viewport" content="width=device-width, initial-scale.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Customer Order tracker</title>

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
                background-image:url(S_img/Ord_Track.jpg);
                
                background-size:cover;
                background-repeat: no-repeat;
                
            }
            body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.5); /* Replace with the desired color and opacity */
            z-index: -1;
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
            input:checked ~ .toggle .common {
                background-color:black;
            }
            /* side ↑ navigation */

            .cont1{
                position:absolute;
                
                top:3%;
                left:8%;
                
            }
            .cont2{
                position:absolute;
                
                top:9%;
                left:4%;
                height:600px;
                width:1200px;
                background-color:#d9d9d9;
                
            }
            .sub_cont{
                position:absolute;
                top:5%;
                left:4%;
            }
          
            h1{
                font-family:'Poppins',sans-serif;
                color:black;
                font-size:29px;
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
        <div class="cont1">
            <h1>     PENDING ORDERS </h1>

            </div>
            <!--content here-->
            </div>
        <div class="cont2">
            <div class="sub_cont">
            <div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Time</th>
                <th>Event</th>
                <th>Theme</th>
                <th>City</th>
                <th>Address</th>
                <th>Additional</th>
                <th>Email</th>
                <th>Verified</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php

            // Assuming you have already established a database connection
            $connection = mysqli_connect('sql306.epizy.com','epiz_34274851','hI7rrGn3YsJzzY','epiz_34274851_customer');

            // Fetch specific columns from the "orders" table
            $query = "SELECT time, event, theme, City, address, additional, email, verified FROM orders";
            $result = mysqli_query($connection, $query);

            $rowsPerPage = 12; // Number of rows to display per page
            $totalRows = mysqli_num_rows($result);
            $totalPages = ceil($totalRows / $rowsPerPage); // Calculate total number of pages

            $currentPage = 1;
            if (isset($_GET['page'])) {
                $currentPage = $_GET['page'];
            }

            // Adjust the query to retrieve rows for the current page
            $offset = ($currentPage - 1) * $rowsPerPage;
            $query .= " LIMIT $offset, $rowsPerPage";
            $result = mysqli_query($connection, $query);

            $id = $offset + 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $id++ . "</td>";
                echo "<td>" . $row['time'] . "</td>";
                echo "<td>" . $row['event'] . "</td>";
                echo "<td>" . $row['theme'] . "</td>";
                echo "<td>" . $row['City'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['additional'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['verified'] . "</td>";
                echo "<td>Verify | Delete </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<div class="pagination">
    <?php
    // Generate pagination links
    for ($page = 1; $page <= $totalPages; $page++) {
        echo "<a href='?page=$page'>$page</a> ";
    }
    ?>
</div>

<style>
     .table-container {
        position: relative;
        padding-bottom: 10px; /* Adjust as needed to make space for pagination */
    }

    .pagination {
        position: absolute;
        bottom: 0;
        left: 0;
        padding: 0px;
    }
</style>

<script>
    // JavaScript code to toggle pagination links
    const paginationLinks = document.querySelectorAll('.pagination a');
    paginationLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const page = this.getAttribute('href').split('=')[1];
            window.location.href = '?page=' + page;
        });
    });
</script>
        </div>
        
        </body>
        </html>