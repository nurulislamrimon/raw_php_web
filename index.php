    <?php

    require_once("./router.php");
    require_once("./database.php");
    require_once("./utils/logger.php");

    $config =  require_once('./config/database.config.php');


    $db = new Database($config['database'], $config['db_username'], $config['db_password']);
    $query = "select * from user where email = ?";
    $email = 'ni@gmail.com';
    $data = $db->query($query, [$email])->fetch();

    logger($data);
