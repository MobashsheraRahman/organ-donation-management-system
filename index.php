

<?php
$title = "Organ Donation - Save Lives"; // Dynamic title
include 'header.php'; // Include header.php
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
            background-color: #f8f9fa;
            color: #4D4D4D;
            padding-top: 80px; /* Add space for the fixed header */
        }
        /* Section Title */
        .section-title {
            background-color: #F9F0FF; /* Soft lavender background */
            text-align: center;
            padding: 30px 10px;
            margin: 0;
            border-bottom: 3px solid #D1C4E9; /* Light purple border */
        }

        .section-title h2 {
            font-size: 32px;
            font-family: 'Poppins', sans-serif; /* Lively font for title */
            color: #7A4F93; /* Vibrant purple for heading */
            margin: 0;
            font-weight: 600;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2); /* Soft shadow for depth */
        }

        .section-title p {
            font-size: 18px;
            font-family: 'Roboto Slab', serif; /* Elegant font for description */
            color: #5A4E76; /* Muted purple for description text */
            margin: 10px 0 0;
            line-height: 1.6;
        }

     
        /* Hero Section */
        .hero-section {
            position: relative;
            background: linear-gradient(90deg, #FFFAE6, #FFF4D6); /* Warm gradient */
            padding: 30px;
            border-radius: 12px;
            margin: 20px;
            display: flex;
            align-items: center;
            overflow: hidden;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .hero-section img {
            max-width: 55%;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
        }

        .hero-section .text-overlay {
            position: absolute;
            top: 35%;
            left: 5%;
            color: #7A4F93; /* Purple for text */
            background: rgba(255, 255, 255, 0.85); /* Semi-transparent white */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1.5s ease;
        }

        .hero-section .text-overlay h1 {
            font-size: 32px;
            font-family: 'Poppins', sans-serif; /* Stylish font for headings */
            font-weight: bold;
            margin-bottom: 10px;
            color: #7A4F93; /* Purple for heading */
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2); /* Softer shadow for better visibility */
        }

        .hero-section .text-overlay p {
            font-size: 16px;
            color: #4D4D4D; /* Neutral gray for description */
        }

        .sign-up-section {
            position: absolute;
            bottom: 10%;
            right: 5%;
            background: linear-gradient(135deg, #E3E0F7, #D6CDEA); /* Soft purple gradient */
            padding: 20px;
            border-radius: 12px;
            max-width: 300px;
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1);
            text-align: left;
            animation: slideIn 1.5s ease;
        }

        .sign-up-section h2 {
            font-size: 20px;
            color: #7A4F93; /* Vibrant purple for heading */
            margin-bottom: 10px;
        }

        .sign-up-section p {
            font-size: 14px;
            color: #5A4E76; /* Muted purple for text */
            margin-bottom: 15px;
            line-height: 1.5;
        }

        .sign-up-btn {
            background: linear-gradient(90deg, #7A4F93, #5A357A); /* Purple gradient button */
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        .sign-up-btn:hover {
            background: linear-gradient(90deg, #5A357A, #3D235B); /* Darker purple gradient */
            transform: translateY(-3px);
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }


        /* Overview Section */
        .overview-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: linear-gradient(90deg, #FFF9E6, #FFEEDD); /* Soft peach gradient */
            padding: 40px 20px;
            margin: 20px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            gap: 20px;
        }

        .overview-content {
            flex: 1;
        }

        .overview-content h2 {
            font-size: 32px;
            font-family: 'Poppins', sans-serif;
            color: #7A4F93; /* Vibrant purple */
            margin-bottom: 20px;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
        }

        .overview-content p {
            font-size: 18px;
            font-family: 'Roboto Slab', serif;
            color: #5A4E76; /* Muted purple for text */
            line-height: 1.8;
            margin: 10px 0;
        }

        .overview-image {
            flex: 1;
            text-align: center;
        }

        .overview-image img {
            max-width: 90%;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
        }

        /* Why Organ Donation Matters Section */
.overview-section {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: linear-gradient(90deg, #FFF9E6, #FFEEDD); /* Soft peach gradient */
    padding: 40px 20px;
    margin: 20px;
    border-radius: 12px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    gap: 20px;
}

.overview-content {
    flex: 1;
    text-align: left;
}

.overview-content h2 {
    font-size: 32px;
    font-family: 'Poppins', sans-serif;
    color: #7A4F93; /* Vibrant purple */
    margin-bottom: 20px;
    text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
}

.overview-content p {
    font-size: 18px;
    font-family: 'Roboto Slab', serif;
    color: #5A4E76; /* Muted purple for text */
    line-height: 1.8;
    margin: 10px 0;
}

.overview-image {
    flex: 1;
    text-align: center;
}

.overview-image img {
    max-width: 90%;
    height: auto;
    border-radius: 12px;
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
}

/* Organ Facts Section */
.organ-facts-section {
    padding: 40px 20px;
    background-color: #FFF9E6; /* Light peach background (matches other sections) */
    text-align: center;
    border-radius: 12px;
    margin: 20px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
}

.organ-facts-section h2 {
    font-size: 32px;
    font-family: 'Poppins', sans-serif; /* Matches other section titles */
    color: #7A4F93; /* Vibrant purple */
    margin-bottom: 20px;
    text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2); /* Subtle text shadow */
}

.organ-facts-section p {
    font-size: 18px;
    font-family: 'Roboto Slab', serif; /* Matches other descriptions */
    color: #5A4E76; /* Muted purple */
    margin-bottom: 30px;
}

/* Organ Facts Grid */
.organ-facts {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px; /* Consistent spacing */
}

.organ-fact {
    text-align: center;
    max-width: 150px;
}

.organ-fact a {
    text-decoration: none;
    color: #7A4F93; /* Purple for link titles */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.organ-fact a:hover {
    transform: translateY(-5px); /* Subtle lift on hover */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Slight shadow effect */
}

.organ-icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background-color: #FFF4D6; /* Light peach icon background */
    padding: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Consistent icon shadow */
}

.organ-fact h3 {
    font-size: 16px;
    margin-top: 10px;
    font-family: 'Roboto Slab', serif; /* Matches section text font */
    color: #5A4E76; /* Muted purple for consistency */
}


/* Share Your Story Section */
.share-story-section {
    background: linear-gradient(90deg, #FFF9E6, #FFEEDD); /* Soft gradient */
    padding: 40px 20px;
    margin: 20px auto;
    border-radius: 12px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    font-family: 'Poppins', sans-serif;
    text-align: center; /* Center align all content */
    max-width: 800px; /* Restrict the width for readability */
}

.share-story-section h2 {
    font-size: 28px;
    color: #7A4F93; /* Purple for heading */
    margin-bottom: 10px;
}

.share-story-section p {
    font-size: 16px;
    color: #5A4E76; /* Subtle text color */
    margin-bottom: 20px;
}

/* Form Styling */
.story-form {
    text-align: left; /* Align form content to the left */
    margin: 0 auto 30px; /* Center form and add bottom spacing */
    max-width: 600px; /* Set form width */
}

.story-form label {
    display: block;
    margin: 10px 0 5px;
    font-weight: bold;
    color: #5A4E76;
}

.story-form input, .story-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #D1C4E9;
    border-radius: 8px;
    font-size: 16px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.story-form input:focus, .story-form textarea:focus {
    outline: none;
    border-color: #7A4F93;
    box-shadow: 0 0 5px rgba(122, 79, 147, 0.3);
}

.submit-btn {
    background: linear-gradient(90deg, #7A4F93, #5A357A);
    color: white;
    font-size: 16px;
    font-weight: bold;
    padding: 12px 24px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: block;
    margin: 0 auto;
}

.submit-btn:hover {
    background: linear-gradient(90deg, #5A357A, #3D235B);
    transform: translateY(-3px);
}

/* Social Share Section */
.social-share {
    margin: 20px auto;
    text-align: center;
}

.social-share h3 {
    font-size: 22px;
    color: #7A4F93;
    margin-bottom: 10px;
}

.social-icons {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.social-icons a img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.social-icons a:hover img {
    transform: scale(1.1) translateY(-3px);
}

.view-stories-link {
    margin-top: 20px;
    text-align: center;
}

.view-stories-link p {
    font-size: 16px;
    color: #5A4E76;
}

.view-stories-link a {
    color: #7A4F93;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease, text-decoration 0.3s ease;
}

.view-stories-link a:hover {
    color: #5A357A;
    text-decoration: underline;
}


    </style>
</head>

<body>


  

    <!-- Section Title -->
    <div class="section-title">
        <h2>A Small Step for You, A New Life for Someone Else</h2>
        <p>Be part of the change and help save lives through organ donation.</p>
    </div>

    <!-- Hero Section -->
    <div class="hero-section">
        <!-- Image -->
        <img src="images/donor-illustration.jpg" alt="Organ Donation Illustration">

        <!-- Overlay Text -->
        <div class="text-overlay">
            <h1>Save Lives, Donate Organs</h1>
            <p>A single donation can change multiple lives.</p>
        </div>

        <!-- Sign-Up Section -->
        <div class="sign-up-section">
            <h2>More Donors, More Hope</h2>
            <p>Every registered organ donor offers hope to people who need transplants – and to the families who love them.</p>
            <a href="registration.php" class="sign-up-btn">Sign Up</a>
        </div>
    </div>

        <!-- Overview Section -->
        <div class="overview-section">
        <!-- Text Content -->
        <div class="overview-content">
            <h2>Overview</h2>
            <p>
                We are dedicated to bridging the gap between organ donors and recipients by raising awareness and simplifying the donation process. Our platform educates communities, supports donor registration, and guides individuals and families through the journey.
            </p>
            <p>
                By collaborating with medical professionals, policymakers, and donors, we aim to save lives and ensure no one loses hope while waiting for a transplant. Together, we can create a healthier, more compassionate future.
            </p>
        </div>

        <!-- Image Content -->
        <div class="overview-image">
            <img src="images/human-organs-flat.jpg" alt="Organ Donation Overview" style="max-width: 70%; height: auto;">
        </div>
    </div>

    <!-- Why Organ Donation Matters Section -->
<div class="overview-section">
    <!-- Image Content -->
    <div class="overview-image">
        <img src="images/whydonor.jpg" alt="Why Organ Donation Matters" style="max-width: 70%; height: auto;">
    </div>

    <!-- Text Content -->
    <div class="overview-content">
        <h2>Why Organ Donation Matters</h2>
        <p>
            Organ donation is a powerful act of kindness that gives people a second chance at life. By donating organs, you can save multiple lives and bring hope to families in need. It bridges the gap between critical patients and life-saving transplants, creating a legacy of compassion and health for future generations. Every donation matters—it’s a chance to make a lasting impact.
        </p>
    </div>
</div>

<!-- Organ Facts and Donation Information Section -->
<div class="organ-facts-section">
    <h2>Organ Facts and Donation Information</h2>
    <p>Click on the organ icons to learn more about the donation process for each organ.</p>
    <div class="organ-facts">
        <!-- Kidney -->
        <div class="organ-fact">
            <a href="kidney_info.php">
                <img src="images/kidney-icon.png" alt="Kidney" class="organ-icon">
                <h3>Kidney</h3>
            </a>
        </div>
        <!-- Pancreas -->
        <div class="organ-fact">
            <a href="pancreas_info.php">
                <img src="images/pancreas-icon.png" alt="Pancreas" class="organ-icon">
                <h3>Pancreas</h3>
            </a>
        </div>
        <!-- Heart -->
        <div class="organ-fact">
            <a href="heart_info.php">
                <img src="images/heart-icon.png" alt="Heart" class="organ-icon">
                <h3>Heart</h3>
            </a>
        </div>
        <!-- Lung -->
        <div class="organ-fact">
            <a href="lung_info.php">
                <img src="images/lung-icon.png" alt="Lung" class="organ-icon">
                <h3>Lung</h3>
            </a>
        </div>
        <!-- Liver -->
        <div class="organ-fact">
            <a href="liver_info.php">
                <img src="images/liver-icon.png" alt="Liver" class="organ-icon">
                <h3>Liver</h3>
            </a>
        </div>
        <!-- Intestine -->
        <div class="organ-fact">
            <a href="intestine_info.php">
                <img src="images/intestine-icon.png" alt="Intestine" class="organ-icon">
                <h3>Intestine</h3>
            </a>
        </div>
    </div>
</div>
<!-- Share Your Story Section -->
<section id="share-your-story" class="share-story-section">
    <h2> Share Your Story, Inspire Change</h2>
    <p>Every story matters. Your words could give someone hope and inspire them to become a life-saver through organ donation.</p>
    
    <!-- Form Section -->
    <form action="save_story.php" method="POST" class="story-form">
        <label for="heading">Title:</label>
        <input type="text" id="heading" name="heading" placeholder="Give your story a title..." required>

        <label for="name">Your Name (Optional):</label>
        <input type="text" id="name" name="name" placeholder="Enter your name">

        <label for="story">Your Story:</label>
        <textarea id="story" name="story" rows="5" placeholder="Write your story here..." required></textarea>

        <button type="submit" class="submit-btn">Share Your Story</button>
    </form>

    <!-- Social Share Section -->
    <div class="social-share">
        <h3> Spread the Word</h3>
        <p>Let your story inspire others! Share this page with friends and family:</p>
        <div class="social-icons">
            <a href="https://www.facebook.com/sharer/sharer.php?u=https://yourwebsite.com" target="_blank">
                <img src="images/facebook-icon.png" alt="Facebook">
            </a>
            <a href="https://twitter.com/intent/tweet?url=https://yourwebsite.com&text=Share%20your%20story!" target="_blank">
                <img src="images/twitter-icon.png" alt="Twitter">
            </a>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://yourwebsite.com" target="_blank">
                <img src="images/linkedin-icon.png" alt="LinkedIn">
            </a>
        </div>
    </div>
</section>

<!-- View Saved Stories -->
<div class="view-stories-link">
    <p> Want to read inspiring stories? <a href="view_stories.php">Click here to view all stories</a>.</p>
</div>

</div>


<script>
  
// Share Your Story - JavaScript
document.getElementById('share-story-form').addEventListener('submit', function(event) {
    event.preventDefault();

    // Get form inputs
    const name = document.getElementById('name').value.trim() || "A Generous Donor";
    const story = document.getElementById('story').value.trim();

    // Generate the share message
    const shareMessage = `"${story}" - ${name}\nJoin the movement: #DonateLife #SaveLives #OrganDonation`;

    // Show the social media share section
    document.getElementById('social-media-share').classList.remove('hidden');

    // Add click events for social sharing
    document.getElementById('facebook-share').onclick = () => {
        const facebookUrl = `https://www.facebook.com/sharer/sharer.php?quote=${encodeURIComponent(shareMessage)}&u=https://www.yourwebsite.com`;
        window.open(facebookUrl, '_blank');
    };

    document.getElementById('twitter-share').onclick = () => {
        const twitterUrl = `https://twitter.com/intent/tweet?text=${encodeURIComponent(shareMessage)}`;
        window.open(twitterUrl, '_blank');
    };

    document.getElementById('instagram-share').onclick = () => {
        alert("Instagram sharing requires a manual post. Copy the hashtags: #DonateLife #SaveLives #OrganDonation");
    };

    // Reset form fields
    document.getElementById('share-story-form').reset();
});


</script>
<?php 
include 'footer.php'; // Include footer.php at the bottom
?>

</body>

</html>
