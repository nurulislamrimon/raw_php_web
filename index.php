    <?php

    require_once("./router.php");
    require_once("./database.php");
    require_once("./utils/logger.php");

    $config =  require_once('./config/database.config.php');

    $email = $_GET['email'];

    $db = new Database($config['database'], $config['db_username'], $config['db_password']);

    $query = "select * from user where email = :email";

    $data = $db->query($query, [':email' => $email])->fetchAll();

    dd($data);
