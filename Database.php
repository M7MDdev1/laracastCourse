<?php

class Database{

    public $connection;

    function __construct($config,$username = 'root',$password='')
    {


        $dsn = 'mysql:'. http_build_query($config,'',";");

     $this->connection = new PDO($dsn,$username,$password,[
        PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_ASSOC
     ]);
    }
    public function Query($Query){

        $statement = $this->connection->prepare($Query);
        $statement->execute();
        return $statement;
        
    }
}