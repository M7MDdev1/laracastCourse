<?php

class Database{
    public $connection;
    function __construct()
    {
     $this->connection = new PDO("mysql:host=127.0.0.1;port=3306;dbname=myapp;user=root");

    }
    public function Query($Query){

        $statement = $this->connection->prepare($Query);
        $statement->execute();
        return $statement;
        
    }
}