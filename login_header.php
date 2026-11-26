<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organ Donation Header</title>
    <style>
       /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

/* Header Styles */
header {
    background-color: #ffddb3; /* Light orange background */
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 30px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    position: fixed; /* Make the header fixed at the top */
    top: 0; /* Align it at the top of the page */
    left: 0;
    width: 100%; /* Ensure it spans the entire width */
    z-index: 1000; /* Make sure the header is on top of other elements */
}

/* Adjust the body content to prevent overlap */
body {
    padding-top: 70px; /* Add padding to push content below the fixed header */
}

/* Logo Styles */
.logo {
    font-size: 1.5em;
    font-weight: bold;
    color: #333;
}

/* Logout Button Styles */
.logout {
    text-decoration: none;
    color: #ffffff; /* White text */
    font-size: 1em;
    font-weight: bold;
    padding: 8px 20px;
    border: none;
    border-radius: 25px; /* Rounded corners */
    background: linear-gradient(135deg, #ff9a8b, #ff6a88, #ff99ac); /* Gradient background */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); /* Soft shadow */
    transition: all 0.4s ease;
    cursor: pointer;
}

.logout:hover {
    background: linear-gradient(135deg, #ff6a88, #ff8e72, #ff758c); /* Slight color shift */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25); /* Stronger shadow */
    transform: scale(1.05); /* Slight zoom effect */
}

    </style>
</head>
<body>

<header>
    <!-- Logo -->
    <div class="logo">Organ Donation</div>

    <!-- Logout Button -->
    <a href="logout.php" class="logout">Logout</a>
</header>

</body>
</html>
