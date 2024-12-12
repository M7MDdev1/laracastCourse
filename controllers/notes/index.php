<?php

use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$currentUserId = $_SESSION['user']['id'];

$notes = $db->query('select * from notes where UserID = :id',[
    'id'=>$currentUserId
])->get();

view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);