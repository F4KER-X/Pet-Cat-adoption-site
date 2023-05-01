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
            <img src="images/catcare.jpg" alt="catcare.jpg" style="max-width: 1603px; height: 1080px" />
            <div class="infoCare">
                <h1 class="careTitle">General Cat Care</h1>
                <p>
                    Have you recently added a feline friend to your family?
                    Congratulations! We know you’ll be thrilled to have your new cat in
                    your home. If you are considering adopting a cat, please visit your
                    local shelter. We encourage you to browse our directory of adoptable
                    cats in your area, or use our shelter finder to start your search.
                </p>
                <h2>Feeding</h2>
                <ul>
                    <li>
                        Cats require taurine, an essential amino acid, for heart and eye
                        health. The food you choose should be balanced for the life stage
                        of your cat or kitten.
                    </li>
                    <li>
                        You will need to provide fresh, clean water at all times, and wash
                        and refill your cat’s water bowls daily.
                    </li>
                    <li>Treats should be no more than 5-10% of the diet.</li>
                    <li>
                        Take your pet to your veterinarian if signs of anorexia, diarrhea,
                        vomiting or lethargy continue for more than two days.
                    </li>
                </ul>
                <h2>Grooming</h2>
                <p>
                    Most cats stay relatively clean and rarely need a bath, but you
                    should brush or comb your cat regularly. Frequent brushing helps
                    keep your cat's coat clean, reduces the amount of shedding and cuts
                    down on the incidence of hairballs.
                </p>
                <h2>Handling</h2>
                <p>
                    To pick up your cat, place one hand behind the front legs and
                    another under the hindquarters. Lift gently. Never pick up a cat by
                    the scruff of the neck or by the front legs.
                </p>

                <h2>Housing</h2>
                <p>
                    Your pet should have her own clean, dry place in your home to sleep
                    and rest. Line your cat's bed with a soft, warm blanket or towel. Be
                    sure to wash the bedding often. Please keep your cat indoors.
                    Outdoor cats do not live as long as indoor cats. Outdoor cats are at
                    risk of trauma from cars, or from fights with other cats, raccoons
                    and free-roaming dogs. Coyotes are known to eat cats.
                </p>
                <p>
                    Source:
                    <a class="sourceCare" href="https://www.aspca.org/pet-care/cat-care/general-cat-care">General
                        Cat
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