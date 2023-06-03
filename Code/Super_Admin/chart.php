<?php
$servername = "sql306.epizy.com";
    $db_username = "epiz_34274851";
    $db_password = "hI7rrGn3YsJzzY";
    $dbname = "epiz_34274851_customer";
    try {
        // Connect to the database
        $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
        // Fetch the data
        $query = $db->query("SELECT City, COUNT(*) as Count FROM orders GROUP BY City");
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
    
        // Convert the data to JSON
        $json = json_encode($data);
    
        // Return the JSON response
        header('Content-Type: application/json');
        echo $json;
    } catch (PDOException $e) {
        // Handle database connection errors
        die("Database error: " . $e->getMessage());
    }
    ?>
