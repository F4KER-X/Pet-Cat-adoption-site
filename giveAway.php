<?php
session_start();
//if user not logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

if (isset($_POST['giveawaySubmit'])) {
    //get data
    $type = $_POST['type'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $getalongD = $_POST['getalongD'];
    $getalongC = $_POST['getalongC'];
    $getalongChild = $_POST['getalongChild'];
    $formControlTextarea = $_POST['formControlTextarea'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $petName = $_POST['petName'];

    //get counter
    $petInfo = "files/availablePetInformation.txt";
    $file = fopen($petInfo, "a+");
    if (filesize($petInfo) == 0) {
        $counter = 1;
    } else {
        $file_contents = file($petInfo);
        $file_contents = array_filter($file_contents);
        $last_line = end($file_contents);
        $counter = explode(':', $last_line)[0] + 1;
    }

    fwrite($file, $counter . ':' . $type . ':' . $breed . ':'
        . $age . ':' . $gender . ':' . $getalongD . ':' . $getalongC .
        ':' . $getalongChild . ':' . $formControlTextarea . ':' . $fname .
        ':' . $lname . ':' . $email . ':' . $petName . "\n");

    fclose($file);

}
?>

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

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Itim&family=Roboto+Condensed:wght@700&display=swap"
        rel="stylesheet" />

    <title>GiveAway your Pet</title>
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
            <img src="images/formimg.jpg" alt="ga.jpg" style="max-width: 1603px; height: 1080px" />


            <?php
            //display giveaway form
            include('components/giveawayForm.php');
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