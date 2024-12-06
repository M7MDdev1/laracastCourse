<?php

function isURL($value){
    return $_SERVER['REQUEST_URI'] === $value;
}



function dd($value){

    echo "<pre/>";
    var_dump($value);
    echo "</pre>";
    die();
}

function authorize($condition,$status = 403){
    if(!$condition){
        abort($status);
    }
}

function base_path($path){

    return BASE_PATH . $path;
}

function view($path, $attributes = []){
    extract($attributes);

    require base_path("views/$path");
}