<?php
$title = "Our Vision - Organ Donation"; // Dynamic title for the page
include 'header.php'; // Include the header
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto+Slab:wght@400&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fb;
            color: #333;
            padding-top: 80px; /* Add space for the fixed header */
        }

        /* Section Title */
        .section-title {
            background-color: #f9f0ff; /* Soft lavender background */
            text-align: center;
            padding: 50px 20px;
            margin: 0;
            border-bottom: 3px solid #D1C4E9; /* Light purple border */
        }

        .section-title h2 {
            font-size: 36px;
            font-family: 'Poppins', sans-serif;
            color: #7A4F93; /* Vibrant purple for heading */
            margin: 0;
            font-weight: 600;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2); /* Soft shadow for depth */
            animation: fadeIn 2s ease-out;
        }

        .section-title p {
            font-size: 18px;
            font-family: 'Roboto Slab', serif;
            color: #5A4E76;
            margin: 10px 0 0;
            line-height: 1.6;
        }

        /* Vision Section */
        .vision-section {
            background: linear-gradient(45deg, #FFFAE6, #FFF4D6); /* Warm gradient */
            padding: 60px 20px;
            margin: 20px auto;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 1000px;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .vision-section:hover {
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
            transform: scale(1.02);
        }

        .vision-section h2 {
            font-size: 36px;
            color: #7A4F93;
            margin-bottom: 20px;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
            animation: fadeInUp 1.5s ease-out;
        }

        .vision-section p {
            font-size: 18px;
            color: #5A4E76;
            line-height: 1.8;
            max-width: 800px;
            margin: 0 auto;
            opacity: 0;
            animation: fadeInUp 2s ease-out 0.5s forwards;
        }

        .vision-image {
            margin-bottom: 30px;
            text-align: center;
        }

        .vision-image img {
            max-width: 80%;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
        }

        .vision-image img:hover {
            transform: scale(1.05);
        }

        /* Call to Action Section */
        .cta-section {
            background: #F9F0FF; /* Light lavender background */
            padding: 50px 20px;
            margin-top: 40px;
            text-align: center;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        .cta-section h3 {
            font-size: 28px;
            color: #7A4F93;
            margin-bottom: 20px;
            font-weight: 600;
            animation: fadeInUp 1s ease-out;
        }

        .cta-section p {
            font-size: 18px;
            color: #5A4E76;
            margin-bottom: 30px;
        }

        .cta-btn {
            background: linear-gradient(90deg, #7A4F93, #5A357A);
            color: white;
            padding: 14px 30px;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            transition: background 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .cta-btn:hover {
            background: linear-gradient(90deg, #5A357A, #3D235B);
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        /* Animation Keyframes */
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

    </style>
</head>
<body>

    <!-- Section Title -->
    <div class="section-title">
        <h2>Our Vision for a Healthier Tomorrow</h2>
        <p>Our vision is to create a future where organ donation is a universal act of kindness that saves countless lives.</p>
    </div>

    <!-- Vision Section -->
    <div class="vision-section">
        <div class="vision-image">
            <img src="images/vision-organ-donation.png" alt="Vision of Organ Donation">
        </div>
        <h2>Transforming Lives Through Organ Donation</h2>
        <p>
            Organ transplantation offers a life-saving opportunity for patients suffering from end-stage organ failure. In Bangladesh, the need for organ transplants is critical, with thousands of patients awaiting life-saving procedures. Unfortunately, the supply of donated organs falls far short of the demand. For example, while approximately 5,000 individuals with end-stage renal disease require kidney transplants annually, only around 130 patients receive them, often relying on living donations from relatives.
        </p>
        <p>
            The organ donation system in Bangladesh faces several challenges, including a limited supply of organs, insufficient public awareness, and cultural misconceptions about donation. Ethical concerns about living donations and the absence of a well-established deceased donor program further hinder the country's ability to meet the growing demand. Additionally, an unclear legal framework and lack of transparent systems have slowed the adoption of organ donation.
        </p>
        <p>
            Our vision is to transform the organ donation landscape in Bangladesh by raising awareness, educating the public, and creating a more efficient, accessible, and transparent system. Through digitization and the development of clear, streamlined processes, we aim to improve the identification of suitable matches, minimize organ wastage, and reduce transplant wait times. By fostering a deeper understanding of the importance of organ donation, we hope to inspire more individuals to consider donation, ultimately saving more lives.
        </p>
        <p>
            We believe that with stronger public education, transparent donation systems, and a clearer legal framework, Bangladesh can bridge the gap between supply and demand, ensuring timely organ transplants for all who need them. Our initiative seeks to make a lasting impact on the healthcare system, providing hope and a brighter future for those in need of life-saving transplants.
        </p>
    </div>

    <!-- Call to Action Section -->
    <div class="cta-section">
        <h3>Join Us in Saving Lives</h3>
        <p>
            Every donation counts, and every donor gives hope. Together, we can change lives. Become a donor today and be part of this life-changing movement.
        </p>
        <a href="registration.php" class="cta-btn">Sign Up to Become an Organ Donor</a>
    </div>

    <?php 
    include 'footer.php'; // Include the footer
    ?>

</body>
</html>
