<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Helpbook Foundation | Food & Health</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">


    <meta name="description" content="HelpBook Foundation’s Food & Health initiatives focus on promoting healthcare access and nutrition support for underserved communities.">
    <meta name="keywords" content="HelpBook Foundation, food and health, healthcare support, nutrition, community health">

    <meta property="og:title" content="Food & Health Initiatives by HelpBook Foundation">
    <meta property="og:description" content="Improving health and nutrition access for underserved communities through dedicated initiatives.">
    <meta property="og:url" content="https://thehelpbook.org/food.php">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://thehelpbook.org/assets/health.jpg">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Food & Health Initiatives by HelpBook Foundation">
    <meta name="twitter:description" content="Improving health and nutrition access for underserved communities through dedicated initiatives.">
    <meta name="twitter:image" content="https://thehelpbook.org/assets/health.jpg">



    <?php
     include 'metacommon.php'
     ?> </head>
<body>




<style>
   
    h1 {
        font-size: 3rem;
    }
    
    /* Hero Section Styles */
    .hero {
        position: relative;
        background-image: url('./assets/health.jpg'); /* Placeholder for education background */
        background-size: cover;
        background-position: center;
        color: white;
        padding: 60px 20px;
        text-align: center;
        min-height: 700px;
        display: flex;
        justify-content: flex-start;
        flex-direction: column;
        padding-top: 200px;
        height: 100vh;
        align-items: flex-start;

            p {
                max-width: 50%;
                margin: 0 0;
                text-align: left;
            }

            h1 {
            font-size: 3rem;
            color: white;
            max-width: 50%;
            text-align: left;
        }

            @media (max-width: 900px) {
                justify-content: center;
                align-items: center;
                p {
                    max-width: 100%;
                    margin: 0 auto;
                    text-align: center;
                }

                h1 {
                    max-width: 100%;
                    text-align: center;
                }
            }

        }

    
    .hero p {
        font-size: 1.2rem;
    }
    
    .hero a {
        display: block;
        padding: 12px 20px;
        background-color: #15945f;
        color: white;
        font-weight: bold;
        border-radius: 12px;
        text-decoration: none;
        margin-top: 50px;
    }
    
    /* Section Styles */
    section {
        padding: 40px 20px; /* Increased padding for sections */
        /* margin: 10px 0; */
        border-radius: 8px;
        min-height: 150px; /* Default height for sections */
    
    
        h2 {
            color: #228e61;
            font-size: 2rem;
            text-align: center;
        }
    }
    
    .bgChange {
        background-color: #c0c0c0;
    }
    
    
    #nutrition {
        margin-top: -10px;
    }
    
    section:nth-of-type(2) {
    
        padding-top: 100px;
        background-color: #ffeeee;
        flex-direction: row-reverse;
        /* color: white; */
    
        h2 {
            color: #fb9d9d;
        }
    
        .register {
            background-color: #fb9d9d;
            color: #fff;
        }
    }
    
    
    .content {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        flex-direction: column;
        max-width: 40%;
    }
    
    section:nth-of-type(3) {
        margin-bottom: 100px;
    }
    
    
    section:nth-of-type(4) {
        margin-top: -20px;
        background-color: #f2effd;
        flex-direction: row-reverse;
        color: gray;
    
        h2 {
            color: #b4a1f7;
        }
    
        .register {
            background-color: #b4a1f7;
            color: #fff;
        }
    }
    
    section:nth-of-type(5) {
    
        h2 {
            color: #eed764;
        }
    
        .register {
            background-color: #eed764;
            color: white;
        }
    }
    
    
    .img img {
        transition: 0.3s all ease-in-out;
        width: 100%; /* Use full width of the container */
        max-width: 350px; /* Maximum width set to 350px */
        height: 200px; /* Fixed height to crop the image */
        border: 10px solid white; /* Thicker white border around the image */
        border-bottom: 20px solid #ffffff; /* Thicker bottom border for realism */
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5); /* More realistic shadow for depth */
        overflow: hidden; /* Hide overflow to crop the image */
        background-color: white; /* White background for the image */
        padding: 5px; /* Padding to create space between the image and border */
        object-fit: cover; /* Ensure image covers the area and maintains aspect ratio */
        transform: rotate(3deg); /* Tilt the image to the right */
        cursor: pointer;
    }
    
    .img:hover img {
        transform: rotate(0);
    }
    
    
    .quote-section {
        margin: 100px;
        background-color: #ffebdb; /* Light tomato background */
        padding: 40px 20px;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-direction: row;
        gap: 20px;
        position: relative;
    }
    
    .quote-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        /* background: repeating-linear-gradient(
            45deg,
            rgba(255, 99, 71, 0.5) 0,
            rgba(255, 99, 71, 0.5) 15px,
            rgba(255, 69, 0, 0.5) 15px,
            rgba(255, 69, 0, 0.5) 30px,
            rgba(255, 160, 122, 0.5) 30px,
            rgba(255, 160, 122, 0.5) 45px
        ); */
        background-color: #7396ff;
        opacity: 0.4;
        border-radius: 8px;
        z-index: 0;
    }
    
    .quote-text {
        color: #202b3c; /* Dark color for contrast */
    }
    
    .quote-content {
        display: flex; /* Enable flex for inner content */
        align-items: center; /* Center vertically */
        margin: 0 auto; /* Center the section */
        position: relative; /* Positioning context for stacking order */
        z-index: 1; /* Place above the background pattern */
        justify-content: space-around;
        width: 80%;
    }
    
    .quote-image {
        width: 300px; /* Set a width for the image */
        height: auto; /* Maintain aspect ratio */
        border-radius: 10px; /* Slightly rounded corners for the image */
        border: 5px solid white; /* White border around the image */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Soft shadow for depth */
        background-color: white; /* White background for the image */
        padding: 5px; /* Padding to create space between the image and border */
    }
    
    .quote-text {
        color: #5a4504; /* Darker yellow/brown text color */
        max-width: 600px;
    }
    
    .quote-text h2 {
        font-size: 1.8rem; /* Font size for the quote */
        margin: 0; /* Remove default margin */
        line-height: 1.3; /* Spacing between lines */
        text-align: left;
        color: #1c284d;
    }
    
    .quote-text p {
        font-size: 1.2rem; /* Font size for the author's name */
        margin-top: 10px; /* Space between quote and author's name */
        text-align: right;
        margin-right: 50px;
    }
    
    
    
    
    
    /* Header and Paragraph Styles */
    h2, h3 {
        padding: 20px 0; /* Increased padding for headers */
        margin: 0; /* Reset margin for better spacing */
    }
    
    p {
        padding: 15px 0; /* Increased padding for paragraphs */
    }
    
    .openbtn {
        display: flex;
        justify-content: space-around;
        align-items: center;
    }
    
    
    .img img {
        max-width: 500px;
        height: auto;
    }
    
    .areu {
        h2 {
            font-size: 3rem;
            text-align: center;
        }
    
        .seprate {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px 0;
            margin-left: 100px;
            margin-bottom: 30px;
        }
    }
    
    /* Button Styles */
    .register, .support-btn {
        transition: 0.2s ease-in-out all;
        display: inline-block;
        margin-top: 10px;
        padding: 10px 15px;
        background-color: rgb(39, 160, 110);
        color: white;
        font-weight: bold;
        border-radius: 5px;
        text-decoration: none;
        box-shadow: 8px 8px 15px rgba(0, 0, 0, 0.4);
        cursor: pointer;
    }
    
    .register:hover, .support-btn:hover {
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.15);
    }
    
    
    .register.mainBtn {
        background-color: #42d6ff;
    }
    
    
    .center {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .student {
        background-color: none;
    
    }
    
    
    .closebtn {
        position: fixed;
        top: 20px;
        color: grey;
        right: 30px;
        cursor: pointer;
        font-size: 1.5rem;
    }
    
    
    .closebtn:hover {
        color: #ff6767;
    }
    
    
    .seprate {
        height: 5px;
        width: 50px;
        background-color: #228e61;
        margin: 30px 0;
    }
    
    
    
    .bgFixed {
        position: fixed;
        top: 0;
        left: 0;
        background-color: #5a5a5a88;
        width: 100%;
        height: 100vh;
        display: none;
        justify-content: center;
        align-items: center;
    }
    
    
    /* Updated Card Container Styles */
    .card-container {
        display: flex; /* Enable flexbox */
        gap: 20px; /* Space between cards */
        flex-wrap: wrap;
        width: 100%;
        background-color: none;
    }
    
    /* Card Styles */
    .student-card {
        border: 1px solid #ddd;
        padding: 15px;
        width: 250px; /* Two cards per row, accounting for gap */
        border-radius: 5px;
        background-color: #fff;
        text-align: center;
        background-color: none;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s;
    }
    
    .student-card:hover {
        transform: translateY(-5px);
    }
    
    
    .fixedSectionButton {
        background-color: rgba(0, 0, 0, 0.164);
    }
    
    .quote-content {
        display: flex; /* Enable flex for inner content */
        align-items: center; /* Center vertically */
        margin: 0 auto; /* Center the section */
        position: relative; /* Positioning context for stacking order */
        z-index: 1; /* Place above the background pattern */
        justify-content: space-around;
        width: 80%;
    }
    
    .quote-image {
        width: 300px; /* Set a width for the image */
        height: auto; /* Maintain aspect ratio */
        border-radius: 10px; /* Slightly rounded corners for the image */
        border: 5px solid white; /* White border around the image */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Soft shadow for depth */
        background-color: white; /* White background for the image */
        padding: 5px; /* Padding to create space between the image and border */
    }
    
    .quote-text {
        color: #2c3e50; /* Dark green/blue text color */
        max-width: 600px;
    }
    
    .quote-text p {
        font-size: 1.2rem; /* Font size for the author's name */
        margin-top: 10px; /* Space between quote and author's name */
    }
    
    
    
    
    
    @media (max-width: 970px) {
        
        .openbtn {
            flex-direction: column;
    
            .img {
                margin: 20px 0;
            }
        }
    
        section:nth-of-type(2), section:nth-of-type(4) {
            flex-direction: column;
        }
    
        .content {
            max-width: 90%;
        }
    
        .quote-section {
            flex-direction: column;
            width: 100%;
            justify-content: center;
            align-items: center;
            padding: 10px;
            margin: 0;
            margin-top: 30px;
        }
    
        .quote-section::before {
            /* display: none; */
        }
    
        .quote-content {
            margin-top: 40px;
            flex-direction: column;
        }
    
    
    
    }
    
    
        </style>


    <?php
    

    include 'header.php';

    
    ?>



    <!-- Hero Section for Food Page -->
    <section class="hero food">
        <h1>Nourishing Communities, Ending Hunger</h1>
        <div class="sepBegin"></div>
        <p>Join us in our mission to provide nutritious meals and food resources to those in need.</p>
        <a href="./donateFood.php" class="register mainBtn"><i class="fa-solid fa-check"></i> Donate Food</a>
    </section>

    <!-- Meal Distribution Section -->
    <section class="community openbtn" id="community">
        <div class="img">
            <img src="./assets/new/food1.jpg" alt="Meal Distribution">
        </div>
        <div class="content">
            <h2>Meal Distribution</h2>
            <p>"Our Meal Distribution initiative provides essential nourishment to the homeless, underserved families, and communities in need. The Helpbook Foundation works to ensure that no one goes hungry by delivering healthy meals. Join us in making a tangible difference for those in need."</p>
            
        </div>
    </section>

    <!-- Wavy SVG Divider -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="#ffeeee">
        <path d="M1000 100C500 100 500 64 0 64V0h1000v100Z" opacity=".5"></path>
        <path d="M1000 100C500 100 500 34 0 34V0h1000v100Z" opacity=".5"></path>
        <path d="M1000 100C500 100 500 4 0 4V0h1000v100Z"></path>
    </svg>

    <!-- Food Drives Section -->
    <section class="food-drives openbtn" id="fooddrives">
        <div class="img">
            <img src="./assets/new/food2.jpg" alt="Food Drives">
        </div>
        <div class="content">
            <h2>Food Drives</h2>
            <p>"Through community food drives, we collect and distribute non-perishable items to combat food insecurity. By joining The Helpbook Foundation’s food drives, you help bring comfort and sustenance to struggling communities. Be part of the change and support our food drives today."</p>
           
        </div>
    </section>

    <!-- Smooth SVG Divider -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 180">
        <path fill="#f2effd" fill-opacity="1" d="M0,32L48,48C96,64,192,96,288,96C384,96,480,64,576,58.7C672,53,768,75,864,90.7C960,107,1056,117,1152,106.7C1248,96,1344,64,1392,48L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>

    <!-- Nutrition Education Section -->
    <section class="nutrition-education openbtn" id="nutrition">
        <div class="img">
            <img src="./assets/new/about1.jpg" alt="Nutrition Education">
        </div>
        <div class="content">
            <h2>Nutrition Education</h2>
            <p>"Our Nutrition Education program empowers communities with knowledge about balanced diets and healthy food choices. The Helpbook Foundation aims to inspire healthier futures by addressing nutritional needs. Join us to spread awareness and promote a culture of wellness."</p>
           
        </div>
    </section>

    <!-- Final SVG Divider -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="#f2effd">
        <path d="M1000 100C500 100 500 64 0 64V0h1000v100Z" opacity=".5"></path>
        <path d="M1000 100C500 100 500 34 0 34V0h1000v100Z" opacity=".5"></path>
        <path d="M1000 100C500 100 500 4 0 4V0h1000v100Z"></path>
    </svg>

    <!-- Featured Quote Section -->
    <div class="quote-section">
        <div class="quote-content">
            <img src="./assets/sadhguru1.jpg" alt="Food Initiative Quote" class="quote-image">
            <div class="quote-text">
                <h2>“Food is not just about nutrition. It is a way of life. Your body is a complex system, and what you put into it matters. You are what you eat, but more importantly, you are how you eat.”</h2>
                <p>- Sadhguru Jaggi Vasudev</p>
            </div>
        </div>
    </div>


<?php

include 'footer.php';

?>

    <script src="./script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>

</body>
</html>
