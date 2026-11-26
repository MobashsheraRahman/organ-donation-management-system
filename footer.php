<footer class="footer-section">
    <style>
        /* Footer Section */
        .footer-section {
            background: linear-gradient(90deg, #FFE3C1, #FFDAB5); /* Matching gradient */
            color: #333; /* Neutral gray for text */
            padding: 40px 20px;
            text-align: center;
            margin-top: 40px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap; /* Makes it responsive */
            gap: 20px;
        }

        .footer-address, .footer-connect, .footer-links {
            flex: 1;
            max-width: 300px;
            text-align: left;
        }

        .footer-address h3, 
        .footer-connect h3, 
        .footer-links h3 {
            font-size: 20px;
            color: #7A4F93; /* Vibrant purple headings */
            margin-bottom: 10px;
        }

        .footer-address p, 
        .footer-links ul li {
            font-size: 16px;
            color: #4D4D4D; /* Neutral gray for content */
            margin: 5px 0;
            line-height: 1.6;
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
        }

        .footer-links ul li a {
            text-decoration: none;
            color: #7A4F93; /* Purple for links */
            transition: color 0.3s ease;
        }

        .footer-links ul li a:hover {
            color: #5A357A; /* Darker purple on hover */
        }

       /* Social Media Icons */
/* Social Media Icons */
.social-icons {
    display: flex;
    justify-content: center;
    gap: 15px;
}

.social-icons a img {
    width: 32px;
    height: 32px;
    transition: transform 0.3s ease;
}

.social-icons a img:hover {
    transform: scale(1.1); /* Zoom effect on hover */
}
.footer-connect {
    flex: 1;
    text-align: center; /* Centers the title */
}

.footer-connect h3 {
    font-size: 20px;
    color: #7A4F93;
    margin-bottom: 10px;
}

        .footer-bottom {
            margin-top: 20px;
            border-top: 1px solid #FFDAB5;
            padding-top: 10px;
            font-size: 14px;
            color: #4D4D4D;
            text-align: center;
        }
    </style>

    <div class="footer-content">
        <!-- Address Section -->
        <div class="footer-address">
            <h3>Contact Us</h3>
            <p>123 Organ Donation, Panthopath, Dhaka, Bangladesh, 1260</p>
            <p><a href="mailto:contact@organdonation.org">Email: contact@organdonation.org</a></p>
            <p><a href="tel:+1234567890">Phone: +1 234 567 890</a></p>
        </div>

         <!-- Social Media Section -->
<div class="footer-connect">
    <h3>Connect With Us</h3>
    <div class="social-icons">
        <!-- Facebook Signup/Login Page -->
        <a href="https://www.facebook.com/r.php" target="_blank" aria-label="Facebook">
            <img src="images/facebook-icon.png" alt="Facebook">
        </a>
        <!-- Instagram Signup/Login Page -->
        <a href="https://www.instagram.com/accounts/emailsignup/" target="_blank" aria-label="Instagram">
            <img src="images/instagram-icon.png" alt="Instagram">
        </a>
        <!-- YouTube Signup/Login Page -->
        <a href="https://accounts.google.com/SignUp" target="_blank" aria-label="YouTube">
            <img src="images/youtube-icon.png" alt="YouTube">
        </a>
    </div>
</div>
        <!-- Quick Links -->
        <div class="footer-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="our_vision.php">Our Vision</a></li>
                <li><a href="FAQ.php">FAQs</a></li>
                
            </ul>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <p>&copy; <?php echo date("Y"); ?> Organ Donation. All rights reserved.</p>
    </div>
</footer>
