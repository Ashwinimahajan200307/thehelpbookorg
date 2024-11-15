<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Helpbook Foundation | About Us</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Meta Description and Keywords -->
    <meta name="description" content="Learn more about HelpBook Foundation's mission, values, and our commitment to driving meaningful change in social, environmental, and humanitarian fields.">
    <meta name="keywords" content="HelpBook Foundation, about us, mission, vision, community impact, humanitarian values">

    <!-- Open Graph Tags -->
    <meta property="og:title" content="About HelpBook Foundation">
    <meta property="og:description" content="Discover the values and mission of HelpBook Foundation in social and humanitarian initiatives.">
    <meta property="og:url" content="https://thehelpbook.org/about.php">`
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://thehelpbook.org/assets/new/about3.jpg">

    <!-- Twitter Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="About HelpBook Foundation">
    <meta name="twitter:description" content="Discover the values and mission of HelpBook Foundation in social and humanitarian initiatives.">
    <meta name="twitter:image" content="https://thehelpbook.org/assets/new/about3.jpg">


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
            backdrop-filter: blur(5px);
            position: relative;
            background-image: url('./assets/new/about3.jpg'); /* Placeholder for education background */
            background-size: cover;
            background-position: center;
            color: white;
            padding: 60px 20px;
            text-align: left;
            min-height: 700px; /* Keeps this height as is */
            display: flex;
            align-items: flex-start;
            justify-content: flex-start;
            flex-direction: column;
            padding-top: 200px;
            height: 100vh;

            p {
                max-width: 50%;
                margin: 0 0;
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
        
        
        .ourMission {
            flex-direction: row-reverse;
            margin-top: 50px;
            display: flex;
            justify-content: space-around;
            align-items: center;
        
            h2 {
                text-align: left;
                font-weight: lighter;
            }
        
            ul {
                list-style-type: none;
            }
        }
        
        /* Section Styles */
        section {
            padding: 40px 20px; /* Increased padding for sections */
            /* margin: 10px 0; */
            background-color: #f9f9f9;
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
        
        section:nth-of-type(2) {
        
            padding-top: 100px;
            background-color: #ffeeee;
            flex-direction: row-reverse;
        
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
            max-width: 50%;
        
            p {
                font-size: 16px;
                /* text-align: center; */
            }
        }
        /* 
        .content.right {
            align-items: flex-end;
        
            p {
                text-align: right;
            }
        } */
        
        section:nth-of-type(3) {
            background-color: #fff;
        }
        
        
        section:nth-of-type(4) {
            background-color: #f2effd;
            flex-direction: row-reverse;
            color: gray;
            padding-top: 0;
            margin-top: -10px;
        
            h2 {
                color: #b4a1f7;
            }
        
            .register {
                background-color: #b4a1f7;
                color: rgb(255, 255, 168);
            }
        }
        
        
        .sevenPartTwo {
            margin-top: -10px;
            padding-top: 100px;
            background-color: #eee;
        
            .right h3 {
                font-size: 2rem;
                text-align: left;
                color: #15945f;
                font-weight: lighter;
            }
        }
        
        section:nth-of-type(5) {
            background-color: #fff;
            
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
        
        .awareness {
            margin-top: 100px;
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
        
        
        @media (max-width: 970px) {
            section:nth-of-type(4), section:nth-of-type(2) {
                flex-direction: column;
             }
        
             .openbtn {
                flex-direction: column;
             }
        
             .openbtn .img {
                margin: 50px 0;
             }
        
        
             .sevenPartTwo {
                padding: 0 20px;
             }
        
             .sevenPartTwo .right h3 {
                text-align: center;
             }
        
             .content {
                max-width: 90%;
             }
        
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
        
        
                  </style>
      
      
    <?php
     include 'header.php'
     ?>


    <section class="hero env">
        <h1>Empowering Change, One Step at a Time</h1>
        <div class="sepBegin"></div>
        <p>At The Helpbook Foundation, we are dedicated to create a lasting positive impact on our environment and communities. Through collaborative efforts, we drive initiatives that promote sustainability, community health, and social responsibility. Our mission is to inspire and empower individuals to take meaningful actions that benefit society as a whole.</p>


      </section>
    
      
          <!-- Community Initiative Section -->
          <section class="community openbtn" id="community">
              <div class="img">
                  <img src="./assets/new/cleaning2.jpg" alt="Community Clean-up">
              </div>
              <div class="content">
                <h2>What we do?</h2>
                <p>We work to protect the environment by organizing clean-up drives and planting trees. Our aim is to reduce pollution and make the world greener for future generations. We encourage everyone to join us in taking care of our planet.</p>
                 
              </div>
          </section>
      
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="#ffeeee">
              <path d="M1000 100C500 100 500 64 0 64V0h1000v100Z" opacity=".5"></path>
              <path d="M1000 100C500 100 500 34 0 34V0h1000v100Z" opacity=".5"></path>
              <path d="M1000 100C500 100 500 4 0 4V0h1000v100Z"></path>
          </svg>
      


          <!-- Wildlife Conservation Section -->
          <section class="wildlife openbtn" id="wildlife">
              <div class="img">
                  <img src="./assets/new/about2.jpg" alt="Wildlife Conservation">
              </div>
              <div class="content right">
                <h2>Guiding Principles</h2>
                <p>We believe that small actions, like picking up trash and planting trees, can create big changes. By working together and being mindful of the environment, we can make a lasting positive impact on the Earth.</p>
              </div>
          </section>
      

   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 180"><path fill="#f2effd" fill-opacity="1" d="M0,32L48,48C96,64,192,96,288,96C384,96,480,64,576,58.7C672,53,768,75,864,90.7C960,107,1056,117,1152,106.7C1248,96,1344,64,1392,48L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>



          <!-- Environmental Awareness Section -->
          <section class="awareness openbtn" id="awareness">
              <div class="img">
                  <img src="./assets/env.jpg" alt="Environmental Awareness">
              </div>
              <div class="content">
                <h2>Cleaning Drives Across Cities</h2>
                <p>The Helpbook Foundation organizes city-wide cleaning drives to combat pollution, beautify communities and foster environmental responsibility. Join us in making our cities cleaner, greener and healthier for future generations.</p>
              
              </div>
          </section>
      
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="#f2effd">
            <path d="M1000 100C500 100 500 64 0 64V0h1000v100Z" opacity=".5"></path>
            <path d="M1000 100C500 100 500 34 0 34V0h1000v100Z" opacity=".5"></path>
            <path d="M1000 100C500 100 500 4 0 4V0h1000v100Z"></path>
        </svg>
          <!-- Clean Energy Section -->
          <section class="clean-energy openbtn">
              <div class="img">
                  <img src="./assets/new/cleaning3.jpg" alt="Clean Energy Initiatives">
              </div>
              <div class="content right">
                <h2>Planting Thousands of Trees</h2>
                <p>The Helpbook Foundation is committed to planting thousands of trees, restoring natural habitats and fighting climate change. Together, we can create a greener future and enhance our planet’s health.</p>
              </div>
          </section>



    <div class="margin-50"></div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120"><path fill="#eee" fill-opacity="1" d="M0,32L80,42.7C160,53,320,75,480,80C640,85,800,75,960,69.3C1120,64,1280,64,1360,64L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
    



    <div class="sevenPartTwo">
    <div class="left">
        <img src="./assets/new/dog.jpg" alt="" srcset="">
    </div>
    <div class="right">
        <h3>Helping Animals Through Adoption</h3>
        <div class="sepBegin"></div>
        <p>At The Helpbook Foundation, we believe in giving every animal a second chance at life. Adoption is not just about finding a pet;</p>
        <p>it’s about creating a loving and nurturing environment for animals in need. By adopting a pet, you’re not only saving a life but also gaining a loyal companion who can bring joy and unconditional love to your home. Our organization is dedicated to connect people with animals looking for forever homes, raising awareness about the importance of animal welfare and promoting responsible pet ownership. Together, we can make a difference in the lives of these deserving creatures and ensure they receive the love and care they need. Join us in our mission to help animals find their perfect match through adoption.</p>
        <div class="adopt margin-50">
            <a href="./adoptForm.php" class="register"><i class="fa-solid fa-paw"></i>&nbsp;Adopt</a>
        </div>
    </div>
</div>


<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80"><path fill="#eee" fill-opacity="1" d="M0,32L80,42.7C160,53,320,75,480,80C640,85,800,75,960,69.3C1120,64,1280,64,1360,64L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>
 


          



    
    <div class="imgTreeHead">
        <h1>Showcasing</h1>
        <div class="sepratorHr"></div>
    </div>

    <div class="imgTree">
        <div class="sideOne">
            <img src="./assets/tree (1).jpg" alt="" srcset="">
            <img src="./assets/tree (2).jpg" alt="" srcset="">
            <img src="./assets/tree (3).jpg" alt="" srcset="">
            <img src="./assets/tree (7).jpg" alt="" srcset="">
        </div>
        <div class="sideTwo">
            <img src="./assets/tree (4).jpg" alt="" srcset="">
            <img src="./assets/tree (5).jpg" alt="" srcset="">
            <img src="./assets/tree (6).jpg" alt="" srcset="">
            <img src="./assets/tree (8).jpg" alt="" srcset="">
        </div>
    </div>





        
<?php


include 'footer.php'

?>

    <script src="./script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>

</body>
</html>
