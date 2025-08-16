
    <?php

    require_once("./router.php");
    require_once("./utils/logger.php");

    $dsn = "mysql:host=localhost;port=3306;user=root;password=Nurul123;dbname=php_practice;charset=utf8mb4";

    $pdo = new PDO($dsn);


    $statement = $pdo->prepare("select * from user where email='ni@gmail.com'");

    $statement->execute();

    $users = $statement->fetchAll(PDO::FETCH_ASSOC);

    logger($users);
