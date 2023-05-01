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

    <title>Privacy Policy</title>
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
            <div class="privacy">
                <img src="images/privacy.jpg" alt="privacy.jpg" class="secimg" style="width: 500px" />
                <div class="privacyText">
                    <p>Privacy Policy for Happy Home Sanctuary:</p>
                    <p>
                        At Happy Home Sanctuary, we are committed to protecting the
                        privacy and security of our users. This Privacy Policy explains
                        how we collect, use, disclose, and protect information through our
                        website and services.
                    </p>
                    <p>Information We Collect:</p>
                    <p>
                        We collect information from you when you create an account, search
                        for a pet, submit an adoption application, or otherwise interact
                        with our website. This information may include:
                    </p>
                    <ul>
                        <li>
                            Personal information such as your name, email address, phone
                            number, and address.
                        </li>
                        <li>
                            Demographic information such as your location and pet
                            preferences.
                        </li>
                        <li>
                            Information about your past experiences with pets and pet
                            ownership.
                        </li>
                        <li>
                            Information about the pet you are interested in adopting, such
                            as the pet’s name, breed, and age.
                        </li>
                    </ul>
                    <p>How We Use Your Information:</p>
                    <p>We use the information we collect to:</p>
                    <ul>
                        <li>
                            Provide you with information about the pets available for
                            adoption.
                        </li>
                        <li>Review and process your adoption application.</li>
                        <li>
                            Contact you about your application status and answer any
                            questions you may have.
                        </li>
                        <li>
                            Provide you with updates and news about Happy Home Sanctuary.
                        </li>
                    </ul>
                    <p>Sharing Your Information</p>
                    <p>
                        We do not sell or rent your personal information to third parties
                        for their marketing purposes. We may share your information with:
                    </p>
                    <ul>
                        <li>
                            Pet shelters and rescues to help facilitate the adoption
                            process.
                        </li>
                        <li>
                            Service providers who assist us in operating our website and
                            providing our services.
                        </li>
                        <li>
                            Law enforcement or government agencies in response to a request
                            for information.
                        </li>
                    </ul>
                    <p>Security of Your Information</p>
                    <p>
                        We take reasonable measures to protect your information from
                        unauthorized access, use, or disclosure. However, no method of
                        electronic storage is 100% secure and we cannot guarantee the
                        absolute security of your information.
                    </p>
                    <p>Your Choices</p>
                    <p>
                        You may choose to limit the information you provide to us by not
                        creating an account or submitting an adoption application. If you
                        choose to create an account or submit an adoption application, you
                        may access, update, or delete your information at any time by
                        logging into your account.
                    </p>
                    <p>Changes to This Privacy Policy</p>
                    <p>
                        We may update this Privacy Policy from time to time to reflect
                        changes in our practices or applicable laws. We will provide
                        notice of any material changes to this Privacy Policy through our
                        website or by contacting you directly.
                    </p>
                    <p>Contact Us</p>
                    <p>
                        If you have any questions or concerns about this Privacy Policy,
                        please <a href="contactUs.php">contact us</a>.
                    </p>
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