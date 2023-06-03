<?php
session_start();
require 'phpmailer/PHPMailerAutoload.php';

// Check if the user is already logged in
if (isset($_SESSION['email'])) {
    header("Location: Customer/CU_Home.php");
    exit();
}

// Get the user's input from the form
if (isset($_POST['email'])) {
    $email = $_POST['email'];

    // Connect to the database
    $servername = "sql306.epizy.com";
    $db_username = "epiz_34274851";
    $db_password = "hI7rrGn3YsJzzY";
    $dbname = "epiz_34274851_customer";
    $conn = new mysqli('sql306.epizy.com','epiz_34274851','hI7rrGn3YsJzzY','epiz_34274851_customer');
    if (!$conn) {
        die('<script>alert("Error: Failed to connect to database."); window.location.href = "For_Pass.php";</script>');
    }

    // Check if the email exists in the database
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        // Generate a unique verification code
        $verification_code = uniqid();

        // Store the verification code in the database
        $sql = "UPDATE users SET verification_code='$verification_code' WHERE email='$email'";
        if (mysqli_query($conn, $sql)) {
            // Send an email to the user with a link to the reset password page
            $reset_password_link = "http://localhost/Code/New_Pass.php?email=$email&verification_code=$verification_code";
            
            $mail = new PHPMailer;

            // Set mailer to use SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'your_gmail_account@gmail.com';
            $mail->Password = 'your_gmail_password';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Set email content
            $mail->setFrom('noreply@cu.com', 'CU');
            $mail->addAddress($email);
            $mail->Subject = 'Password reset request';
            $mail->Body    = "Hello,\n\nPlease click on the following link to reset your password:\n\n$reset_password_link\n\nIf you did not request this password reset, please ignore this email.\n\nBest regards,\nCU";

            if($mail->send()) {
                echo '<script>alert("An email has been sent to your email address with instructions to reset your password."); window.location.href = "For_Pass.php";</script>';
            } else {
                echo '<script>alert("Error: Failed to send email."); window.location.href = "For_Pass.php";</script>';
            }
        } else {
            echo '<script>alert("Error: Failed to store verification code in database."); window.location.href = "For_Pass.php";</script>';
        }
    } else {
        echo '<script>alert("Error: Email address not found."); window.location.href = "For_Pass.php";</script>';
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
