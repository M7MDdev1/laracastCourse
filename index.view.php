<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to this recommendation System</h1>

    <ul>
         <?php foreach($FilteredBooks as $Book) : ?>
            <a href="<?= $Book['purchaseURL'] ?>">
            <li><?= $Book['name'] ?> <sub>by <?= $Book['author'] ?></sub></li>
            </a>
         <?php endforeach ?>
    </ul>
</body>
</html>