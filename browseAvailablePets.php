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
    <script src="https://kit.fontawesome.com/7f02fd1870.js" crossorigin="anonymous"></script>

    <title>Browse available pets</title>
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

        <div class="contentArea test">
            <?php
            //check if form was submitted
            if (isset($_POST['findSubmit'])) {
                //get data
                $type = $_POST['type'];
                $breed = $_POST['breed'];
                $age = $_POST['age'];
                $gender = $_POST['gender'];
                $getalongD = $_POST['getalongD'];
                $getalongC = $_POST['getalongC'];
                $getalongChild = $_POST['getalongChild'];
                $empty = true;

                //open file and loop over it
                $file = "files/availablePetInformation.txt";
                if (file_exists($file)) {
                    $pets = fopen($file, 'r');
                    while (!feof($pets)) {
                        $line = fgets($pets);
                        if (!$line) {
                            break;
                        }
                        $pet = explode(':', $line);


                        //check if data matches
                        if (
                            $type === $pet[1] && ($breed === $pet[2] || $breed === "Doesn't matter") &&
                            ($age === $pet[3] || $age === "Doesn't matter") && ($gender === $pet[4] ||
                                $gender === "Doesn't matter") && $getalongC === $pet[6] && $getalongChild === $pet[7]
                            && $getalongD === $pet[5]
                        ) {
                            //display data
                            $empty = false;
                            include('components/displayCard.php');

                        }
                    }
                }

                //if nothing was fond
                if ($empty) {
                    echo '<p class="notfound">Nothing found, return to <a href="find.php" style="color: #579bb1;">previous page</a></p>';
                }

                //if user enetered the URL without submitting the form then redirect to the form page
            } else {
                header('Location: find.php');

            }
            ?>
        </div>
    </div>


    <!-- footer -->
    <?php
    include("components/footer.php")
        ?>

    <script src="index.js"></script>
</body>

</html>