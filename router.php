<?php 

$URL = parse_url($_SERVER['REQUEST_URI'])['path'];

$Routes = [
    '/' => 'Controllers/index.php',
    '/About' => 'Controllers/About.php',
    '/Contact' => 'Controllers/Contact.php',
];


function abort($Code = 404){
    http_response_code($Code);
    require 'Controllers/NotFound.php';
    die();
}


if(array_key_exists($URL,$Routes)){
    require $Routes[$URL];
}else{
    abort();
}