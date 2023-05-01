<?php
session_start();
//initialize message
$message = '';
//check form is submitted
if (isset($_POST['createSubmit'])) {
    //get data
    $username = $_POST['username'];
    $password = $_POST['password'];
    //open file
    $fptr = fopen('files/login.txt', 'a+');

    $foundUser = false;
    //loop over file
    while (!feof($fptr)) {
        $line = fgets($fptr);
        if (!$line) {
            break;
        }
        list($user, $pass) = explode(':', $line);
        if (trim($user) == $username) {
            $foundUser = true;
            break;
        }
    }


    //check if the user was found
    if (!$foundUser) {
        fwrite($fptr, $username . ":" . $password . "\n");
        $message = "User has been created you can login!";
    } else {
        $message = "Please enter a new username/password";
    }
    fclose($fptr);
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

    <title>Create An Account</title>
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

            <form class="form" method="post" action="createAnAccount.php" onsubmit="return validateRegister()"
                style="left: 45%">
                <h1 style="margin: 50px 0">Create an account</h1>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" aria-describedby="emailHelp"
                        placeholder="Username" name="username">
                    <div class="invalid-tooltip" style="position: relative; margin: 5px 0; width: 220px">
                        Please provide a valid username.
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    <div class="invalid-tooltip" style="position: relative; margin: 5px 0; width: 220px">
                        Please provide a valid password.
                    </div>
                </div>
                <div class="formSelect btns">
                    <input class="btn btn-outline-primary" type="submit" value="Submit" id="submit"
                        name="createSubmit" />
                </div>
                <!--display message-->
                <?php if (isset($message)) { ?>
                    <h4 style="color:red; margin-top: 30px"><?php echo $message ?></h4>
                <?php } ?>


                <div class="card" style="width: 500px; margin-top: 30px">
                    <div class="card-body">
                        <h5 class="card-title">Allowed formats</h5>
                        <p class="card-text">Username: Must contain letters and digits only.</p>
                        <p class="card-text">Password: Must be at least 4 characters long with letters and digits
                            only, at least one letter
                            and at least one digit.</p>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- footer -->
    <?php
    include("components/footer.php")
        ?>

    <script src="index.js"></script>
</body>

</html>