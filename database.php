<?php

class Database
{
    public $connection;

    // don't repeat connection
    function __construct($config, $username, $password)
    {

        $dsn = "mysql:" . http_build_query($config, '', ";");

        $this->connection = new PDO($dsn, $username, $password, [
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
