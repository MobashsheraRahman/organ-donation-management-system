<?php
// Start session
session_start();

// Database connection
$con = mysqli_connect('localhost', 'root', '', 'organdb');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve email and password from form
$admin_email = $_POST['ADMIN_EMAIL'];
$plain_password = $_POST['ADMIN_PASSWORD'];

// Query to get the hashed password from the database
$query = "SELECT * FROM admin WHERE ADMIN_EMAIL = '$admin_email'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $hashed_password = $row['ADMIN_PASSWORD'];

    // Verify the hashed password
    if (password_verify($plain_password, $hashed_password)) {
        // Password is correct
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_email'] = $admin_email;
        header("Location: admin_dashboard.php"); // Redirect to admin dashboard
        exit;
    } else {
        // Incorrect password
        echo "<script>alert('Invalid password!'); window.location.href='admin_login.php';</script>";
    }
} else {
    // Email not found
    echo "<script>alert('Email not found!'); window.location.href='admin_login.php';</script>";
}

// Close connection
mysqli_close($con);
?>