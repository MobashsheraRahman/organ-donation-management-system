
<?php
$EMAIL = $_POST['EMAIL'];
$x = $_POST['PASS_WORD'];


//connection to database server
$con = new mysqli('localhost', 'root', '', 'organdb');
if (mysqli_num_rows(mysqli_query($con, "SELECT * FROM registration WHERE EMAIL = '$EMAIL' AND PASS_WORD = '$x'")) > 0)
?>

<?php

include 'login_header.php'; // Include header.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Section</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Welcome Section Styling */
.welcome-section {
    background-color: #e6f7ff; /* Soft blue background */
    text-align: center;
    padding: 40px 20px;
    border-top: 6px solid #ffeeba; /* Light yellow border */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 20px; /* Add space above the welcome section */
}

.welcome-section h1 {
    font-size: 2.5em;
    font-weight: bold;
    color: #0073e6; /* Calm blue */
    margin-bottom: 10px;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.welcome-section p {
    font-size: 1.2em;
    color: #444;
    max-width: 700px;
    margin: 0 auto;
    line-height: 1.6;
}

        /* Responsive Design */
        @media (max-width: 768px) {
            .welcome-section h1 {
                font-size: 2em;
            }
            .welcome-section p {
                font-size: 1em;
            }
        }

        .card-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px; /* Smaller gap between cards */
    flex-wrap: wrap;
    padding: 20px; /* Smaller padding */
}

/* Individual Card Styling */
.card {
    background: linear-gradient(135deg, #ff9a9e, #fad0c4); /* Gradient background */
    border: none;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
    width: 200px;  /* Smaller width */
    height: 250px; /* Smaller height */
    padding: 15px;
    color: #fff; /* White text for contrast */
    transition: transform 0.3s, box-shadow 0.3s;
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* Ensures spacing within the card */
}

.card:nth-child(2) {
    background: linear-gradient(135deg, #a1c4fd, #c2e9fb); /* Blue gradient for the 2nd card */
}

.card:nth-child(3) {
    background: linear-gradient(135deg, #ffecd2, #fcb69f); /* Orange gradient for the 3rd card */
}

.card:hover {
    transform: translateY(-5px); /* Smaller hover effect */
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.3);
    filter: brightness(1.1);
}

.card img {
    width: 60px; /* Smaller image */
    height: auto;
    margin-bottom: 10px;
    align-self: center;
}

.card h2 {
    font-size: 1.2em; /* Smaller title */
    color: #fff;
    margin: 8px 0;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
}

/* Button Styling */
.card a {
    display: inline-block;
    text-decoration: none;
    color: #333; /* Dark text for contrast */
    background-color: #fff;
    padding: 8px 15px; /* Smaller button */
    border-radius: 6px;
    font-size: 0.9em; /* Smaller font size */
    font-weight: bold;
    transition: background-color 0.3s, color 0.3s, box-shadow 0.3s;
}

.card a:hover {
    background-color: #ff4757;
    color: #fff;
    box-shadow: 0 4px 8px rgba(255, 71, 87, 0.6);
}

    </style>
</head>
<body>

<!-- Welcome Section -->
<section class="welcome-section">
    <h1>Empower Others with a Gift of Hope</h1>
    <p>Your decision to donate can inspire, heal, and transform lives. Join the mission and make a meaningful difference today.</p>
</section>

<!-- Card Container -->
<div class="card-container">
        <!-- Card 1: Request for Organ -->
        <div class="card">
            <img src="images/request.jpg" alt="Request for Organ">
            <h2>Request for Organ</h2>
            <div class="value"><a href="organ_requests.php?EMAIL=<?php echo $EMAIL?> ">Request</a></div>

        </div>

        <!-- Card 2: Donate A Organ -->
        <div class="card">
            <img src="images/donation.jpg" alt="Donate a Organ">
            <h2>Donate A Organ</h2>
            <div class="value"><a href="available_to_donate.php?EMAIL=<?php echo $EMAIL?> ">Donate</a></div>
        </div>

        <!-- Card 3: Donation Record -->
        <div class="card">
            <img src="images/donation_record.JPG" alt="Donation Record">
            <h2>Donation Record</h2>
            <div class="value"><a href="donation_record.php?EMAIL=<?php echo $EMAIL?>  ">Record</a></div>
        </div>
    </div>
<?php 
include 'footer.php'; // Include footer.php at the bottom
?>

</body>
</html>
<?php
}
else {
  
echo "Email or Password Doesn't match";

}
?>