
    <?php

    $uri = $_SERVER["REQUEST_URI"];

    if ($uri === "/") {
        include_once "./pages/home.php";
    } else if ($uri === "/services") {
        include_once "./pages/services.php";
    } else if ($uri === "/pricing") {
        include_once "./pages/pricing.php";
    } else if ($uri === "/contact") {
        include_once "./pages/contact.php";
    } else {
        include_once "./pages/notfound.php";
    }
