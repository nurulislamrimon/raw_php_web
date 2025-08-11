
    <?php

    require_once("./router.php");

    $dsn = "mysql:host=localhost;port=3306;user=root;password=Nurul123;dbname=bdentrepreneur;charset=utf8mb4";

    $pdo = new PDO($dsn);


    $statement = $pdo->prepare("select * from administrator");

    $statement->execute();

    $users = $statement->fetchAll();

    echo var_dump($users);
