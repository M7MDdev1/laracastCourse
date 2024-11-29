<?php


// dd($_SERVER['REQUEST_METHOD']);

$Name = "Create Note";

$CurrentUser = 1;

if($_SERVER['REQUEST_METHOD'] === "POST")
{
    $posts = $db->Query("INSERT INTO Posts(title,UserID) values (:title, :UserID)",[
    "title"=> $_POST['title'],
    "UserID"=>$CurrentUser
    ])->get();

}



require "views/Notes-create.view.php";