<?php

$Name = "My Note";


$post = $db->Query("SELECT * FROM Posts where id = :id",["id"=>$_GET['id']])->findOrFail();

// dd($post['UserID']);

$CurrentUser = 1;


authorize($post['UserID'] === $CurrentUser);

view("notes/show.view.php", [
    'Name' => 'Note',
    'post' => $post
]);