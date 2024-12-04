<?php

namespace Core;
use PDO;

class Database{

    public $connection;
    public $statement;
    function __construct($config,$username = 'root',$password='')
    {
        $dsn = 'mysql:'. http_build_query($config,'',";");

     $this->connection = new PDO($dsn,$username,$password,[
        PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_ASSOC
     ]);
    }

    public function Query($Query,$params = []){

        $this->statement = $this->connection->prepare($Query);
        $this->statement->execute($params);

        return $this;
        
    }

    public function findOrFail(){
         $result = $this->statement->fetch();

         if($result){
            return $result;
         }
         abort();
    }

    public function get(){
        return $this->statement->fetchAll();
    }
}