<?php
// Database connection
$con = mysqli_connect('localhost', 'root', '', 'organdb');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if ID is provided
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query_delete = "DELETE FROM registration WHERE REGISTRATION_ID = $id";
    if (mysqli_query($con, $query_delete)) {
        header("Location: manage_users.php");
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

// Close connection
mysqli_close($con);
?>
