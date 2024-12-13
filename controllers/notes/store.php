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
$currentUserId = $_SESSION['user']['id'];
// dd($_SESSION);
$db->query('INSERT INTO notes(title, UserID) VALUES(:title, :UserID)', [
    'title' => $_POST['title'],
    'UserID' => $currentUserId
]);

header('location: /notes');
die();
