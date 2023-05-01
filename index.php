<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8" />
    <!--css-->
    <link rel="stylesheet" type="text/css" href="styles.css" />

    <!--fonts and icons-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet" />
    <link rel="icon" type="images/x-icon" href="./images/icon.jpg" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet" />
    <title>Happy Home Sanctuary</title>

</head>

<body class="d-flex flex-column h-100">

    <!-- HEADER -->

    <?php
    include("components/header.php")
        ?>

    <div class="mainBody">


        <!-- SIDEBAR -->
        <?php
        include("components/sidebar.php")
            ?>

        <div class="contentArea">
            <img src="images/home.jpg" alt="home.jpg" style="width: 50%" />
            <img src="images/home2.jpg" alt="home2.jpg" style="width: 100%" />
            <div class="firstTitle">
                <p class="head">The Option is Adoption.</p>
                <p>
                    We are dedicated to finding loving homes for abandoned and neglected
                    pets. Our mission is to provide a safe and nurturing environment for
                    every pet in our care until they find their forever home.
                </p>
            </div>
            <div class="secondTitle">
                <p class="head">Safe. Supportive. User-friendly</p>
                <p>
                    We believe that adopting a pet is a serious responsibility, and we
                    are here to help guide you through the process. Our adoption team is
                    knowledgeable and experienced, and they are always available to
                    answer your questions and help you find the perfect pet for your
                    home.
                </p>
                <p>
                    Take a look at our available pets today and find your new best
                    friend. Thank you for choosing Happy Home Sanctuary for your pet
                    adoption needs. Together, we can give these pets the second chance
                    they deserve.
                </p>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php
    include("components/footer.php")
        ?>

    <script src="index.js"></script>
</body>

</html>