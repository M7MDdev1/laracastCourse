<?php

$Name = "Notes";

$CurrentUser = 1;

$notes = $db->Query("SELECT * FROM notes where userID = :id",["id"=>$CurrentUser])->get();

// dd($notes);

view("notes/index.view.php", [
    'Name' => 'My Notes',
    'notes' => $notes
]);