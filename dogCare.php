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

    <title>Cat Care</title>
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
            <img src="images/dogcare.jpg" alt="dogcare.jpg" style="max-width: 1603px; height: 1080px" />
            <div class="infoCare">
                <h1 class="careTitle">General Dog Care</h1>
                <p>
                    A dog can be a wonderful addition to any home, but whether you're an
                    experienced pet parent or a first-time adopter, it's important to
                    keep your canine companion's health and happiness a top priority.
                    Below are some useful tips for all dog parents.
                </p>
                <h2>Feeding</h2>
                <ul>
                    <li>Puppies eight to 12 weeks old need four meals a day.</li>
                    <li>Feed puppies three to six months old three meals a day.</li>
                    <li>Feed puppies six months to one year two meals a day.</li>
                    <li>
                        When your dog reaches his first birthday, one meal a day is
                        usually enough.
                    </li>
                </ul>
                <h2>Exercise</h2>
                <p>
                    Dogs need exercise to burn calories, stimulate their minds, and stay
                    healthy. Individual exercise needs vary based on breed or breed mix,
                    sex, age and level of health. Exercise also tends to help dogs avoid
                    boredom, which can lead to destructive behaviors. Supervised fun and
                    games will satisfy many of your pet's instinctual urges to dig,
                    herd, chew, retrieve and chase.
                </p>
                <h2>Grooming</h2>
                <p>
                    Help keep your dog clean and reduce shedding with frequent brushing.
                    Check for fleas and ticks daily during warm weather. Most dogs don't
                    need to be bathed more than a few times a year. Before bathing, comb
                    or cut out all mats from the coat. Carefully rinse all soap out of
                    the coat, or the dirt will stick to soap residue.
                </p>
                <h2>Housing</h2>
                <p>
                    Your pet needs a warm, quiet place to rest, away from all drafts and
                    off the floor. A training crate or dog bed is ideal, with a clean
                    blanket or pillow placed inside. Wash the dog's bedding often. If
                    your dog will be spending a lot of time outdoors, be sure she has
                    access to shade and plenty of cool water in hot weather, and a warm,
                    dry, covered shelter when it's cold.
                </p>
                <p>
                    Source:
                    <a class="sourceCare" href="https://www.aspca.org/pet-care/dog-care/general-dog-care">General Dog
                        Care</a>
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