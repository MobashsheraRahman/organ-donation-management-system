<?php
// Database configuration
$host = 'localhost';
$user = 'root';       // Default user for XAMPP
$password = '';       // Leave blank for XAMPP
$dbname = 'organdb';

// Connect to the database
$conn = new mysqli($host, $user, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $name = $_POST['name'] ? htmlspecialchars($_POST['name']) : "Anonymous";
    $story = htmlspecialchars($_POST['story']);
    $heading = htmlspecialchars($_POST['heading']); // New field for heading

    // Insert data into the table
    $stmt = $conn->prepare("INSERT INTO stories (name, heading, story) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $heading, $story); // Bind the new heading field

    if ($stmt->execute()) {
        // Redirect to view_stories.php after saving
        header('Location: view_stories.php');
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
