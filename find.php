<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

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
    <title>Find a pet</title>
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
            <img src="images/findimg2.jpg" alt="ga.jpg" style="max-width: 1603px; height: 1080px" />
            <div class="form">
                <form onsubmit="return validateFindDogCat()" method="post" action="browseAvailablePets.php">
                    <div class="formSelect">
                        <p class="formTitle">
                            Welcome to our pet search form! Here you can find information on
                            a wide variety of our Dogs or Cats and get a better
                            understanding of their unique characteristics and habits.
                            Whether you're looking for information on a specific breed or
                            simply exploring our collection, this form can help.
                        </p>
                    </div>
                    <div class="formSelect">
                        <label for="type">Choose between Dog or Cat</label>
                        <select class="form-control" id="type" name="type">
                            <option value="" selected>Choose</option>
                            <option value="Dog">Dog</option>
                            <option value="Cat">Cat</option>
                        </select>
                    </div>
                    <div class="formSelect">
                        <label for="breed">Breed of dog or cat</label>
                        <select class="form-control" id="breed" name="breed">
                            <option value="" selected>Choose</option>
                            <option value="German Shepherd Dog">German Shepherd Dog</option>
                            <option value="Bulldog Dog">Bulldog Dog</option>
                            <option value="Golden Retriever Dog">Golden Retriever Dog</option>
                            <option value="Poodle Dog">Poodle Dog</option>
                            <option value="Siamese Cat">Siamese Cat</option>
                            <option value="British Shorthair Cat">British Shorthair Cat</option>
                            <option value="Persian Cat">Persian Cat</option>
                            <option value="Sphynx Cat">Sphynx Cat</option>
                            <option value="Doesn't matter">Doesn't matter</option>
                        </select>
                    </div>
                    <div class="formSelect">
                        <label for="age">Age of animal</label>
                        <select class="form-control" id="age" name="age">
                            <option value="" selected>Choose</option>
                            <option value="0-5">0-5</option>
                            <option value="6-10">6-10</option>
                            <option value="10-15">10-15</option>
                            <option value="More than 15">More than 15</option>
                            <option value="Doesn't matter">Doesn't matter</option>
                        </select>
                    </div>
                    <div class="formSelect">
                        <label for="gender">Preferred gender </label>
                        <select class="form-control" id="gender" name="gender">
                            <option value="" selected>Choose</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Doesn't matter">Doesn't matter</option>
                        </select>
                    </div>
                    <div class="formSelect">
                        <label for="getalong">Does it need to get along with small children?</label>
                        <select class="form-control" id="getalongChild" name="getalongChild">
                            <option value="" selected>Choose</option>
                            <option value="Gets along with small children">Yes</option>
                            <option value="Doesn't get along with small children">No</option>
                        </select>
                    </div>
                    <div class="formSelect">
                        <label for="getalong">Does it need to get along with other Dogs?</label>
                        <select class="form-control" id="getalongD" name="getalongD">
                            <option value="" selected>Choose</option>
                            <option value="Gets along with other Dogs">Yes</option>
                            <option value="Doesn't get along with other Dogs">No</option>
                        </select>
                    </div>
                    <div class="formSelect">
                        <label for="getalong">Does it need to get along with other Cats?</label>
                        <select class="form-control" id="getalongC" name="getalongC">
                            <option value="" selected>Choose</option>
                            <option value="Gets along with other Cats">Yes</option>
                            <option value="Doesn't get along with other Cats">No</option>
                        </select>
                    </div>
                    <div class="formSelect btns">
                        <input class="btn btn-outline-primary" type="submit" value="Submit" id="submit"
                            name="findSubmit" />
                        <input class="btn btn-outline-secondary" type="reset" value="Reset" id="reset" />
                    </div>
                </form>
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