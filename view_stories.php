<?php include('header.php'); ?>
<?php
// Database configuration
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'organdb';

// Connect to the database
$conn = new mysqli($host, $user, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve all stories
$sql = "SELECT name, heading, story, created_at FROM stories ORDER BY created_at DESC";
$result = $conn->query($sql);

// Set the page title
$title = "Shared Stories";

// Start HTML output
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        /* General Styles */
        body {
            font-family: 'Lora', serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #7f7f91, #b8a7d1); /* Musty lavender gradient */
            color: #5e5e5e;
            overflow-x: hidden;
        }

        .stories-section {
            padding: 60px 20px;
            max-width: 1000px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.6); /* Semi-transparent background for section */
            backdrop-filter: blur(10px); /* Adding a soft blur effect */
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            font-size: 38px;
            font-family: 'Merriweather', serif;
            color: #5b4d69;
            text-align: center;
            margin-bottom: 20px;
            animation: fadeInUp 1s ease-out;
        }

        .section-subtitle {
            font-size: 20px;
            font-family: 'Lora', serif;
            color: #5b4d69;
            text-align: center;
            margin-bottom: 40px;
            font-weight: 400;
        }

        .story-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            animation: fadeIn 1s ease-out;
        }

        .story-box {
            background: rgba(255, 255, 255, 0.6); /* Semi-transparent white */
            border: 1px solid  rgba(221, 221, 221, 0.5); /* Soft border */
            border-radius: 12px;
            padding: 20px;
            box-shadow: 00 4px 8px rgba(0, 0, 0, 0.1); /* Light shadow for depth */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            backdrop-filter: blur(5px); /* Adds a soft blur effect */
        }

        .story-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); /* Shadow on hover */
        }

        .story-heading {
            font-size: 26px;
            font-family: 'Merriweather', serif;
            color: #8c7a9e;
            margin-bottom: 15px;
            font-weight: 700;
            transition: color 0.3s ease;
        }

        .story-heading:hover {
            color: #5b4d69;
        }

        .story-text {
            font-family: 'Lora', serif;
            font-size: 18px;
            color: #5e5e5e;
            line-height: 1.7;
            margin-bottom: 20px;
            opacity: 0;
            animation: fadeIn 1s forwards;
        }

        .story-author {
            font-size: 20px;
            font-family: 'Lora', serif;
            color: #7a6a82;
            font-weight: bold;
            margin-top: 10px;
        }

        .story-date {
            font-size: 14px;
            color: #9c8f9b;
            text-align: right;
            margin-top: 15px;
        }

        .no-stories {
            text-align: center;
            font-size: 18px;
            color: #9c8f9b;
            font-style: italic;
        }

        /* Animation */
        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Register Now Section */
        .register-section {
            text-align: center;
            margin-top: 50px;
            background-color: #f2f0f6;
            padding: 30px 0;
            border-radius: 10px;
        }

        .register-section h3 {
            font-size: 32px;
            color: #5b4d69;
            margin-bottom: 10px;
            animation: fadeInUp 1.5s ease-out;
        }

        .register-section p {
            font-size: 18px;
            color: #7a6a82;
            margin-bottom: 30px;
        }

        .register-btn {
            display: inline-block;
            background-color: #8c7a9e;
            color: white;
            padding: 14px 32px;
            font-size: 20px;
            text-decoration: none;
            border-radius: 30px;
            transition: background-color 0.3s, transform 0.3s;
            font-weight: 700;
        }

        .register-btn:hover {
            background-color: #5b4d69;
            transform: scale(1.05);
        }
    </style>
</head>

<body>

    <div class="stories-section">
        <h2 class="section-title">Shared Stories</h2>
        <p class="section-subtitle">Read inspiring stories from our community that will touch your heart.</p>

        <div class="story-container">
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="story-box">
                        <h3 class="story-heading"><?php echo htmlspecialchars($row['heading']); ?></h3>
                        <p class="story-text"><?php echo nl2br(htmlspecialchars($row['story'])); ?></p>
                        <h4 class="story-author"><?php echo htmlspecialchars($row['name']); ?></h4>
                        <small class="story-date">Shared on: <?php echo date('F d, Y', strtotime($row['created_at'])); ?></small>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p class="no-stories">No stories shared yet. Be the first to share yours!</p>
            <?php endif; ?>
        </div>

        <!-- Register Now Button -->
        <div class="register-section">
            <h3>Got a story to share?</h3>
            <p>Become part of our inspiring community by registering today!</p>
            <a href="registration.php" class="register-btn">Register Now</a>
        </div>
    </div>

    <?php
    // Debugging: Check if the result has rows
    if ($result->num_rows > 0) {
        echo "<p>Story found: " . $result->num_rows . "</p>"; // Show number of rows
        while ($row = $result->fetch_assoc()) {
            echo "<p>Heading: " . htmlspecialchars($row['heading']) . "</p>"; // Debugging line to show heading
        }
    } else {
        echo "<p>No stories found in the database.</p>"; // If no rows
    }
    // Close the database connection
    $conn->close();
    ?>
<?php include('footer.php'); ?>
</body>
</html>
