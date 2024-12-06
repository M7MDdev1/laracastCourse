<?php

$Name = "My Note";


$post = $db->Query("SELECT * FROM notes where id = :id",["id"=>$_GET['id']])->findOrFail();

// dd($_SERVER['REQUEST_METHOD']);


$CurrentUser = 1;


authorize($post['UserID'] === $CurrentUser);

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $db->Query(" DELETE FROM notes WHERE id = :id",["id"=>$_GET['id']]);
    header("location: /Notes");
    exit();
}

view("notes/show.view.php", [
    'Name' => 'Note',
    'post' => $post
]);