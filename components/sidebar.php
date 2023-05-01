<?php
$page = basename($_SERVER['PHP_SELF']);
$menuItems = array(
    array(
        "url" => "index.php",
        "text" => "Home"
    ),
    array(
        "url" => "createAnAccount.php",
        "text" => "Create An Account"
    ),
    array(
        "url" => "dogCare.php",
        "text" => "Dog Care"
    ),
    array(
        "url" => "catCare.php",
        "text" => "Cat Care"
    ),
    array(
        "url" => "find.php",
        "text" => "Find a Dog/Cat"
    ),
    array(
        "url" => "giveAway.php",
        "text" => "Have a pet to give away"
    ),
    array(
        "url" => "contactUs.php",
        "text" => "Contact Us"
    )
);



echo '<div class="d-flex flex-column flex-shrink-0 p-3" id="menu">';
echo '<ul class="nav nav-pills flex-column mb-auto">';

foreach ($menuItems as $menuItem) {
    $isActive = ($page == basename($menuItem["url"])) ? 'active' : '';
    echo '<li class="nav-item">';
    echo '<a href="' . $menuItem["url"] . '" class="nav-link ' . $isActive . ' link-dark"' . 'id="' . $isActive . '">';
    echo '<svg class="bi me-2" width="16" height="16"></svg>' . $menuItem["text"];
    echo '</a>';
    echo '</li>';
}


if (isset($_SESSION["loggedin"])) {

    $isActive = ($page == 'logout.php') ? 'active' : '';
    echo '<li class="nav-item">';
    echo '<a href="logout.php" class="nav-link link-dark"' . 'id="' . $isActive . '">';
    echo '<svg class="bi me-2" width="16" height="16"></svg>LOGOUT';
    echo '</a>';
    echo '</li>';
}
echo '</ul>';
echo '</div>';