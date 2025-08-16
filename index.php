
    <?php

    require_once("./router.php");
    require_once("./database.php");
    require_once("./utils/logger.php");

    $db = new Database();

    $data = $db->query("select * from user where email='ni@gmail.com'")->fetch();

    logger($data);
