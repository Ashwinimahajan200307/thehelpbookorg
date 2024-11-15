<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Support Page | Education & Awareness</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">


    <meta name="description" content="Support HelpBook Foundation’s educational initiatives aimed at empowering youth through learning opportunities and resources.">
    <meta name="keywords" content="HelpBook Foundation, education, youth empowerment, learning resources, community education">

    <meta property="og:title" content="Education Initiatives by HelpBook Foundation">
    <meta property="og:description" content="Empowering communities through educational resources and programs for youth development.">
    <meta property="og:url" content="https://thehelpbook.org/education.php">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://thehelpbook.org/assets/education.jpg">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Education Initiatives by HelpBook Foundation">
    <meta name="twitter:description" content="Empowering communities through educational resources and programs for youth development.">
    <meta name="twitter:image" content="https://thehelpbook.org/assets/education.jpg">



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
        background-image: url('./assets/education.jpg'); /* Placeholder for education background */
        background-size: cover;
        background-position: center;
        color: white;
        padding: 60px 20px;
        text-align: center;
        min-height: 750px; /* Keeps this height as is */
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
        background-color: #f57d81;
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
        background-color: white;
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
            color: white;
        }
    }
    
    
    .content {
        display: flex;
        justify-content: center;
        flex-direction: column;
        max-width: 40%;
        align-items: flex-start;
    }
    
    section:nth-of-type(3) {
        margin-bottom: 100px;
        padding-top: 20px;
        margin-top: 0;
        background-color: white;
    }
    
    
    section:nth-of-type(4) {
        margin-top: -20px;
        background-color: #f2effd;
        flex-direction: row-reverse;
    
        h2 {
            color: #b4a1f7;
        }
    
        .register {
            background-color: #b4a1f7;
            color: white;
        }
    }
    
    section:nth-of-type(5) {
        padding-top: 20px;
        margin-top: 0;
    
        h2 {
            color: #eed764;
        }
    
        .register {
            background-color: #eed764;
            color: white;
        }
    }
    
    
    
    
    
    
    .quote-section {
        margin: 100px;
        background-color: #fff3cd; /* Light yellow background */
        padding: 40px 20px; /* Padding for the section */
        border-radius: 8px; /* Rounded corners */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-direction: row; /* Align content horizontally */
        gap: 20px; /* Space between image and text */
        position: relative; /* Positioning context for the pseudo-element */
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
            rgba(255, 255, 200, 0.5) 0,
            rgba(255, 255, 200, 0.5) 10px,
            rgba(255, 255, 50, 0.5) 10px,
            rgba(255, 255, 50, 0.5) 20px
        ); */
        background-color: #eed764;
        opacity: 0.3; /* Make the pattern semi-transparent */
        border-radius: 8px; /* Match the border radius of the section */
        z-index: 0; /* Place behind other content */
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
        color: #706630;
        line-height: 1.3; /* Spacing between lines */
        text-align: left;
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
        width: 100%; /* Use full width of the container */
        max-width: 500px; /* Maximum width set to 350px */
        height: auto; /* Fixed height to crop the image */
        border: 10px solid white; /* Thicker white border around the image */
        border-bottom: 20px solid #ffffff; /* Thicker bottom border for realism */
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5); /* More realistic shadow for depth */
        overflow: hidden; /* Hide overflow to crop the image */
        background-color: white; /* White background for the image */
        padding: 5px; /* Padding to create space between the image and border */
        object-fit: cover; /* Ensure image covers the area and maintains aspect ratio */
        /* transform: rotate(3deg); */
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
        background-color: #f57d81;
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
    
    
    
    /* Media Queries for Responsiveness */
    @media (max-width: 768px) {
        .student-card {
            width: calc(100% - 20px); /* Stack cards on smaller screens */
        }
    
        .card-container {
            flex-direction: column; /* Stack cards vertically */
            align-items: center; /* Center cards */
        }
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

    <!-- Hero Section: Environment Focus -->
    <section class="hero edu">
        <h1>Inspire the Next Generation</h1>
        <div class="sepBegin"></div>
        <p>Your support can give students the resources they need to succeed.</p>
        <a href="./notify.php"><i class="fa-solid fa-check"></i>&nbsp;Notify Later...</a>
    </section>


    <!-- Teacher Contribution Section -->
    <section class="teacher openbtn" id="teacher">
<div class="img">
    <img src="./assets/new/education3.jpg" alt="">
</div>
 <div class="content">
    <h2>Teacher</h2>
    <p>"Teachers are the foundation of knowledge and growth. By supporting teachers, The Helpbook Foundation invests in quality education and guidance, empowering educators to unlock the potential of students, especially those with limited resources. Get involved to make a lasting impact on future generations."</p>
    <span class="register"><a href="./support.php">Get Involved</a></span>
 </div>
    </section>


    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="#FFEEEE"><path d="M1000 100C500 100 500 64 0 64V0h1000v100Z" opacity=".5"></path><path d="M1000 100C500 100 500 34 0 34V0h1000v100Z" opacity=".5"></path><path d="M1000 100C500 100 500 4 0 4V0h1000v100Z"></path></svg>

    <!-- Student Support Section -->
    


    <section class="student openbtn" id="student">
<div class="img">
    <img src="./assets/new/education2.jpg" alt="">
</div>
 <div class="content">
    <h2>Student</h2>
    <p>"Our Student Support programs provide essential resources and opportunities to learners in need. The Helpbook Foundation believes every student deserves a chance to succeed, regardless of background. Join us in empowering young minds to reach their fullest potential through education."</p>
    <span class="register"><a href="./support.php">Get Involved</a></span>
 </div>
    </section>


    
    
    <!-- Donor Support Section -->

    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220"><path fill="#f2effd" fill-opacity="1" d="M0,64L48,58.7C96,53,192,43,288,48C384,53,480,75,576,96C672,117,768,139,864,149.3C960,160,1056,160,1152,144C1248,128,1344,96,1392,80L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg> -->


    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 180"><path fill="#f2effd" fill-opacity="1" d="M0,32L48,48C96,64,192,96,288,96C384,96,480,64,576,58.7C672,53,768,75,864,90.7C960,107,1056,117,1152,106.7C1248,96,1344,64,1392,48L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

    
    <section class="donor openbtn" id="donor">
<div class="img">
    <img src="./assets/new/education1.jpg" alt="">
</div>
 <div class="content">
    <h2>Donor</h2>
    <p>"Donors are vital to sustaining impactful educational initiatives. Your contributions enable The Helpbook Foundation to provide resources, mentorship, and opportunities for students and teachers alike. Become a donor and help us bridge educational gaps, creating brighter futures."</p>
    <span class="register"><a href="./support.php">Get Involved</a></span>
 </div>
    </section>



    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="#F2EFFD"><path d="M1000 100C500 100 500 64 0 64V0h1000v100Z" opacity=".5"></path><path d="M1000 100C500 100 500 34 0 34V0h1000v100Z" opacity=".5"></path><path d="M1000 100C500 100 500 4 0 4V0h1000v100Z"></path></svg>

    <!-- Other Initiatives Section -->



    <section class="student openbtn" id="other">
        <div class="img">
            <img src="./assets/education.jpg" alt="">
        </div>
         <div class="content">
            <h2>Other</h2>
            <p>"The Helpbook Foundation’s other educational initiatives focus on skill development, digital literacy, and career guidance. These programs support holistic growth and long-term success for learners of all ages. Join us to empower individuals and build strong, educated communities."</p>
            <span class="register"><a href="./support.php">Get Involved</a></span>
         </div>
            </section>
        
        
    




    <div class="quote-section">
        <div class="quote-content">
            <img src="./assets/apj2008.jpg" alt="Dr. A.P.J. Abdul Kalam" class="quote-image">
            <div class="quote-text">
                <h2>“Education is the most powerful weapon which you can use to change the world.”</h2>
                <p>- Dr. A.P.J. Abdul Kalam</p>
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
