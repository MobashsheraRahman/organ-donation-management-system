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

// Fetch all users from the registration table
$query_users = "SELECT * FROM registration";
$result_users = mysqli_query($con, $query_users);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #fdfdf5;
            color: #333;
            font-family: Arial, sans-serif;
        }

        .header {
            background-color: #fff9c4;
            padding: 10px 0;
            color: #555;
            border-bottom: 1px solid #f0e68c;
        }

        .header .nav-link {
            color: #555;
            font-weight: bold;
            margin-right: 15px;
            transition: color 0.3s;
        }

        .header .nav-link:hover {
            color: #d4b356;
        }

        .header h2 {
            margin: 0;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .container {
            margin-top: 30px;
        }

        .table {
            background: white;
            border: 1px solid #f0e68c;
            border-radius: 8px;
        }

        .btn-warning {
            background-color: #f5d976;
            border-color: #f5d976;
            color: white;
        }

        .btn-warning:hover {
            background-color: #eac16b;
            border-color: #eac16b;
        }

        .btn-danger {
            background-color: #f5a9a9;
            border-color: #f5a9a9;
            color: white;
        }

        .btn-danger:hover {
            background-color: #e89090;
            border-color: #e89090;
        }

        .footer {
            background-color: #fff9c4;
            padding: 10px 0;
            text-align: center;
            color: #555;
            border-top: 1px solid #f0e68c;
            font-size: 0.9em;
            margin-top: 20px;
        }

        h1 {
            color: #6c757d;
            font-weight: bold;
            margin-bottom: 20px;
        }

        tr:hover {
            background-color: #faf3d9;
        }
    </style>
</head>
<body>

<!-- Header Section -->
<div class="header d-flex justify-content-between align-items-center px-4">
    <h2>Admin</h2>
    <nav>
        <a href="admin_dashboard.php" class="nav-link d-inline">Dashboard</a>
        <a href="manage_requests.php" class="nav-link d-inline">Manage Requests</a>
        <a href="admin_logout.php" class="nav-link d-inline">Log Out</a>
    </nav>
</div>

<!-- Main Content -->
<div class="container">
    <h1 class="text-center">Manage Users</h1>
    <table class="table table-striped table-hover mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Blood Group</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result_users)) { ?>
                <tr>
                    <td><?php echo $row['REGISTRATION_ID']; ?></td>
                    <td><?php echo $row['FIRST_NAME']; ?></td>
                    <td><?php echo $row['LAST_NAME']; ?></td>
                    <td><?php echo $row['AGE']; ?></td>
                    <td><?php echo $row['BLOOD_GROUPr']; ?></td>
                    <td><?php echo $row['Gender']; ?></td>
                    <td><?php echo $row['EMAIL']; ?></td>
                    <td><?php echo $row['phoneR']; ?></td>
                    <td><?php echo $row['ADD_RESSr']; ?></td>
                    <td>
                        <a href="edit_user.php?id=<?php echo $row['REGISTRATION_ID']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete_user.php?id=<?php echo $row['REGISTRATION_ID']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!-- Footer -->
<div class="footer">
    &copy; 2024 Organ Donation System. Privacy Policy
</div>

</body>
</html>
