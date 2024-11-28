<?php

$Name = "Notes";

$config = require('config.php');

$db = new Database($config['database']);

$CurrentUser = 3;

$posts = $db->Query("SELECT * FROM Posts where userID = :id",["id"=>$CurrentUser])->fetchAll();

// dd($posts);

require "views/Notes.view.php";