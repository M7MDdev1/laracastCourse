<?php


$Name = "Create Note";

require base_path("Validator.php");

$CurrentUser = 1;

$error = null;


if($_SERVER['REQUEST_METHOD'] === "POST")
{



    if(!Validator::string($_POST['title'],7,1000)){
        $error = "A body of no more than 1000 and not less than 7 is required";
    }

    
    

   if(!isset($error)){
    $posts = $db->Query("INSERT INTO Posts(title,UserID) values (:title, :UserID)",[
        "title"=> $_POST['title'],
        "UserID"=>$CurrentUser
        ])->get();
   }

    
}


view("notes/create.view.php", [
    'Name' => 'Create Note',
    'error' => $error
]);