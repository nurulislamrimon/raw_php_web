
    <?php

    $uri = parse_url($_SERVER["REQUEST_URI"])['path'];


    $routes = [
        "/" => "./pages/home.php",
        "/contact" => "./pages/contact.php",
        "/pricing" => "./pages/pricing.php",
        "/services" => "./pages/services.php",
    ];


    if (array_key_exists($uri, $routes)) {
        require_once($routes[$uri]);
    } else {
        http_response_code(404);
        require_once("./pages/notfound.php");
    }
