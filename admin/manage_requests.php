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

// Fetch requests
$filter = isset($_GET['filter']) ? $_GET['filter'] : 'all';
$filter_query = "";

if ($filter === 'pending') {
    $filter_query = "WHERE resolved_status = 'Pending'";
} elseif ($filter === 'resolved') {
    $filter_query = "WHERE resolved_status = 'Resolved'";
}

$query_requests = "SELECT * FROM organ_requests $filter_query ORDER BY REQUEST_TIME DESC";
$result_requests = mysqli_query($con, $query_requests);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Requests</title>
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
            position: fixed;
            bottom: 0;
            width: 100%;
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
        <a href="manage_users.php" class="nav-link d-inline">Manage Users</a>
        <a href="admin_logout.php" class="nav-link d-inline">Log Out</a>
    </nav>
</div>

<div class="container">
    <h1 class="text-center">Manage Requests</h1>

    <!-- Filter Buttons -->
    <div class="filters text-center">
        <a href="manage_requests.php?filter=all" class="btn btn-primary">All</a>
        <a href="manage_requests.php?filter=pending" class="btn btn-warning">Pending</a>
        <a href="manage_requests.php?filter=resolved" class="btn btn-success">Resolved</a>
    </div>

    <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Organ Type</th>
            <th>Quantity</th>
            <th>Blood Group</th>
            <th>Request Type</th>
            <th>Status</th>
            <th>Request Time</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result_requests)) { ?>
            <tr>
                <td><?php echo $row['REQUEST_ID']; ?></td>
                <td><?php echo $row['ORGAN_TYPE']; ?></td>
                <td><?php echo $row['QUANTITY']; ?></td>
                <td><?php echo $row['BLOOD_GROUPn']; ?></td>
                <td><?php echo $row['REQUEST_TYPE']; ?></td>
                <td>
                    <?php if ($row['resolved_status'] === 'Pending') { ?>
                        <span class="badge bg-warning">Pending</span>
                    <?php } else { ?>
                        <span class="badge bg-success">Resolved</span>
                    <?php } ?>
                </td>
                <td><?php echo $row['REQUEST_TIME']; ?></td>
                <td>
                    <form action="update_request_status.php" method="POST" style="display: inline;">
                        <input type="hidden" name="request_id" value="<?php echo $row['REQUEST_ID']; ?>">
                        <select name="resolved_status" class="form-select form-select-sm" required>
                            <option value="Pending" <?php echo $row['resolved_status'] === 'Pending' ? 'selected' : ''; ?>>Pending</option>
                            <option value="Resolved" <?php echo $row['resolved_status'] === 'Resolved' ? 'selected' : ''; ?>>Resolved</option>
                        </select>
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    </form>
                    <a href="delete_request.php?id=<?php echo $row['REQUEST_ID']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this request?');">Delete</a>
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
