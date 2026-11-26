<?php
// Database connection
$con = mysqli_connect('localhost', 'root', '', 'organdb');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Update status to resolved
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query_resolve = "UPDATE organ_requests SET STATUS = 'Resolved' WHERE REQUEST_ID = $id";

    if (mysqli_query($con, $query_resolve)) {
        header("Location: manage_requests.php");
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

// Close connection
mysqli_close($con);
?>
