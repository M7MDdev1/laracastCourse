<?php 




$Routes = require base_path("Routes.php");

$URL = parse_url($_SERVER['REQUEST_URI'])['path'];


function abort($Code = 404){
    http_response_code($Code);
    require base_path("Controllers/$Code.php");
    die();
}


if(array_key_exists($URL,$Routes)){
    require base_path($Routes[$URL]);
}else{
    abort();
}