<?php
use Core\App;
use Core\Database;
use Core\Validator;
$db = App::resolve(Database::class);
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$errors = [];



if (!Validator::email($email)) {
   $errors['email'] = 'Please provide a valid email address.';
}
if (!Validator::string($password, 7, 255)) {
    $errors['password'] = 'Please provide a password of at least seven characters.';
}
if (!Validator::string($name, 4, 255)) {
    $errors['name'] = 'Please provide a name of at least four characters.';
}
if (! empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}
$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();
if ($user) {
    redirect('/');
} else {
    $db->query('INSERT INTO users(email, password, name) VALUES(:email, :password, :name)', [
        'email' => $email,
        'password' => password_hash($password,PASSWORD_BCRYPT),
        'name'=>$name
    ]);


    $id = $db->query('SELECT id FROM users where email = :email' , [
        'email' => $email,
    ])->find()['id'];


    $_SESSION['user'] = [
        'email' => $email,
        'name' => $name,
        'id' => $id
    ];
    redirect('/');
}