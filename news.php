<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Helpbook Foundation | Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <meta name="description" content="Welcome to the HelpBook Foundation - a platform for social, environmental, and humanitarian efforts. Join us in making a difference through impactful community-driven actions.">
    <meta name="keywords" content="HelpBook Foundation, social impact, humanitarian initiatives, community service, environmental action, health support">

    <meta property="og:title" content="HelpBook Foundation - Home">
    <meta property="og:description" content="Join HelpBook Foundation's mission for social, environmental, and humanitarian betterment. Together, we can make a difference.">
    <meta property="og:url" content="https://thehelpbook.org/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://thehelpbook.org/assets/images/tree9.jpg">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="HelpBook Foundation - Home">
    <meta name="twitter:description" content="Join HelpBook Foundation's mission for social, environmental, and humanitarian betterment. Together, we can make a difference.">
    <meta name="twitter:image" content="https://thehelpbook.org/assets/images/tree9.jpg">


    <?php
     include 'metacommon.php'
     ?> </head>

<body>

<?php

require 'header.php';

?>
<div class="margin-50"></div>

    <div class="imgTreeHead margin-20">
        <h2>The Helpbook In News</h2>
    </div>

    <div class="sectionSeven">


        <div class="updates-section">
            <div class="updates-container">
                <div class="update-card">
                    <img src="./assets/new/news1.jpg" alt="News Image 1" class="update-image">
                   
                    <p>Cleaning Drive by the Helpbook Foundation at Kaliyasot Dam.</p>
                    <a href="./posts/kaliyasaut_dam_cleaning_drive.php" class="btnMin btNews">Read More&nbsp;<i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="update-card">
                    <img src="./assets/new/news2.jpg" alt="News Image 2" class="update-image">
                    
                    <p>Educational Drive 2024 by the Helpbook Foundation.</p>
                    <a href="./posts/education_drive_news.php" class="btnMin btNews">Read More&nbsp;<i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="update-card">
                    <img src="./assets/paper3.jpg" alt="News Image 3" class="update-image">
                    
                    <p>Second Cleaning Drive by the Helpbook Foundation at Kaliyasot Dam.</p>
                    <a href="./posts/kaliyasaut_dam_cleaning_drive_two.php" class="btnMin btNews">Read More&nbsp;<i class="fa-solid fa-arrow-right"></i></a>
                </div>
        
            </div>
        </div>

    </div>


    <div class="margin-50"></div>


<div class="center">
<div class="sepratorHr"></div>
</div>

<div class="imgTreeHead">
    <h2>Subscribe To Get Latest Posts Through Email</h2>
</div>



<div class="subscribe-section">
    <div class="shape shape1"></div>
    <div class="shape shape2"></div>
    <div class="shape shape3"></div>
    <div class="shape shape4"></div>
    
    <form class="subscribe-form" action="./admin/notify.php" method="POST" onsubmit="return validateEmailNotify()">
        <input type="text" name="name" id="name" placeholder="Your Name" required>
        <input type="email" name="email" id="email" placeholder="Your Email" required>
        <button type="submit">Subscribe</button>
    </form>
</div>


<?php

include 'footer.php'

?>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>
</body>

</html>
