<?php 

require "functions.php";

// require "router.php";
require "Database.php";


$config = require('config.php');

$db = new Database($config['database']);

$posts = $db->Query('SELECT * FROM Posts')->fetchAll();


foreach($posts as $post){
    echo "<li>{$post['title']}</li>";
}
