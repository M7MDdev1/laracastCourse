<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to this recommendation System</h1>
    <?php 
    $Books = [
        "Atomic Habits",
        "Rich dad, Poor dad",
        "GitPro"
    ]
    ?>
    <ul>
         <?php foreach($Books as $Book) : ?>
         <li><?= $Book ?></li>
         <?php endforeach ?>
    </ul>
</body>
</html>