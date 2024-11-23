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
        ];

    function Filter($Items,$fn){
        $FilteredItems = [];
        foreach($Items as $Item){
            if($fn($Item)){
                $FilteredItems[] = $Item;
            }
        }
        return $FilteredItems;
    }

    $FilteredBooks = array_filter($Books, function($Book) {
        return $Book['author'] === "James Clear" || $Book['name'] === "Rich dad, Poor dad";
    });

    ?>
    <ul>
         <?php foreach($FilteredBooks as $Book) : ?>
            <a href="<?= $Book['purchaseURL'] ?>">
            <li><?= $Book['name'] ?> <sub>by <?= $Book['author'] ?></sub></li>
            </a>
         <?php endforeach ?>
    </ul>
</body>
</html>