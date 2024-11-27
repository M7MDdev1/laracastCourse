<?php

$Name = "My Note";

$config = require('config.php');

$db = new Database($config['database']);

$post = $db->Query("SELECT * FROM Posts where id = :id",["id"=>$_GET['id']])->fetch();

// dd($post);

require "views/MyNote.view.php";