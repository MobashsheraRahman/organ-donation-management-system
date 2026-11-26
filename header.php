

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Organ Donation'; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto+Slab:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"> <!-- Use external stylesheet for maintainability -->
    <style>
        /* General Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #4D4D4D;
            padding-top: 80px; /* Adds spacing for fixed header */
        }

        /* Header Styles */
        .top-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background: linear-gradient(90deg, #FFE3C1, #FFDAB5);
            color: #333;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .top-header .left-title {
            font-size: 22px;
            font-weight: bold;
        }

        .top-header .nav-links {
            display: flex;
            gap: 20px;
        }

        .top-header .nav-links a {
            color: #333;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .top-header .nav-links {
    display: flex;
    gap: 20px;
    margin-left: auto; /* Pushes to the right */
    margin-right: 20px; /* Adjusts spacing from the right edge */
}


        .top-header .nav-links a:hover {
            color: #7A4F93;
        }

        /* Menu Bar */
        .menu-bar {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 25px;
            height: 20px;
            cursor: pointer;
        }

        .menu-bar .bar {
            width: 100%;
            height: 3px;
            background-color: #333;
            border-radius: 2px;
            transition: background-color 0.3s;
        }

        .menu-bar:hover .bar {
            background-color: #7A4F93;
        }

        /* Dropdown Menu */
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 60px;
            right: 20px;
            background-color: #FFF9E6;
            border: 1px solid #FFDAB5;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .dropdown-menu a {
            display: block;
            padding: 10px 20px;
            text-decoration: none;
            color: #4D4D4D;
            font-size: 16px;
            font-family: 'Roboto Slab', serif;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .dropdown-menu a:hover {
            background-color: #FFDAB5;
            color: #7A4F93;
        }

        /* Show Dropdown */
        .dropdown-menu.show {
            display: block;
        }
    </style>
</head>

<body>
    <!-- Top Header -->
    <div class="top-header">
        <div class="left-title">Organ Donation</div>
        <div class="nav-links">
            <a href="index.php">Home</a>

            <a href="our_vision.php">Our Vision</a>
            <a href="FAQ.php">FAQs</a>
        </div>
        <!-- Menu Bar -->
        <div class="menu-bar" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <!-- Dropdown Menu -->
        <div class="dropdown-menu" id="dropdownMenu">
            <a href="login.php">Login</a>
            <a href="admin/admin_login.php">Admin</a>
        </div>
    </div>

    <script>
        function toggleMenu() {
            const dropdown = document.getElementById("dropdownMenu");
            dropdown.classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside
        document.addEventListener("click", (event) => {
            const dropdown = document.getElementById("dropdownMenu");
            const menuBar = document.querySelector(".menu-bar");
            if (!menuBar.contains(event.target) && dropdown.classList.contains("show")) {
                dropdown.classList.remove("show");
            }
        });
    </script>
