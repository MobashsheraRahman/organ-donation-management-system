<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lung Donation Information</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto+Slab:wght@400&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FFF9E6; /* Same background color */
            color: #4D4D4D;
        }

       
        /* Content Section */
        .content-section {
            padding: 40px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .content-section h1 {
            font-size: 36px;
            font-family: 'Poppins', sans-serif;
            color: #7A4F93;
            text-align: center;
            margin-bottom: 20px;
        }

        .content-section img {
            display: block;
            max-width: 50%;
            margin: 20px auto;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .content-section p {
            font-size: 18px;
            font-family: 'Roboto Slab', serif;
            color: #4D4D4D;
            line-height: 1.8;
            margin: 20px 0;
        }

       
    </style>
</head>

<body>
    <!-- Top Navigation Header -->
    <div class="top-header">
        <div class="left-title">Organ Donation</div>
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="#vision">Our Vision</a>
            <a href="FAQ.php">FAQs</a>
        </div>
        <div class="menu-bar" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <div class="dropdown-menu" id="dropdownMenu">
            <a href="login.php">Login</a>
            <a href="admin/admin_login.php">Admin</a>
        </div>
    </div>

    <!-- Content Section -->
    <div class="content-section">
        <h1>Lung Donation</h1>
        <img src="images/lung-image.jpg" alt="Lung Illustration">
        <p>
            The lungs are vital organs that are responsible for oxygenating the blood and removing carbon dioxide from the body. Healthy lungs are essential for breathing and overall health.
        </p>
        <p>
            Lung donation is a life-saving procedure for patients suffering from severe lung diseases or respiratory failure. A lung transplant can offer these patients a chance to breathe easily and lead a better quality of life.
        </p>
        <p>
            Lung donations are typically done by deceased donors. The donor's lungs are removed after a thorough medical evaluation and matching with the recipient. Timing is critical during lung transplants, and the procedure must be done as soon as possible.
        </p>
        <p>
            The lung donation process is performed with the utmost care and respect, ensuring that the donor’s organs help save lives. Families of donors often find peace in knowing that their loved one's donation has given someone the chance to live.
        </p>
        <p>
            By registering as a lung donor, you can make a difference in the lives of those in need. Your decision to donate can provide hope and a future to those awaiting life-saving lung transplants.
        </p>
    </div>

    <?php include('footer.php'); ?>
</body>

</html>
