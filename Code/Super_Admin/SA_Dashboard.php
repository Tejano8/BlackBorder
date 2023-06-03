<!DOCTYPE html>
    <head lang="en">
        <meta name="viewport" content="width=device-width, initial-scale.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <title>Super Admin Dashboard</title>
    
        <style>
            .body{
                font-family: "Garamond", serif;
                font size:30;
            }
          .sidelogo{
            position:flex wrap;
            margin-top:20px;
            margin-left:5px;
          } 
          
          a{
            font-size:12px;
          }
          
          hr{
           
            border-top: 3px solid black;
			width: 70%;

          }

          .dash {
          display: inline-block;
          padding: 7px 15px;
          background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(200,145,22,0.25));
          border-radius: 50px;
          margin-top:5px;
        }
        body {
            font-family: Arial, sans-serif;
            
        }

        h1 {
            text-align: center;
        }

        canvas {
            max-width: 500px;
            margin: 20px auto;
            display: block;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        </style>
</head>

<body>
    <!--Side bar-->
    <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:14%; background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(200,145,22,0.25));font-family: Garamond, serif; font-size:12px; ">
    <div class="sidelogo">
    <!--Side Logo-->
    <img src="dashboard_img/side_logo.png" width="150"height="40">
        </div>
  <b class="w3-bar-item"style="margin-top:-10px;">CONTENT MANAGEMENT</b>
  
  <a href="SA_Gallery.php" style="background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(200,145,22,0.25)); margin-left:12px; margin-top:-10px;" class="w3-bar-item w3-button">SITE IMAGES</a>
  <a href="SA_Gallery" style="background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(200,145,22,0.25)); margin-left:12px;margin-top:-5px;" class="w3-bar-item w3-button">GALLERY</a>
<hr>
  <b class="w3-bar-item"style="margin-top:-15px;">ACCOUNT MANAGEMENT</b>
  <a href="SA_Staff.php" style="background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(200,145,22,0.25));margin-left:12px;margin-top:-10px;" class="w3-bar-item w3-button">STAFF</a>
  <a href="SA_Cust.php" style="background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(200,145,22,0.25));margin-left:12px;margin-top:-5px;" class="w3-bar-item w3-button">CUSTOMERS</a> 
<hr>
  <b class="w3-bar-item"style="margin-top:-15px;">SCHEDULE MANAGEMENT</b>
  <a href="SA_Sched.php" style="background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(200,145,22,0.25));margin-left:12px;margin-top:-15px;" class="w3-bar-item w3-button">CALENDAR</a>
<hr>
  <b class="w3-bar-item"style="margin-top:-15px;">CHAT</b>
  <a href="SA_Chat.php" style="background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(200,145,22,0.25));margin-left:12px;margin-top:-15px;" class="w3-bar-item w3-button">CHAT LOGS</a>
  <hr>
  <b class="w3-bar-item" style="margin-top:-15px;">PACKAGE/PAYMENT MANAGEMENT</b>
  <a href="SA_Packages.php" style="background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(200,145,22,0.25));margin-left:12px;margin-top:-10px;" class="w3-bar-item w3-button">PACKAGES</a>
  <a href="SA_Payment.php" style="background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(200,145,22,0.25));margin-left:12px;margin-top:-5px;" class="w3-bar-item w3-button">PAYMENT</a>
</div>
<!--Side bar-->


<div style="margin-left:14%">
  <div class="w3-container">
    <!--Dashboard Button-->
  <div class="dash"><a href="SA_Dashboard.php" style="font-size:15px;" ><b>Dashboard</b></a></div>

  <!--Content-->
  <h1>City Pie Chart</h1>
    <canvas id="pieChart"></canvas>

    <script>
        // Fetch the data from the PHP file
        fetch('chart.php')
            .then(response => response.json())
            .then(data => {
                // Extract the cities and counts from the JSON data
                const cities = data.map(item => item.City);
                const counts = data.map(item => item.Count);

                // Create the pie chart using Chart.js
                const ctx = document.getElementById('pieChart').getContext('2d');
                new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: cities,
                        datasets: [{
                            data: counts,
                            backgroundColor: [
                                '#FF6384',
                                '#36A2EB',
                                '#FFCE56',
                                // Add more colors if needed
                            ],
                        }],
                    },
                    options: {
                        responsive: true,
                        legend: {
                            position: 'bottom',
                        },
                        title: {
                            display: true,
                            text: 'Orders by City',
                        },
                    },
                });
            })
            .catch(error => {
                console.error('Error:', error);
            });
    </script>
</div>
</div>



</body>

</html>