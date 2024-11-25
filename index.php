<?php 

require "functions.php";

// require "router.php";
require "Database.php";

$db = new Database();

$posts = $db->Query('SELECT * FROM Posts')->fetchAll(PDO::FETCH_ASSOC);


foreach($posts as $post){
    echo "<li>{$post['title']}</li>";
}
