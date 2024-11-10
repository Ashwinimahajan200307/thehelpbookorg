<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Helpbook Foundation | Support</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <?php
     include 'metacommon.php'
     ?> </head>

<body>

<?php

include 'header.php';

?>


    <div class="margin-50"></div>


    <div class="mainContainer">
        <span class="first"><a href="./studentdonation.php"><i class="fas fa-hands-helping"></i></a><span>Help</span></span>
        <span class="second"><a href="./studentform.php"><i class="fas fa-seedling"></i></a><span>Needy</span></span>
        <span class="third"><a href="./donate.php"><i class="fas fa-ticket-alt"></i></a><span>Support Helpbook</span></span>
    </div>

    <style>
        .mainContainer{
            margin-top: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px;
            margin-bottom: 150px;

            span {

                text-align: center;
                a {
                    width: 100px;
                height: 100px;
                border-radius: 50%;
                background-color: #f5f5f5;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                text-decoration: none;
                color: white;
                font-size: 2rem;
                }

                span {
                    display: block;
                    margin-top: 10px!important;
                    height: auto;
                    width: auto;
                    padding: 0;
                    margin: 0;
                    font-size: 0.7rem;
                }
            }

            span.first a {
                background-color: rgb(247, 105, 105);
            }

            span.second a {
                background-color: rgb(53, 255, 178);
            }

            span.third a {
                background-color: orange;
            }
        }
    </style>
    



<?php

include 'footer.php';

?>

    <script src="./script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>
</body>

</html>
