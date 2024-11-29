<?php 




$Routes = require("Routes.php");

$URL = parse_url($_SERVER['REQUEST_URI'])['path'];


function abort($Code = 404){
    http_response_code($Code);
    require "Controllers/$Code.php";
    die();
}


if(array_key_exists($URL,$Routes)){
    require $Routes[$URL];
}else{
    abort();
}