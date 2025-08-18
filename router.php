
    <?php

    $uri = parse_url($_SERVER["REQUEST_URI"])['path'];


    $routes = [
        "/" => "./controllers/home.php",
        "/contact" => "./controllers/contact.php",
        "/pricing" => "./controllers/pricing.php",
        "/services" => "./controllers/services.php",
    ];

    function routeToController($uri, $routes)
    {
        if (array_key_exists($uri, $routes)) {
            require_once($routes[$uri]);
        } else {
            http_response_code(404);
            require_once("./controllers/notfound.php");
        }
    }

    routeToController($uri, $routes);
