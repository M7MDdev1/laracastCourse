<?php

$Name = "Notes";

$config = require('config.php');

$db = new Database($config['database']);

$posts = $db->Query("SELECT * FROM Posts where userID = :id",["id"=>$_GET['id']])->fetchAll();

// dd($posts);

require "views/Notes.view.php";