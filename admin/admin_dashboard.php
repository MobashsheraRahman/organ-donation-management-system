<?php
// Start session
session_start();

// Ensure the admin is logged in
if (!isset($_SESSION['admin_email'])) { // Replace 'admin_email' with your actual session variable if different
    header("Location: admin_login.php");
    exit;
}

// Database connection
$con = mysqli_connect('localhost', 'root', '', 'organdb');

// Check if the connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Initialize variables with default values to avoid undefined errors
$total_users = 0;
$total_donors = 0;
$total_requests = 0;
$pending_requests = 0;

// Fetch Total Users
$query_users = "SELECT COUNT(*) AS total_users FROM registration";
$result_users = mysqli_query($con, $query_users);
if ($result_users) {
    $data_users = mysqli_fetch_assoc($result_users);
    $total_users = $data_users['total_users'];
}

// Fetch Total Donors
$query_donors = "SELECT COUNT(*) AS total_donors FROM donor";
$result_donors = mysqli_query($con, $query_donors);
if ($result_donors) {
    $data_donors = mysqli_fetch_assoc($result_donors);
    $total_donors = $data_donors['total_donors'];
}

// Fetch Total Requests
$query_requests = "SELECT COUNT(*) AS total_requests FROM organ_requests";
$result_requests = mysqli_query($con, $query_requests);
if ($result_requests) {
    $data_requests = mysqli_fetch_assoc($result_requests);
    $total_requests = $data_requests['total_requests'];
}

// Fetch Pending Requests
$query_pending_requests = "SELECT COUNT(*) AS pending_requests FROM organ_requests WHERE resolved_status = 'Pending'";
$result_pending_requests = mysqli_query($con, $query_pending_requests);
if ($result_pending_requests) {
    $data_pending_requests = mysqli_fetch_assoc($result_pending_requests);
    $pending_requests = $data_pending_requests['pending_requests'];
}

// Close the database connection
mysqli_close($con);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #fffbea;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header */
        .navbar {
            background-color: #ffe680; /* Brighter Yellow */
            color: #333;
            padding: 1.5rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar .brand {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
        }

        .navbar a {
            color: #333;
            text-decoration: none;
            margin-left: 1rem;
            font-weight: bold;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        /* Dashboard Cards */
        .dashboard {
            flex: 1;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 2rem;
        }

        .card {
            background: white;
            width: 22%;
            margin: 1rem;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
            text-align: center;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center; /* Center the content vertically */
            align-items: center; /* Center the content horizontally */
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        }

        .card i {
            font-size: 3rem;
            color: white;
            padding: 20px;
            border-radius: 50%;
            background-color: #007bff;
            position: absolute;
            top: -20px;
            right: -20px;
        }

        .card:nth-child(1) i {
            background-color: #007bff; /* Blue for Total Users */
        }

        .card:nth-child(2) i {
            background-color: #28a745; /* Green for Donors */
        }

        .card:nth-child(3) i {
            background-color: #ffc107; /* Yellow for Requests */
        }

        .card:nth-child(4) i {
            background-color: #17a2b8; /* Cyan for Fulfilled Requests */
        }

        .card h2 {
            font-size: 2.5rem;
            color: #343a40;
            margin: 0.5rem 0;
        }

        .card p {
            color: #777;
            font-size: 1.1rem;
        }

        /* Footer */
        footer {
            background: #ffe680; /* Brighter Yellow */
            color: #333;
            text-align: center;
            padding: 1rem 0;
            margin-top: auto;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
        }

        footer a {
            color: #333;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="navbar">
    <div class="brand">Admin Dashboard</div>
    <div>
        <a href="manage_users.php">Manage Users</a>
        <a href="manage_requests.php">Manage Requests</a>
        <!--<a href="admin_reports.php">Reports</a>-->
        <a href="admin_logout.php">Log Out</a>

    </div>
</div>

<div class="dashboard">
    <!-- Total Users -->
    <div class="card">
        <i class="fas fa-users"></i>
        <h2><?php echo $total_users; ?></h2> <!-- Dynamic Total Users -->
        <p>Total Users</p>
    </div>

    <!-- Total Donors -->
    <div class="card">
        <i class="fas fa-hand-holding-heart"></i>
        <h2><?php echo $total_donors; ?></h2> <!-- Dynamic Total Donors -->
        <p>Total Donors</p>
    </div>

    <!-- Total Requests -->
    <div class="card">
        <i class="fas fa-envelope"></i>
        <h2><?php echo $total_requests; ?></h2> <!-- Dynamic Total Requests -->
        <p>Total Requests</p>
    </div>

    <!-- Fulfilled Requests -->
    <div class="card">
        <i class="fas fa-check-circle"></i>
        <h2><?php echo $pending_requests; ?></h2> <!-- Dynamic Pending Requests -->
        <p>Pending</p>
    </div>
</div>

<footer>
    <p>&copy; 2024 Organ Donation System. <a href="#">Privacy Policy</a></p>
</footer>

</body>
</html>
