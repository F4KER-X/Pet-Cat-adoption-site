<?php
session_start();

if (isset($_SESSION["loggedin"])) {
    header("location: index.php");
    exit;
}

//initialize message
$message = '';

if (isset($_POST['loginSubmit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];



    $file = 'files/login.txt';

    if (file_exists($file)) {
        $fptr = fopen($file, 'r');

        $foundUser = false;
        while (!feof($fptr)) {
            $line = fgets($fptr);
            if (!$line) {
                break;
            }
            list($user, $pass) = explode(':', $line);
            if (trim($user) == $username && trim($pass) == $password) {
                $foundUser = true;
                break;
            }
        }
        fclose($fptr);
        if (!$foundUser) {
            $message = "Username/password do not match";
        } else {
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            header("location: giveAway.php");
            exit;
        }
    } else {
        $message = "Please signup first";
    }
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
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet" />

    <title>Login</title>
</head>

<body class="d-flex flex-column h-100">

    <!-- HEADER -->
    <?php
    include("components/header.php")
        ?>

    <div class="mainBody">
        <div class="contentArea">

            <!-- SIDEBAR -->
            <?php
            include("components/sidebar.php")
                ?>

            <!-- LOGIN FORM -->
            <?php
            include("components/loginForm.php")
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