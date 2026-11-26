<?php
// Start session and verify admin is logged in
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: admin_login.php");
    exit;
}

// Database connection
$con = mysqli_connect('localhost', 'root', '', 'organdb');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$request_id = $_POST['request_id'];
$resolved_status = $_POST['resolved_status'];

// Update the request status
$query_update = "UPDATE organ_requests SET resolved_status = '$resolved_status' WHERE REQUEST_ID = $request_id";
if (mysqli_query($con, $query_update)) {
    header("Location: manage_requests.php");
} else {
    echo "Error updating record: " . mysqli_error($con);
}

// Close connection
mysqli_close($con);
?>
