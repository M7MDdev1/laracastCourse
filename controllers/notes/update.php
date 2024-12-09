<?php

use Core\Database;
use Core\App;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 1;

$note = $db->query('select * from notes where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($note['UserID'] === $currentUserId);



$errors = [];
if (! Validator::string($_POST['title'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required.';
}
// if no validation errors, update the record in the notes database table.
if (count($errors)) {
    return view('notes/edit.view.php', [
        'heading' => 'Edit Note',
        'errors' => $errors,
        'note' => $note
    ]);
}
$db->query('update notes set title = :title where id = :id', [
    'id' => $_POST['id'],
    'title' => $_POST['title']
]);

header('location: /notes');
die();