<?php


$Name = "Create Note";

require "Validator.php";

$CurrentUser = 1;

if($_SERVER['REQUEST_METHOD'] === "POST")
{

    $error = null;


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



require "views/notes/create.view.php";