<?php
session_start(); // Start the session

// Destroy the session to log the user out
session_destroy();

// Redirect to the homepage (index.php) after logout
header("Location: index.php");
exit();
?>
