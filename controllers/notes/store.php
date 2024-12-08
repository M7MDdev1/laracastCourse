<?php

use Core\Validator;
use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$errors = [];

if (! Validator::string($_POST['title'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required.';
}

if (! empty($errors)) {
    return view("notes/create.view.php", [
        'heading' => 'Create Note',
        'errors' => $errors
    ]);
}

$db->query('INSERT INTO notes(title, UserID) VALUES(:title, :UserID)', [
    'title' => $_POST['title'],
    'UserID' => 1
]);

header('location: /notes');
die();
