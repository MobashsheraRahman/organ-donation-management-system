<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liver Donation Information</title>
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

        /* Footer Section */
        .footer-section {
            background: linear-gradient(90deg, #FFE3C1, #FFDAB5);
            color: #333;
            padding: 40px 20px;
            text-align: center;
            border-top: 4px solid #FFDAB5;
        }

        .footer-content {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .footer-connect h3,
        .footer-contact h3 {
            font-size: 18px;
            margin-bottom: 10px;
            font-family: 'Poppins', sans-serif;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .social-icons a img {
            width: 40px;
            height: 40px;
            transition: transform 0.3s ease;
        }

        .social-icons a img:hover {
            transform: scale(1.1);
        }

        .footer-contact a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            font-family: 'Roboto Slab', serif;
            transition: color 0.3s ease;
        }

        .footer-contact a:hover {
            color: #7A4F93;
        }
    </style>
</head>

<body>
    

    <!-- Content Section -->
    <div class="content-section">
        <h1>Liver Donation</h1>
        <img src="images/liver-image.jpg" alt="Liver Illustration">
        <p>
            The liver is a vital organ responsible for filtering toxins, producing bile, and regulating various metabolic processes. A healthy liver is essential for maintaining overall health and well-being.
        </p>
        <p>
            Liver donation is a life-saving act for patients suffering from liver failure or severe liver diseases. A liver transplant can provide a new lease on life for these individuals.
        </p>
        <p>
            Liver donations can be done by living or deceased donors. In living donation, a portion of the liver is transplanted, as the liver has a unique ability to regenerate. Deceased donor liver transplants involve thorough medical evaluations and matching.
        </p>
        <p>
            The liver donation process is carried out with utmost care and respect, ensuring that the donor’s generosity saves lives. Donors and their families play a crucial role in bringing hope to those in need.
        </p>
        <p>
            By registering as a liver donor, you can make a profound impact and provide hope to those awaiting life-saving transplants. Your decision to donate can inspire others to do the same.
        </p>
    </div>

    <?php include('footer.php'); ?>
</body>

</html>
