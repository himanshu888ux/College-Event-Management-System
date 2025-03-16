<?php
session_start();
require '../database/connect.php';

// If user is already logged in, redirect them to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: welcome.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['Email']); 
    $password = trim($_POST['Password']);

    if (!empty($email) && !empty($password)) {
        // Secure query using prepared statements
        $sql = "SELECT reg_id, email, password FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $db_password = $row['password'];

            // Verify password using password_verify()
            if (password_verify($password, $db_password)) {
                // Store session variables
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $row['reg_id']; // Ensure correct column name
                $_SESSION["email"] = $email;

                header("location: welcome.php"); // Redirect to dashboard
                exit;
            } else {
                $error = "Invalid email or password.";
            }
        } else {
            $error = "Invalid email or password.";
        }

        $stmt->close();
    } else {
        $error = "Please enter both email and password.";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Error</title>
</head>
<body>
    <?php 
    if (isset($error)) {
        echo "<script> alert('$error'); </script>";
    }
    ?>
    <p><a href="login.html">Back to Login</a></p>
</body>
</html>
