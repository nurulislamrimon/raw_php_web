<?php

class Database
{
    public $connection;

    // don't repeat connection
    function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=php_practice;charset=utf8mb4";

        $this->connection = new PDO($dsn, "root", "Nurul123", [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    function query($query)
    {
        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }
}
