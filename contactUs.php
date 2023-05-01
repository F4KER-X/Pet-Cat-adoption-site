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

    <title>Contact Us</title>
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
            <img src="images/contactUs2.jpg" alt="ga.jpg" style="max-width: 1603px; height: 1080px" />
            <div class="contactUs">
                <div class="headContent">
                    <p style="font-size: 4em">Contact Us</p>
                    <p style="max-width: 500px; margin-top: 40px">
                        We're here to help. Whether you have a question, concern, or
                        feedback, we'd love to hear from you. You can reach us through the
                        following ways:
                    </p>
                </div>
                <div class="info">
                    <div>
                        <p>Name: Danny Mousa</p>
                    </div>

                    <div>
                        <p>ID: 40226912</p>
                    </div>

                    <div>
                        <p>Email: dannymousa1999@hotmail.com</p>
                    </div>
                </div>
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