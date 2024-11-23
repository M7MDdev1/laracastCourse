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
        [
            "author"=>"Robert Kiosaki",
            "name"=>"Rich dad, Poor dad",
            "purchaseURL"=>"https://a.co/d/a2WQfR5"
         ],     
         [
            "author"=>"James Clear",
            "name"=>"Atomic Habits",
            "purchaseURL"=>"https://a.co/d/arWBEZt"
         ],
    ]
    ?>
    <ul>
         <?php foreach($Books as $Book) : ?>
            <a href="<?= $Book['purchaseURL'] ?>">
            <li><?= $Book['name'] ?></li>
            </a>
         <?php endforeach ?>
    </ul>
</body>
</html>