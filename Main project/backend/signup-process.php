<?php
require '../database/connect.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form inputs
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $password = mysqli_real_escape_string($conn, trim($_POST['password']));
    $confirm_password = mysqli_real_escape_string($conn, trim($_POST['cnf-password']));
    $phone = mysqli_real_escape_string($conn, trim($_POST['phone']));
    $city = mysqli_real_escape_string($conn, trim($_POST['city']));
    $gender = mysqli_real_escape_string($conn, trim($_POST['gender']));
    $college = mysqli_real_escape_string($conn, trim($_POST['college-name']));
    $current_year = mysqli_real_escape_string($conn, trim($_POST['current-year']));
    $course = mysqli_real_escape_string($conn, trim($_POST['course']));
    $dob = mysqli_real_escape_string($conn, trim($_POST['dob']));

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match!'); window.location.href='../frontend/signup.php';</script>";
        exit();
    }

    // Check if email already exists
    $check_email = "SELECT email FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $check_email);
    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Email is already registered!'); window.location.href='../frontend/signup.php';</script>";
        exit();
    }

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, password, phone_number, city, gender, college, current_year, course, date_of_birth, created_at) 
            VALUES ('$name', '$email', '$password_hash', '$phone', '$city', '$gender', '$college', '$current_year', '$course', '$dob', NOW())";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Registration successful! You can now log in.'); window.location.href='../frontend/login.php';</script>";
        exit();
    } else {
        echo "<script>alert('Something went wrong. Please try again!'); window.location.href='../frontend/signup.php';</script>";
        exit();
    }
} else {
    echo "<script>window.location.href='../frontend/signup.php';</script>";
    exit();
}
?>
