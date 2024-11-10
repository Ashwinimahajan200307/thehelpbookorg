<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Helpbook Foundation | Donation Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <meta name="description" content="Support HelpBook Foundation’s mission by making a donation. Every contribution goes towards impactful initiatives in education, environment, and health.">
    <meta name="keywords" content="HelpBook Foundation, donate, charity, community support, social impact">

    <meta property="og:title" content="Donate to HelpBook Foundation">
    <meta property="og:description" content="Make a difference by donating to our community-driven initiatives in health, education, and the environment.">
    <meta property="og:url" content="https://thehelpbook.org/donate.php">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://thehelpbook.org/assets/education.jpg">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Donate to HelpBook Foundation">
    <meta name="twitter:description" content="Make a difference by donating to our community-driven initiatives in health, education, and the environment.">
    <meta name="twitter:image" content="https://thehelpbook.org/assets/education.jpg">

    <?php
     include 'metacommon.php'
     ?> </head>

<body>

<?php

include 'header.php';

?>


    <div class="containerDon">
        <div class="description">
            <h1>Show Your Support To Community.</h1>
            <p>Your support empowers The Helpbook Foundation to impact lives by funding environmental initiatives, education, healthcare, and animal welfare. Each contribution strengthens our mission to create a healthier, compassionate world where everyone can thrive.</p>
        </div>
        <div class="form-container">
            <h1>Donation Form</h1>


            <form>
                <label for="name">Your Name</label>
                <input type="text" id="name" placeholder="Name">

                <label for="email">Email Address</label>
                <input type="email" id="email" placeholder="Email Address">

                <label for="phone">Phone Number</label>
                <div class="phone-input">

                    <input type="text" id="phone" placeholder="070 123 4567">
                </div>

                <div class="goal-section">
                    <div>
                        <span>$0 Raised</span>
                        <span>0 Donations</span>
                        <span>$1000 Goal</span>
                    </div>
                    <div class="progress-bar">
                        <div class="progress" style="width: 40%;"></div>
                    </div>
                </div>

                <label for="goal">Donation Goal</label>
                <input type="number" id="goal" value="400">

                <div class="buttons">
                    <button type="button" onclick="donateCustom()">Donate</button>

                </div>

            </form>
        </div>
    </div>



    <div class="howDon">
        <h3>How is this going to help.</h3>
        <div class="sepratorHr"></div>
        <p>Your donation directly supports critical projects, from providing learning materials to underprivileged children to ensuring timely medical care in underserved areas. By donating, you help empower lives, uplift communities, and protect our planet for future generations.</p>
    </div>




<?php

include 'footer.php';

?>

    <script src="./script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>
</body>

</html>
