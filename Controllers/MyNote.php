<?php

$Name = "My Note";

$config = require('config.php');

$db = new Database($config['database']);

$post = $db->Query("SELECT * FROM Posts where id = :id",["id"=>$_GET['id']])->fetch();

// dd($post['UserID']);

$CurrentUser = 3;

if(!$post){
    abort();
}

if($post['UserID'] !== $CurrentUser){
    abort(403);
}

require "views/MyNote.view.php";