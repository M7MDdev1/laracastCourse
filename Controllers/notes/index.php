<?php

$Name = "Notes";

$CurrentUser = 1;

$posts = $db->Query("SELECT * FROM Posts where userID = :id",["id"=>$CurrentUser])->get();

// dd($posts);

view("notes/index.view.php", [
    'Name' => 'My Notes',
    'posts' => $posts
]);